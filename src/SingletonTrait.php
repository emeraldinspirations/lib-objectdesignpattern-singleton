<?php

/**
 * Container for Singleton Trait
 *
 * PHP Version 7
 *
 * @category  Library
 * @package   Lib-objectdesignpattern-singleton
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   TBD ../LICENSE.md
 * @link      https://github.com/emeraldinspirations/lib-filesystemabstraction
 */

namespace emeraldinspirations\library\objectDesignPattern\singleton;

/**
 * Singleton Trait
 *
 * @category  Library
 * @package   Lib-objectdesignpattern-singleton
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   TBD ../LICENSE.md
 * @version   GIT: $Id$ In Development.
 * @link      https://github.com/emeraldinspirations/lib-filesystemabstraction
 */

trait SingletonTrait
{

    /**
     * Construct object locally only, use fromSingleton()
     */
    protected function __construct()
    {
        // Singleton objects should not be directly constructable
    }

    /**
     * Create singleton instance of using class or return existing instance
     *
     * @return self
     */
    static function fromSingleton()
    {
        static $Singleton;

        return $Singleton = $Singleton ?? new self();
    }

}
