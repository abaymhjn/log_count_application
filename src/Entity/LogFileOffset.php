<?php

namespace App\Entity;

use App\Repository\LogFileOffsetRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LogFileOffsetRepository::class)]
class LogFileOffset
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'bigint')]
    private $line_no;

    #[ORM\Column(type: 'datetimetz')]
    private $update_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLineNo(): ?string
    {
        return $this->line_no;
    }

    public function setLineNo(string $line_no): self
    {
        $this->line_no = $line_no;

        return $this;
    }

    public function getUpdateAt(): ?\DateTimeInterface
    {
        return $this->update_at;
    }

    public function setUpdateAt(\DateTimeInterface $update_at): self
    {
        $this->update_at = $update_at;

        return $this;
    }
}
