<?php

/**
 * Entrada
 *
 * @Entity
 * @Table( name="ENTRADA" )
 */


class Entrada{
	/**
	 * @var string
	 *
	 * @Id
	 * @Column(type="string", length=90, name="ID")
	 */
	private $id;
	/**
	 * @var int
	 *
	 * @ManyToOne(targetEntity="Event")
	 * @JoinColumn(name="event_id", referencedColumnName="id")
	 */
	private $event;
	
	/**
	 * @var int
	 *
	 * @ManyToOne(targetEntity="Data")
	 * @JoinColumn(name="data_id", referencedColumnName="id")
	 */
	private $data;
	
	/**
	 * @var int
	 *
	 * @ManyToOne(targetEntity="Localitzacio")
	 * @JoinColumn(name="loc_id", referencedColumnName="id")
	 */
	private $localitzacio;
	
	/**
	 * @var int
	 *
	 * @ManyToOne(targetEntity="Zona")
	 * @JoinColumn(name="zona_id", referencedColumnName="id")
	 */
	private $zona;
	
	/**
	 * @var int
	 *
	 * @ManyToOne(targetEntity="Pagament")
	 * @JoinColumn(name="pagament_id", referencedColumnName="id")
	 */
	private $pagament;
	
	
	/**
	 * @var integer
	 *
	 * @Column(type="integer", name="FILA")
	 */
	private $fila;
	
	/**
	 * @var integer
	 *
	 * @Column(type="integer", name="BUTACA")
	 */
	private $butaca;
	
	/**
	 * @var string
	 *
	 * @Column(type="string", length=90, name="DNI")
	 */
	private $compardor;
	

    /**
     * Set id
     *
     * @param string $id
     *
     * @return Entrada
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fila
     *
     * @param integer $fila
     *
     * @return Entrada
     */
    public function setFila($fila)
    {
        $this->fila = $fila;

        return $this;
    }

    /**
     * Get fila
     *
     * @return integer
     */
    public function getFila()
    {
        return $this->fila;
    }

    /**
     * Set butaca
     *
     * @param integer $butaca
     *
     * @return Entrada
     */
    public function setButaca($butaca)
    {
        $this->butaca = $butaca;

        return $this;
    }

    /**
     * Get butaca
     *
     * @return integer
     */
    public function getButaca()
    {
        return $this->butaca;
    }

    /**
     * Set compardor
     *
     * @param string $compardor
     *
     * @return Entrada
     */
    public function setCompardor($compardor)
    {
        $this->compardor = $compardor;

        return $this;
    }

    /**
     * Get compardor
     *
     * @return string
     */
    public function getCompardor()
    {
        return $this->compardor;
    }

    /**
     * Set event
     *
     * @param \Event $event
     *
     * @return Entrada
     */
    public function setEvent(\Event $event = null)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return \Event
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set data
     *
     * @param \Data $data
     *
     * @return Entrada
     */
    public function setData(\Data $data = null)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return \Data
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set localitzacio
     *
     * @param \Localitzacio $localitzacio
     *
     * @return Entrada
     */
    public function setLocalitzacio(\Localitzacio $localitzacio = null)
    {
        $this->localitzacio = $localitzacio;

        return $this;
    }

    /**
     * Get localitzacio
     *
     * @return \Localitzacio
     */
    public function getLocalitzacio()
    {
        return $this->localitzacio;
    }

    /**
     * Set zona
     *
     * @param \Zona $zona
     *
     * @return Entrada
     */
    public function setZona(\Zona $zona = null)
    {
        $this->zona = $zona;

        return $this;
    }

    /**
     * Get zona
     *
     * @return \Zona
     */
    public function getZona()
    {
        return $this->zona;
    }

    /**
     * Set pagament
     *
     * @param \Pagament $pagament
     *
     * @return Entrada
     */
    public function setPagament(\Pagament $pagament = null)
    {
        $this->pagament = $pagament;

        return $this;
    }

    /**
     * Get pagament
     *
     * @return \Pagament
     */
    public function getPagament()
    {
        return $this->pagament;
    }
}
