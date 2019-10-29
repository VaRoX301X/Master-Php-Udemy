<?php


class Configuracion {
    //Propiedades o metodos que para llamarlos no es necesario instanciar
    public static $color;
    public static $newsletter;
    public static $entorno;

    /**
     * @return mixed
     */
    public static function getColor()
    {
        return self::$color;
    }

    /**
     * @param mixed $color
     */
    public static function setColor($color)
    {
        self::$color = $color;
    }

    /**
     * @return mixed
     */
    public static function getNewsletter()
    {
        return self::$newsletter;
    }

    /**
     * @param mixed $newsletter
     */
    public static function setNewsletter($newsletter)
    {
        self::$newsletter = $newsletter;
    }

    /**
     * @return mixed
     */
    public static function getEntorno()
    {
        return self::$entorno;
    }

    /**
     * @param mixed $entorno
     */
    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }


}