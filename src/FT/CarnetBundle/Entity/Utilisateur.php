<?php

namespace FT\CarnetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 */
class Utilisateur
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var string
     */
    private $nom_user;

    /**
     * @var string
     */
    private $mdp;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Utilisateur
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set nom_user
     *
     * @param string $nomUser
     * @return Utilisateur
     */
    public function setNomUser($nomUser)
    {
        $this->nom_user = $nomUser;

        return $this;
    }

    /**
     * Get nom_user
     *
     * @return string 
     */
    public function getNomUser()
    {
        return $this->nom_user;
    }

    /**
     * Set mdp
     *
     * @param string $mdp
     * @return Utilisateur
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    /**
     * Get mdp
     *
     * @return string 
     */
    public function getMdp()
    {
        return $this->mdp;
    }
}
