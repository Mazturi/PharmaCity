<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medication
 *
 * @ORM\Table(name="medication")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MedicationRepository")
 */
class Medication
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
     * @ORM\Column(name="Name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Manufacturer", type="string", length=200)
     */
    private $manufacturer;



    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\PrescriptionMedication", mappedBy="medications")
     */
    private $prescriptionMedications;



    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\PharmacyStock",mappedBy="medications")
     */
    private $pharmacyStock;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\SupplierStock",mappedBy="medications")
     */
    private $supplierStock;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Medication
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
     * Set description
     *
     * @param string $description
     *
     * @return Medication
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
     * Set manufacturer
     *
     * @param string $manufacturer
     *
     * @return Medication
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * Set prescriptions
     *
     * @param \AppBundle\Entity\PrescriptionMedication $prescriptions
     *
     * @return Medication
     */
    public function setPrescriptions(\AppBundle\Entity\PrescriptionMedication $prescriptions = null)
    {
        $this->prescriptions = $prescriptions;

        return $this;
    }

    /**
     * Get prescriptions
     *
     * @return \AppBundle\Entity\PrescriptionMedication
     */
    public function getPrescriptions()
    {
        return $this->prescriptions;
    }

    /**
     * Set pharmacyStock
     *
     * @param \AppBundle\Entity\PharmacyStock $pharmacyStock
     *
     * @return Medication
     */
    public function setPharmacyStock(\AppBundle\Entity\PharmacyStock $pharmacyStock = null)
    {
        $this->pharmacyStock = $pharmacyStock;

        return $this;
    }

    /**
     * Get pharmacyStock
     *
     * @return \AppBundle\Entity\PharmacyStock
     */
    public function getPharmacyStock()
    {
        return $this->pharmacyStock;
    }

    /**
     * Set supplierStock
     *
     * @param \AppBundle\Entity\SupplierStock $supplierStock
     *
     * @return Medication
     */
    public function setSupplierStock(\AppBundle\Entity\SupplierStock $supplierStock = null)
    {
        $this->supplierStock = $supplierStock;

        return $this;
    }

    /**
     * Get supplierStock
     *
     * @return \AppBundle\Entity\SupplierStock
     */
    public function getSupplierStock()
    {
        return $this->supplierStock;
    }

    /**
     * Set prescriptionMedications
     *
     * @param \AppBundle\Entity\PrescriptionMedication $prescriptionMedications
     *
     * @return Medication
     */
    public function setPrescriptionMedications(\AppBundle\Entity\PrescriptionMedication $prescriptionMedications = null)
    {
        $this->prescriptionMedications = $prescriptionMedications;

        return $this;
    }

    /**
     * Get prescriptionMedications
     *
     * @return \AppBundle\Entity\PrescriptionMedication
     */
    public function getPrescriptionMedications()
    {
        return $this->prescriptionMedications;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->prescriptionMedications = new \Doctrine\Common\Collections\ArrayCollection();
        $this->pharmacyStock = new \Doctrine\Common\Collections\ArrayCollection();
        $this->supplierStock = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add prescriptionMedication
     *
     * @param \AppBundle\Entity\PrescriptionMedication $prescriptionMedication
     *
     * @return Medication
     */
    public function addPrescriptionMedication(\AppBundle\Entity\PrescriptionMedication $prescriptionMedication)
    {
        $this->prescriptionMedications[] = $prescriptionMedication;

        return $this;
    }

    /**
     * Remove prescriptionMedication
     *
     * @param \AppBundle\Entity\PrescriptionMedication $prescriptionMedication
     */
    public function removePrescriptionMedication(\AppBundle\Entity\PrescriptionMedication $prescriptionMedication)
    {
        $this->prescriptionMedications->removeElement($prescriptionMedication);
    }

    /**
     * Add pharmacyStock
     *
     * @param \AppBundle\Entity\PharmacyStock $pharmacyStock
     *
     * @return Medication
     */
    public function addPharmacyStock(\AppBundle\Entity\PharmacyStock $pharmacyStock)
    {
        $this->pharmacyStock[] = $pharmacyStock;

        return $this;
    }

    /**
     * Remove pharmacyStock
     *
     * @param \AppBundle\Entity\PharmacyStock $pharmacyStock
     */
    public function removePharmacyStock(\AppBundle\Entity\PharmacyStock $pharmacyStock)
    {
        $this->pharmacyStock->removeElement($pharmacyStock);
    }

    /**
     * Add supplierStock
     *
     * @param \AppBundle\Entity\SupplierStock $supplierStock
     *
     * @return Medication
     */
    public function addSupplierStock(\AppBundle\Entity\SupplierStock $supplierStock)
    {
        $this->supplierStock[] = $supplierStock;

        return $this;
    }

    /**
     * Remove supplierStock
     *
     * @param \AppBundle\Entity\SupplierStock $supplierStock
     */
    public function removeSupplierStock(\AppBundle\Entity\SupplierStock $supplierStock)
    {
        $this->supplierStock->removeElement($supplierStock);
    }
}
