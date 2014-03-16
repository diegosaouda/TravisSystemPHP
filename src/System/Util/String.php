<?php

namespace System\Util;

use System\Exception\String\NotIsAStringException;

class String
{
    /**@var string*/
    private $value;

    /**@param string $value*/
    public function __construct($value = '')
    {
        if (! empty($value)) {
            $this->setValue($value);
        }
    }

    /**@param string $value*/
    public function setValue($value)
    {
        if (!is_string($value)) {
            throw new NotIsAStringException('$value not is a string');
        }

        $this->value = $value;

        return $this;
    }

    /**@return bool*/
    public function isEmpty()
    {
        return empty($this->value);
    }

    /**@return int*/
    public function length()
    {
        return strlen($this->value);
    }

    /**@return String*/
    public function toLowerCase()
    {
        return new String(strtolower($this->value));
    }

    /**@return String*/
    public function toUpperCase()
    {
        return new String(strtoupper($this->value));
    }

    /**@return String*/
    public function trim()
    {
        return new String(trim($this->value));
    }

    /**@return String*/
    public function reverse()
    {
        return new String(strrev($this->value));
    }

    /**@return string*/
    public function __toString()
    {
        return $this->value;
    }

}
