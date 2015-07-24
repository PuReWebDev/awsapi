<?php

namespace PuReWebDev\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SortValues
 *
 * @ORM\Table(name="sort_values")
 * @ORM\Entity
 */
class SortValues
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=false)
     */
    private $value;


}
