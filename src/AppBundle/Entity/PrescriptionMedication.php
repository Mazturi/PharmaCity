<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrescriptionMedication
 *
 * @ORM\Table(name="prescription_medication")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrescriptionMedicationRepository")
 */
class PrescriptionMedication
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
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Prescription",inversedBy="prescriptionMedications"))
     * @ORM\JoinColumn(name="prescription_id", referencedColumnName="id")
     */
    private $prescriptions;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Medication",inversedBy="prescriptionsMedications"))
     * @ORM\JoinColumn(name="medication_id", referencedColumnName="id")
     */
    private $medications;


//    /**
//     * @var float
//     *
//     * @ORM\Column(name="price", type="float")
//     */
//    private $price;

//    /**
//     * @var int
//     *
//     * @ORM\Column(name="quantity", type="integer")
//     */
//    private $quantity;


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
     * Constructor
     */
    public function __construct()
    {
        $this->prescription = new \Doctrine\Common\Collections\ArrayCollection();
        $this->medication = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add prescription
     *
     * @param \AppBundle\Entity\Prescription $prescription
     *
     * @return PrescriptionMedication
     */
    public function addPrescription(\AppBundle\Entity\Prescription $prescription)
    {
        $this->prescription[] = $prescription;

        return $this;
    }

    /**
     * Remove prescription
     *
     * @param \AppBundle\Entity\Prescription $prescription
     */
    public function removePrescription(\AppBundle\Entity\Prescription $prescription)
    {
        $this->prescription->removeElement($prescription);
    }

    /**
     * Get prescription
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * Add medication
     *
     * @param \AppBundle\Entity\Medication $medication
     *
     * @return PrescriptionMedication
     */
    public function addMedication(\AppBundle\Entity\Medication $medication)
    {
        $this->medication[] = $medication;

        return $this;
    }

    /**
     * Remove medication
     *
     * @param \AppBundle\Entity\Medication $medication
     */
    public function removeMedication(\AppBundle\Entity\Medication $medication)
    {
        $this->medication->removeElement($medication);
    }

    /**
     * Get medication
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * Get prescriptions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPrescriptions()
    {
        return $this->prescriptions;
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
     * Set prescriptions
     *
     * @param \AppBundle\Entity\Prescription $prescriptions
     *
     * @return PrescriptionMedication
     */
    public function setPrescriptions(\AppBundle\Entity\Prescription $prescriptions = null)
    {
        $this->prescriptions = $prescriptions;

        return $this;
    }

    /**
     * Set medications
     *
     * @param \AppBundle\Entity\Medication $medications
     *
     * @return PrescriptionMedication
     */
    public function setMedications(\AppBundle\Entity\Medication $medications = null)
    {
        $this->medications = $medications;

        return $this;
    }
}
