<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Node
 *
 * @ORM\Table(name="node")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NodeRepository")
 */
class Node
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    public $id;

    /**
     * @var string
     *
     * @ORM\Column(name="oname", type="string", length=255)
     */
    public $oname;

    /**
     * @var float
     *
     * @ORM\Column(name="xr", type="float")
     */
    public $xr;

    /**
     * @var float
     *
     * @ORM\Column(name="yh", type="float")
     */
    public $yh;

    /**
     * @var int
     *
     * @ORM\Column(name="str", type="integer")
     */
    public $str;

    /**
     * @var int
     *
     * @ORM\Column(name="ort", type="integer", nullable=true)
     */
    public $ort;

    /**
     * @var float
     *
     * @ORM\Column(name="hb", type="float", nullable=true)
     */
    public $hb;

    /**
     * @var float
     *
     * @ORM\Column(name="hs", type="float", nullable=true)
     */
    public $hs;

    /**
     * @var float
     *
     * @ORM\Column(name="t", type="float", nullable=true)
     */
    public $t;

    /**
     * @var int
     *
     * @ORM\Column(name="iws", type="integer", nullable=true)
     */
    public $iws;

    /**
     * @var int
     *
     * @ORM\Column(name="parea", type="integer", nullable=true)
     */
    public $parea;

    /**
     * @var string
     *
     * @ORM\Column(name="dd", type="string", length=255, nullable=true)
     */
    public $dd;


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
     * Set oname
     *
     * @param string $oname
     *
     * @return Node
     */
    public function setOname($oname)
    {
        $this->oname = $oname;

        return $this;
    }

    /**
     * Get oname
     *
     * @return string
     */
    public function getOname()
    {
        return $this->oname;
    }

    /**
     * Set xr
     *
     * @param float $xr
     *
     * @return Node
     */
    public function setXr($xr)
    {
        $this->xr = $xr;

        return $this;
    }

    /**
     * Get xr
     *
     * @return float
     */
    public function getXr()
    {
        return $this->xr;
    }

    /**
     * Set yh
     *
     * @param float $yh
     *
     * @return Node
     */
    public function setYh($yh)
    {
        $this->yh = $yh;

        return $this;
    }

    /**
     * Get yh
     *
     * @return float
     */
    public function getYh()
    {
        return $this->yh;
    }

    /**
     * Set str
     *
     * @param integer $str
     *
     * @return Node
     */
    public function setStr($str)
    {
        $this->str = $str;

        return $this;
    }

    /**
     * Get str
     *
     * @return int
     */
    public function getStr()
    {
        return $this->str;
    }

    /**
     * Set ort
     *
     * @param integer $ort
     *
     * @return Node
     */
    public function setOrt($ort)
    {
        $this->ort = $ort;

        return $this;
    }

    /**
     * Get ort
     *
     * @return int
     */
    public function getOrt()
    {
        return $this->ort;
    }

    /**
     * Set hb
     *
     * @param float $hb
     *
     * @return Node
     */
    public function setHb($hb)
    {
        $this->hb = $hb;

        return $this;
    }

    /**
     * Get hb
     *
     * @return float
     */
    public function getHb()
    {
        return $this->hb;
    }

    /**
     * Set hs
     *
     * @param float $hs
     *
     * @return Node
     */
    public function setHs($hs)
    {
        $this->hs = $hs;

        return $this;
    }

    /**
     * Get hs
     *
     * @return float
     */
    public function getHs()
    {
        return $this->hs;
    }

    /**
     * Set t
     *
     * @param float $t
     *
     * @return Node
     */
    public function setT($t)
    {
        $this->t = $t;

        return $this;
    }

    /**
     * Get t
     *
     * @return float
     */
    public function getT()
    {
        return $this->t;
    }

    /**
     * Set iws
     *
     * @param integer $iws
     *
     * @return Node
     */
    public function setIws($iws)
    {
        $this->iws = $iws;

        return $this;
    }

    /**
     * Get iws
     *
     * @return int
     */
    public function getIws()
    {
        return $this->iws;
    }

    /**
     * Set parea
     *
     * @param integer $parea
     *
     * @return Node
     */
    public function setParea($parea)
    {
        $this->parea = $parea;

        return $this;
    }

    /**
     * Get parea
     *
     * @return int
     */
    public function getParea()
    {
        return $this->parea;
    }

    /**
     * Set dd
     *
     * @param string $dd
     *
     * @return Node
     */
    public function setDd($dd)
    {
        $this->dd = $dd;

        return $this;
    }

    /**
     * Get dd
     *
     * @return string
     */
    public function getDd()
    {
        return $this->dd;
    }
}

