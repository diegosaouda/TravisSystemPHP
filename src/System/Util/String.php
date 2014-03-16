<?php
/**
 * Classe tem como objetivo trabalhar com string em formato orientado a objetos utilizando PHP
 * @autor Diego Saouda <diegosaouda@gmail.com>
 */

namespace System\Util;

use System\Exception\String\NotIsAStringException;

class String
{
    /**
     * @var string
     */
    private $value;

    /**
     * @param string $value
     */
    public function __construct($value = '')
    {
        if (! empty($value)) {
            $this->setValue($value);
        }
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        if (!is_string($value)) {
            throw new NotIsAStringException('$value not is a string');
        }

        $this->value = $value;

        return $this;
    }

    /**
     * String está vazia ?
     * @return bool
     */
    public function isEmpty()
    {
        return empty($this->value);
    }

    /**
     * Retorna o tamanho da string
     * @return int
     */
    public function length()
    {
        return strlen($this->value);
    }

    /**
     * Transforma todos os caracters em minusculos
     * @return String
     */
    public function toLowerCase()
    {
        return new String(strtolower($this->value));
    }

    /**
     * Transforma todos os caracteres em maiusculos
     * @return String
     */
    public function toUpperCase()
    {
        return new String(strtoupper($this->value));
    }

    /**
     * Remove os espaços do inicio e fim da string
     * @return String
     */
    public function trim()
    {
        return new String(trim($this->value));
    }

    /**
     * Inverte o texto
     * @return String
     */
    public function reverse()
    {
        return new String(strrev($this->value));
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
