<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UtilisateurRepository")
 * @UniqueEntity(
 * fields={"username"},
 * message="Ce login existe déjà, Veuillez vous connecter"
 * )
 * @UniqueEntity(
 * fields={"mail"},
 * message="Cette adresse mail existe déjà, Veuillez vous connecter"
 * )
 */
class Utilisateur implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=5, max=15, minMessage="Votre identifiant doit contenir plus de 5 caractères", maxMessage="Votre identifiant doit contenir moins de 15 caractères")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=8, max=32, minMessage="Votre mot de passe doit contenir plus de 8 caractères", maxMessage="Votre mot de passe doit contenir moins de 32 caractères")
     */
    private $password;
    /**
     * @Assert\Length(min=8, max=32, minMessage="Votre mot de passe doit contenir plus de 8 caractères", maxMessage="Votre mot de passe doit contenir moins de 32 caractères")
     * @Assert\EqualTo(propertyPath="password", message="Les mots de passe ne sont pas les mêmes")
     */

    private $passwordVerification;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(
     *     message = "The email '{{ value }}' is not a valid email."
     * )
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=2, max=20, minMessage="Votre nom doit contenir plus de 2 caractères", maxMessage="Votre nom doit contenir moins de 20 caractères")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=2, max=20, minMessage="Votre prénom doit contenir plus de 2 caractères", maxMessage="Votre prénom doit contenir moins de 20 caractères")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=10, max=100, minMessage="Votre adresse doit contenir plus de 10 caractères", maxMessage="Votre adresse doit contenir moins de 100 caractères")
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Length(min=5, max=5, minMessage="Votre mot de passe doit contenir plus de 4 caractères", maxMessage="Votre code postal doit contenir moins de 6 caractères")
     */
    private $cpostal;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(min=3, max=30, minMessage="Votre ville doit contenir plus de 3 caractères", maxMessage="Votre ville doit contenir moins de 30 caractères")
     */
    private $ville;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Length(min=9, max=15, minMessage="Votre téléphone doit contenir plus de 8 caractères", maxMessage="Votre numéro de téléphone doit contenir moins de 15 caractères")
     */
    private $phone;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPasswordVerification(): ?string
    {
        return $this->passwordVerification;
    }

    public function setPasswordVerification(string $passwordVerification): self
    {
        $this->passwordVerification = $passwordVerification;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCpostal(): ?int
    {
        return $this->cpostal;
    }

    public function setCpostal(int $cpostal): self
    {
        $this->cpostal = $cpostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getPhone(): ?int
    {
        return $this->phone;
    }

    public function setPhone(int $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
    public function eraseCredentials()
    {
        
    }
    public function getSalt()
    {
        
    }
    public function getRoles()
    {
        return ['ROLE_USER'];
    }
}
