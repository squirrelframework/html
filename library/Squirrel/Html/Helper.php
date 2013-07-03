<?php

namespace Squirrel\Html;

/**
 * Helper for HTML response generation.
 *
 * @package Squirrel\Html
 * @author Valérian Galliat
 */
class Helper
{
    /**
     * Escapes given string for HTML output.
     *
     * @param string $string
     * @return string
     */
    public function escape($string)
    {
        return htmlspecialchars($string);
    }

    /**
     * Gets a style element.
     *
     * @param string $url
     * @return string
     */
    public function style($url)
    {
        return '<link href="' . $this->escape($url) . '" rel="stylesheet">';
    }

    /**
     * Gets a script element.
     *
     * @param string $url
     * @return string
     */
    public function script($url)
    {
        return '<script src="' . $this->escape($url) . '"></script>';
    }
}
