<?php

namespace App\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait Timestampable
{
  #[ORM\Column(type: 'datetime_immutable', options: ['default' => 'CURRENT_TIMESTAMP'])]
  private ?\DateTimeImmutable $createdAt = null;

  #[ORM\Column(type: 'datetime_immutable', options: ['default' => 'CURRENT_TIMESTAMP'])]
  private ?\DateTimeImmutable $updatedAt = null;


  public function getCreatedAt(): ?\DateTimeImmutable
  {
    return $this->createdAt;
  }

  #[ORM\PrePersist]
  public function setCreatedAt(): static
  {
    $this->createdAt = new \DateTimeImmutable();

    return $this;
  }

  public function getUpdatedAt(): ?\DateTimeImmutable
  {
    return $this->updatedAt;
  }

  #[ORM\PrePersist]
  public function setUpdatedAt(): static
  {
    $this->updatedAt = new \DateTimeImmutable();

    return $this;
  }
}