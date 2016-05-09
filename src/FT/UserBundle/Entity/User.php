<?php

//src/Acme/UserBundle/Entity/User.php

namespace FT\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity
 *@ORM\Table(name="fos_user")
 */

class User extends BaseUser
{   
    /**
     *@ORM\Id
     *@ORM\Column(type="integer")
     *@ORM\GeneratedValue( strategy="AUTO")
     */
     protected $id;
    
    /**
     * @ORM\Column(type="string", length=255,nullable=true )
     */
    private $prenom;
   
    /**
     * @ORM\Column(type="string", length=255,nullable=true )
     */
    private $nom;
    
    
    
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
     * @return Utilisateurs
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
     * @return Utilisateurs
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
     * @return Utilisateurs
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
     * @return Utilisateurs
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
     * @return Utilisateurs
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
?>