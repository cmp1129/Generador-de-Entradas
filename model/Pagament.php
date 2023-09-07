<?php

/**
 * Pagament
 *
 * @Entity
 * @Table( name="PAGAMENT" )
 */

class Pagament{
	/**
	 * @var int
	 *
	 * @Id
	 * @GeneratedValue
	 * @Column(type="integer")
	 */
	private $id;

	/**
	 * @var string
	 *
	 * @Column(type="string", length=90, name="BANC")
	 */
	private $banc;
	
	/**
	 * @var string
	 *
	 * @Column(type="string", length=90, name="REF_EXTERNA")
	 */
	private $referenciaExterna;
	

	/**
	 * @var string
	 *
	 * @Column(type="string", length=10, name="DATA")
	 */
	private $data;

	/**
	 * @var string
	 *
	 * @Column(type="string", length=90, name="ESTAT")
	 */
	private $estat;
	

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
     * Set banc
     *
     * @param string $banc
     *
     * @return Pagament
     */
    public function setBanc($banc)
    {
        $this->banc = $banc;

        return $this;
    }

    /**
     * Get banc
     *
     * @return string
     */
    public function getBanc()
    {
        return $this->banc;
    }

    /**
     * Set referenciaExterna
     *
     * @param string $referenciaExterna
     *
     * @return Pagament
     */
    public function setReferenciaExterna($referenciaExterna)
    {
        $this->referenciaExterna = $referenciaExterna;

        return $this;
    }

    /**
     * Get referenciaExterna
     *
     * @return string
     */
    public function getReferenciaExterna()
    {
        return $this->referenciaExterna;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return Pagament
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set estat
     *
     * @param string $estat
     *
     * @return Pagament
     */
    public function setEstat($estat)
    {
        $this->estat = $estat;

        return $this;
    }

    /**
     * Get estat
     *
     * @return string
     */
    public function getEstat()
    {
        return $this->estat;
    }
}
