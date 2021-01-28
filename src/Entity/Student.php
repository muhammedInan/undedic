<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\StudentRepository;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ORM\HasLifecycleCallbacks
 * @ORM\Entity(repositoryClass=StudentRepository::class)
 * @ApiResource(
 *  attributes={
 *  normalizationContext={
 *  "groups"={"students_read"} 
 * }}
 * )
 */
class Student
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"students_read", "departments_read"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     * @Groups({"students_read", "departments_read"})
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=25)
     * @Groups({"students_read", "departments_read"})
     */
    private $lastName;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"students_read", "departments_read"})
     */
    private $numEtud;

    /**
     * @ORM\ManyToOne(targetEntity=Department::class, inversedBy="students")
     * @Groups({"students_read"})
     */
    private $department;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getNumEtud(): ?int
    {
        return $this->numEtud;
    }

    public function setNumEtud(int $numEtud): self
    {
        $this->numEtud = $numEtud;

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->department;
    }

    public function setDepartment(?Department $department): self
    {
        $this->department = $department;

        return $this;
    }

    
}
