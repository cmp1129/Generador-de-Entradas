<?php

/**
 * Data
 *
 * @Entity
 * @Table( name="DATA" )
 */

class Data{
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
	 * @Column(type="string", length=10, name="DATA")
	 */
	private $data;

	/**
	 * @var string
	 *
	 * @Column(type="string", length=5, name="HORA")
	 */
	private $hora;

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
     * Set data
     *
     * @param string $data
     *
     * @return Data
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
     * Set hora
     *
     * @param string $hora
     *
     * @return Data
     */
    public function setHora($hora)
    {
        $this->hora = $hora;

        return $this;
    }

    /**
     * Get hora
     *
     * @return string
     */
    public function getHora()
    {
        return $this->hora;
    }
}
