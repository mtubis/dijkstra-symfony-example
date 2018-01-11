<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pipe
 *
 * @ORM\Table(name="pipe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PipeRepository")
 */
class Pipe
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
     * @var int
     *
     * @ORM\Column(name="apipe", type="integer")
     */
    public $apipe;

    /**
     * @var int
     *
     * @ORM\Column(name="ann", type="integer")
     */
    public $ann;

    /**
     * @var int
     *
     * @ORM\Column(name="art", type="integer")
     */
    public $art;

    /**
     * @var string
     *
     * @ORM\Column(name="ausl", type="string", length=255, nullable=true)
     */
    public $ausl;

    /**
     * @var string
     *
     * @ORM\Column(name="avglc", type="string", length=255, nullable=true)
     */
    public $avglc;

    /**
     * @var string
     *
     * @ORM\Column(name="dql", type="string", length=255, nullable=true)
     */
    public $dql;

    /**
     * @var string
     *
     * @ORM\Column(name="dqv", type="string", length=255, nullable=true)
     */
    public $dqv;

    /**
     * @var float
     *
     * @ORM\Column(name="fgate", type="float", nullable=true)
     */
    public $fgate;

    /**
     * @var float
     *
     * @ORM\Column(name="gf", type="float", nullable=true)
     */
    public $gf;

    /**
     * @var float
     *
     * @ORM\Column(name="gfest", type="float", nullable=true)
     */
    public $gfest;

    /**
     * @var float
     *
     * @ORM\Column(name="gem", type="float", nullable=true)
     */
    public $gem;

    /**
     * @var float
     *
     * @ORM\Column(name="geom3", type="float", nullable=true)
     */
    public $geom3;

    /**
     * @var float
     *
     * @ORM\Column(name="geom4", type="float", nullable=true)
     */
    public $geom4;

    /**
     * @var float
     *
     * @ORM\Column(name="gok", type="float", nullable=true)
     */
    public $gok;

    /**
     * @var float
     *
     * @ORM\Column(name="ws", type="float", nullable=true)
     */
    public $ws;


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
     * Set apipe
     *
     * @param integer $apipe
     *
     * @return Pipe
     */
    public function setApipe($apipe)
    {
        $this->apipe = $apipe;

        return $this;
    }

    /**
     * Get apipe
     *
     * @return int
     */
    public function getApipe()
    {
        return $this->apipe;
    }

    /**
     * Set ann
     *
     * @param integer $ann
     *
     * @return Pipe
     */
    public function setAnn($ann)
    {
        $this->ann = $ann;

        return $this;
    }

    /**
     * Get ann
     *
     * @return int
     */
    public function getAnn()
    {
        return $this->ann;
    }

    /**
     * Set art
     *
     * @param integer $art
     *
     * @return Pipe
     */
    public function setArt($art)
    {
        $this->art = $art;

        return $this;
    }

    /**
     * Get art
     *
     * @return int
     */
    public function getArt()
    {
        return $this->art;
    }

    /**
     * Set ausl
     *
     * @param string $ausl
     *
     * @return Pipe
     */
    public function setAusl($ausl)
    {
        $this->ausl = $ausl;

        return $this;
    }

    /**
     * Get ausl
     *
     * @return string
     */
    public function getAusl()
    {
        return $this->ausl;
    }

    /**
     * Set avglc
     *
     * @param string $avglc
     *
     * @return Pipe
     */
    public function setAvglc($avglc)
    {
        $this->avglc = $avglc;

        return $this;
    }

    /**
     * Get avglc
     *
     * @return string
     */
    public function getAvglc()
    {
        return $this->avglc;
    }

    /**
     * Set dql
     *
     * @param string $dql
     *
     * @return Pipe
     */
    public function setDql($dql)
    {
        $this->dql = $dql;

        return $this;
    }

    /**
     * Get dql
     *
     * @return string
     */
    public function getDql()
    {
        return $this->dql;
    }

    /**
     * Set dqv
     *
     * @param string $dqv
     *
     * @return Pipe
     */
    public function setDqv($dqv)
    {
        $this->dqv = $dqv;

        return $this;
    }

    /**
     * Get dqv
     *
     * @return string
     */
    public function getDqv()
    {
        return $this->dqv;
    }

    /**
     * Set fgate
     *
     * @param float $fgate
     *
     * @return Pipe
     */
    public function setFgate($fgate)
    {
        $this->fgate = $fgate;

        return $this;
    }

    /**
     * Get fgate
     *
     * @return float
     */
    public function getFgate()
    {
        return $this->fgate;
    }

    /**
     * Set gf
     *
     * @param float $gf
     *
     * @return Pipe
     */
    public function setGf($gf)
    {
        $this->gf = $gf;

        return $this;
    }

    /**
     * Get gf
     *
     * @return float
     */
    public function getGf()
    {
        return $this->gf;
    }

    /**
     * Set gfest
     *
     * @param float $gfest
     *
     * @return Pipe
     */
    public function setGfest($gfest)
    {
        $this->gfest = $gfest;

        return $this;
    }

    /**
     * Get gfest
     *
     * @return float
     */
    public function getGfest()
    {
        return $this->gfest;
    }

    /**
     * Set gem
     *
     * @param float $gem
     *
     * @return Pipe
     */
    public function setGem($gem)
    {
        $this->gem = $gem;

        return $this;
    }

    /**
     * Get gem
     *
     * @return float
     */
    public function getGem()
    {
        return $this->gem;
    }

    /**
     * Set geom3
     *
     * @param float $geom3
     *
     * @return Pipe
     */
    public function setGeom3($geom3)
    {
        $this->geom3 = $geom3;

        return $this;
    }

    /**
     * Get geom3
     *
     * @return float
     */
    public function getGeom3()
    {
        return $this->geom3;
    }

    /**
     * Set geom4
     *
     * @param float $geom4
     *
     * @return Pipe
     */
    public function setGeom4($geom4)
    {
        $this->geom4 = $geom4;

        return $this;
    }

    /**
     * Get geom4
     *
     * @return float
     */
    public function getGeom4()
    {
        return $this->geom4;
    }

    /**
     * Set gok
     *
     * @param float $gok
     *
     * @return Pipe
     */
    public function setGok($gok)
    {
        $this->gok = $gok;

        return $this;
    }

    /**
     * Get gok
     *
     * @return float
     */
    public function getGok()
    {
        return $this->gok;
    }

    /**
     * Set ws
     *
     * @param float $ws
     *
     * @return Pipe
     */
    public function setWs($ws)
    {
        $this->ws = $ws;

        return $this;
    }

    /**
     * Get ws
     *
     * @return float
     */
    public function getWs()
    {
        return $this->ws;
    }
}

