<?php

namespace App\Entity;

use App\Repository\ServiceLogRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceLogRepository::class)]
class ServiceLog
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $service;

    #[ORM\Column(type: 'datetimetz')]
    private $log_time;

    #[ORM\Column(type: 'string', length: 255)]
    private $request_type;

    #[ORM\Column(type: 'smallint')]
    private $response_code;

    #[ORM\Column(type: 'datetimetz')]
    private $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getService(): ?string
    {
        return $this->service;
    }

    public function setService(string $service): self
    {
        $this->service = $service;

        return $this;
    }

    public function getLogTime(): ?\DateTimeInterface
    {
        return $this->log_time;
    }

    public function setLogTime(\DateTimeInterface $log_time): self
    {
        $this->log_time = $log_time;

        return $this;
    }

    public function getRequestType(): ?string
    {
        return $this->request_type;
    }

    public function setRequestType(string $request_type): self
    {
        $this->request_type = $request_type;

        return $this;
    }

    public function getResponseCode(): ?int
    {
        return $this->response_code;
    }

    public function setResponseCode(int $response_code): self
    {
        $this->response_code = $response_code;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }
}
