<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SupplierStock
 *
 * @ORM\Table(name="supplier_stock")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SupplierStockRepository")
 */
class SupplierStock
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Medication",inversedBy="supplierStock")
     * @ORM\JoinColumn(name="medication_id",referencedColumnName="id")
     */
    private $medications;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Supplier",inversedBy="medications")
     * @ORM\JoinColumn(name="supplier_id",referencedColumnName="id")
     */
    private $suppliers;
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
     * @return SupplierStock
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
     * @return SupplierStock
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
        $this->medications = new \Doctrine\Common\Collections\ArrayCollection();
        $this->suppliers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add medication
     *
     * @param \AppBundle\Entity\Medication $medication
     *
     * @return SupplierStock
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

    /**
     * Add supplier
     *
     * @param \AppBundle\Entity\Supplier $supplier
     *
     * @return SupplierStock
     */
    public function addSupplier(\AppBundle\Entity\Supplier $supplier)
    {
        $this->suppliers[] = $supplier;

        return $this;
    }

    /**
     * Remove supplier
     *
     * @param \AppBundle\Entity\Supplier $supplier
     */
    public function removeSupplier(\AppBundle\Entity\Supplier $supplier)
    {
        $this->suppliers->removeElement($supplier);
    }

    /**
     * Get suppliers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSuppliers()
    {
        return $this->suppliers;
    }
}
