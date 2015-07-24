<?php

namespace PuReWebDev\Bundle\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ItemsearchParameters
 *
 * @ORM\Table(name="itemsearch_parameters")
 * @ORM\Entity
 */
class ItemsearchParameters
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
     * @ORM\Column(name="parameter", type="string", length=255, nullable=false)
     */
    private $parameter;


}
