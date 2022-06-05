<?php
namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use SplFileObject;
use App\Entity\ServiceLog;
use App\Entity\LogFileOffset;
use Doctrine\ORM\EntityManagerInterface;

#[AsCommand(
    name: 'app:insert-service-log',
    description: 'Insert Log in database from log.txt file',
    hidden: false
)]

class InsertServiceLogCommand extends Command
{
    // protected static $defaultName = 'app:create-user';
	
	// protected static $defaultDescription = 'Creates a new user.';
	
	public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;

        parent::__construct();
    }
	
	protected function configure(): void
    {
		$this->setHelp('This command allows you to create a user...');
    }
	
    protected function execute(InputInterface $input, OutputInterface $output): int
	{
		// $lines = file("logs.txt");
		$entityManager = $this->entityManager;
		$file = new SplFileObject("logs.txt");
		$LogFileOffset = $entityManager->getRepository(LogFileOffset::class)->find(1);
		//print_r($LogFileOffset->getLineNo());
		$initial_line = $LogFileOffset->getLineNo()==0?0:$LogFileOffset->getLineNo();
		$file->seek($initial_line);
		while(!$file->eof())
		{
			//$output->writeln("Processing Log Line No ".$line_number);
			$log_data = $file->fgets();
			$line_number = $file->key()+1;
			$get_service_name_array = explode(" - - [",$log_data);
			if($get_service_name_array)
			{
				$service_name = $get_service_name_array[0];
				$log_time_string = $get_service_name_array[1];
				$get_log_time_array = explode('] "',$log_time_string);
				if($get_log_time_array)
				{
					$log_date_time = new \DateTime($get_log_time_array[0]);
					$request_type_string = $get_log_time_array[1];
					$get_request_type_array = explode('" ',$request_type_string);
					if($get_request_type_array)
					{
						$request_type = $get_request_type_array[0];
						$response_code = $get_request_type_array[1];
					}
				}	
			}
			if($service_name && $log_date_time && $request_type && $response_code)
			{
				$serviceLog = new ServiceLog();
				$serviceLog->setService($service_name);
				$serviceLog->setLogTime($log_date_time);
				$serviceLog->setRequestType($request_type);
				$serviceLog->setResponseCode($response_code);
				$serviceLog->setCreatedAt(new \DateTime());
				$entityManager->persist($serviceLog);
				$entityManager->flush();
				
				$LogFileOffset->setLineNo($line_number);
				$entityManager->persist($LogFileOffset);
				$entityManager->flush();
				
				$output->writeln("Log inserted for line no ".$line_number);
				
				
				
			}
			else
			{
				$output->writeln("Data is not in correct format for line no ".$line_number);
			}
		}
		return Command::SUCCESS;
	}
}