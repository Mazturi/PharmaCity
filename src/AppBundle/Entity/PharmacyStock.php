<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PharmacyStock
 *
 * @ORM\Table(name="pharmacy_stock")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PharmacyStockRepository")
 */
class PharmacyStock
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
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer")
     */
    private $quantity;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pharmacy",inversedBy="pharmacyStock")
     * @ORM\JoinColumn(name="pharmacy_id",referencedColumnName="id")
     */
    private $pharmacies;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Medication",inversedBy="pharmacyStock")
     * @ORM\JoinColumn(name="medication_id",referencedColumnName="id")
     */
    private $medications;


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
     * Set price
     *
     * @param float $price
     *
     * @return PharmacyStock
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     *
     * @return PharmacyStock
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pharmacies = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medications = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add pharmacy
     *
     * @param \AppBundle\Entity\Pharmacy $pharmacy
     *
     * @return PharmacyStock
     */
    public function addPharmacy(\AppBundle\Entity\Pharmacy $pharmacy)
    {
        $this->pharmacies[] = $pharmacy;

        return $this;
    }

    /**
     * Remove pharmacy
     *
     * @param \AppBundle\Entity\Pharmacy $pharmacy
     */
    public function removePharmacy(\AppBundle\Entity\Pharmacy $pharmacy)
    {
        $this->pharmacies->removeElement($pharmacy);
    }

    /**
     * Get pharmacies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPharmacies()
    {
        return $this->pharmacies;
    }

    /**
     * Add medication
     *
     * @param \AppBundle\Entity\Medication $medication
     *
     * @return PharmacyStock
     */
    public function addMedication(\AppBundle\Entity\Medication $medication)
    {
        $this->medications[] = $medication;

        return $this;
    }

    /**
     * Remove medication
     *
     * @param \AppBundle\Entity\Medication $medication
     */
    public function removeMedication(\AppBundle\Entity\Medication $medication)
    {
        $this->medications->removeElement($medication);
    }

    /**
     * Get medications
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedications()
    {
        return $this->medications;
    }
}
