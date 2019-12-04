<?php

namespace Admin\BackBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livre
 *
 * @ORM\Table(name="livre")
 * @ORM\Entity(repositoryClass="Admin\BackBundle\Repository\LivreRepository")
 */
class Livre
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="motCle", type="string", length=255)
     */
    private $motCle;

    /**
     * @var bool
     *
     * @ORM\Column(name="disponibilite", type="boolean")
     */
    private $disponibilite;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateIdition", type="datetime")
     */
    private $dateIdition;


     /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="livres")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    private $categorie;

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
     * Set titre
     *
     * @param string $titre
     *
     * @return Livre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Livre
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Livre
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set motCle
     *
     * @param string $motCle
     *
     * @return Livre
     */
    public function setMotCle($motCle)
    {
        $this->motCle = $motCle;

        return $this;
    }

    /**
     * Get motCle
     *
     * @return string
     */
    public function getMotCle()
    {
        return $this->motCle;
    }

    /**
     * Set disponibilite
     *
     * @param boolean $disponibilite
     *
     * @return Livre
     */
    public function setDisponibilite($disponibilite)
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    /**
     * Get disponibilite
     *
     * @return boolean
     */
    public function getDisponibilite()
    {
        return $this->disponibilite;
    }

    /**
     * Set dateIdition
     *
     * @param \DateTime $dateIdition
     *
     * @return Livre
     */
    public function setDateIdition($dateIdition)
    {
        $this->dateIdition = $dateIdition;

        return $this;
    }

    /**
     * Get dateIdition
     *
     * @return \DateTime
     */
    public function getDateIdition()
    {
        return $this->dateIdition;
    }

    /**
     * Set categorie
     *
     * @param \Admin\BackBundle\Entity\Categorie $categorie
     *
     * @return Livre
     */
    public function setCategorie(\Admin\BackBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Admin\BackBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }


    /**
     * @return string
     */

    public function _toString(){
        return $this->$titre;
    }
   
}
