<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\ServiceLog;

class ServiceLogController extends AbstractController
{
	public function __construct(EntityManagerInterface $entityManager)
    {
		$this->entityManager = $entityManager;
	}
	
    #[Route('/service/log', name: 'app_service_log')]
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ServiceLogController.php',
        ]);
    }
	
	#[Route(path: "/count", name: "get_count", methods: ["GET"])]
    function get_count(Request $request): JsonResponse
    {
		$serviceNames = $request->get('serviceNames');
		$startDate = $request->get('startDate');
		$endDate = $request->get('endDate');
		$statusCode = $request->get('statusCode');
		$entityManager = $this->entityManager;
		$conn = $entityManager->getConnection();
		if($serviceNames || $startDate || $endDate || $statusCode)
		{
			$where = 'WHERE ';
			if($serviceNames)
			{
				$serviceNames = "'" .implode("','", $serviceNames  ) . "'"; 
				$where .= 'service IN('.$serviceNames.')';
			}	
			if($startDate)
			{
				$where .= ' AND log_time >= "'.date("Y-m-d",strtotime($startDate)).'"';
			}
			if($endDate)
			{
				$where .= ' AND log_time <= "'.date("Y-m-d",strtotime($endDate)).'"';
			}
			if($statusCode)
			{
				$where .= ' AND response_code = '.$statusCode;
			}	
			$sql = 'SELECT count(id) as counter FROM service_log '.$where;
			$stmt = $conn->prepare($sql);
			$resultSet = $stmt->executeQuery();
			
		}
		else
		{
			$sql = 'SELECT count(id) as counter FROM service_log';
			$stmt = $conn->prepare($sql);
			$resultSet = $stmt->executeQuery();
		}		
		$res = $resultSet->fetchAllAssociative();
		return $this->json($res[0]);
	}
}
