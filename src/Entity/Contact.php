<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Length(
     *     min = 3
     *     max = 50
     *     minMessage = "Votre nom doit être d'au moins 3 lettres"
     *     maxMessage = "Votre nom doit faire au maximum {{ limit }}"
     * )
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Length(
     *     min = 3
     *     max = 50
     *     minMessage = "Votre prénom doit être d'au moins 3 lettres"
     *     maxMessage = "Votre prénom doit faire au maximum {{ limit }}"
     * )
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\Email
     *     @Assert\Length(
     *     max = 50
     *     maxMessage = "Votre e-mail doit faire au maximum {{ limit }}"
     * )
     */
    private $Email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *     max = 255
     *     maxMessage = "Votre adresse doit faire au maximum {{ limit }}"
     * )
     */
    private $Adresse;

    /**
     * @ORM\Column(type="string", length=15)
     *     @Assert\Length(
     *     min = 8
     *     max = 15
     *     minMessage = "Votre numéro de téléphone doit être d'au moins 8 chiffres"
     *     maxMessage = "Votre numéro de téléphone doit faire au maximum {{ limit }}"
     * )
     */
    private $Telephone;

    /**
     * @ORM\Column(type="integer", length=3)
     *      * @Assert\Length(
     *     min = 2
     *     max = 3
     *     minMessage = "Votre âge doit être d'au moins 2 chiffres"
     *     maxMessage = "Votre âge doit faire au maximum {{ limit }}"
     * )
     */
    private $Age;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->Email;
    }

    public function setEmail(string $Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->Adresse;
    }

    public function setAdresse(string $Adresse): self
    {
        $this->Adresse = $Adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->Telephone;
    }

    public function setTelephone(string $Telephone): self
    {
        $this->Telephone = $Telephone;

        return $this;
    }

    public function getAge(): ?int
    {
        return $this->Age;
    }

    public function setAge(int $Age): self
    {
        $this->Age = $Age;

        return $this;
    }
}
