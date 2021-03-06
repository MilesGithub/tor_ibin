<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="`organism`")
 */
class Organism
{
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\ManyToMany(targetEntity="Domain" , inversedBy="organisms")
	 * @ORM\JoinTable(name="domain_organism",
	 *      joinColumns={
	 *      		@ORM\JoinColumn(name="organism_id", referencedColumnName="id")
	 *      	},
	 *      inverseJoinColumns={
	 *      		@ORM\JoinColumn(name="domain_id", referencedColumnName="id")
	 *      	}
	 * 		)
	 */
	private $domains;
	
	/**
	 * @ORM\ManyToMany(targetEntity="Protein" , inversedBy="organisms")
	 * @ORM\JoinTable(name="protein_organism",
	 *      joinColumns={
	 *      		@ORM\JoinColumn(name="organism_id", referencedColumnName="id")
	 *      	},
	 *      inverseJoinColumns={
	 *      		@ORM\JoinColumn(name="protein_id", referencedColumnName="id")
	 *      	}
	 * 		)
	 */
	private $proteins;
	
	
	public function __construct() {
		$this->domains = new \Doctrine\Common\Collections\ArrayCollection();
		$this->proteins = new \Doctrine\Common\Collections\ArrayCollection();
	}
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $taxid_id;
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $common_name;
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $class;
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $scientific_name;
	
	/**
	 * @ORM\Column(type="string", length=100, nullable=true)
	 */
	protected $description;


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
     * Set name
     *
     * @param string $name
     * @return Organism
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return Organism
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Organism
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
     * Add domains
     *
     * @param \AppBundle\Entity\Domain $domains
     * @return Organism
     */
    public function addDomain(\AppBundle\Entity\Domain $domains)
    {
        $this->domains[] = $domains;

        return $this;
    }

    /**
     * Remove domains
     *
     * @param \AppBundle\Entity\Domain $domains
     */
    public function removeDomain(\AppBundle\Entity\Domain $domains)
    {
        $this->domains->removeElement($domains);
    }

    /**
     * Get domains
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDomains()
    {
        return $this->domains;
    }

    /**
     * Add proteins
     *
     * @param \AppBundle\Entity\Protein $proteins
     * @return Organism
     */
    public function addProtein(\AppBundle\Entity\Protein $proteins)
    {
        $this->proteins[] = $proteins;

        return $this;
    }

    /**
     * Remove proteins
     *
     * @param \AppBundle\Entity\Protein $proteins
     */
    public function removeProtein(\AppBundle\Entity\Protein $proteins)
    {
        $this->proteins->removeElement($proteins);
    }

    /**
     * Get proteins
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProteins()
    {
        return $this->proteins;
    }

    /**
     * Set taxidId
     *
     * @param string $taxidId
     *
     * @return Organism
     */
    public function setTaxidId($taxidId)
    {
        $this->taxid_id = $taxidId;

        return $this;
    }

    /**
     * Get taxidId
     *
     * @return string
     */
    public function getTaxidId()
    {
        return $this->taxid_id;
    }

    /**
     * Set commonName
     *
     * @param string $commonName
     *
     * @return Organism
     */
    public function setCommonName($commonName)
    {
        $this->common_name = $commonName;

        return $this;
    }

    /**
     * Get commonName
     *
     * @return string
     */
    public function getCommonName()
    {
        return $this->common_name;
    }
    


    /**
     * Set scientificName
     *
     * @param string $scientificName
     *
     * @return Organism
     */
    public function setScientificName($scientificName)
    {
        $this->scientific_name = $scientificName;

        return $this;
    }

    /**
     * Get scientificName
     *
     * @return string
     */
    public function getScientificName()
    {
        return $this->scientific_name;
    }
}
