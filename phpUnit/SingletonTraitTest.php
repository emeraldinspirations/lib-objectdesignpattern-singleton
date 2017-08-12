<?php

/**
 * Container for unit tests for Singleton trait
 *
 * PHP Version 7
 *
 * @category  Library
 * @package   Lib-objectdesignpattern-singleton
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   MIT ../LICENSE.md
 * @link      https://github.com/emeraldinspirations/lib-objectdesignpattern-singleton
 */

namespace emeraldinspirations\library\objectDesignPattern\singleton;

/**
 * Unit tests for Singleton trait
 *
 * @category  Library
 * @package   Lib-objectdesignpattern-singleton
 * @author    Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @copyright 2017 Matthew "Juniper" Barlett <emeraldinspirations@gmail.com>
 * @license   MIT ../LICENSE.md
 * @version   GIT: $Id: f627306671268e7a24c3809def44b16abd93065a $ In Development.
 * @link      https://github.com/emeraldinspirations/lib-objectdesignpattern-singleton
 */
class SingletonTraitTest extends \PHPUnit_Framework_TestCase
{

    protected $Object;

    /**
     * Run before each test
     *
     * @return void
     */
    public function setUp()
    {

        $this->Object = new class() {
            use SingletonTrait;

            /**
             * Override protected __construct allowing constructing in test
             *
             * @return void
             */
            public function __construct()
            {

            }

            /**
             * Allow accessing static function from inside anonymous class
             *
             * @return self
             */
            public function testFromSingleton() : self
            {
                return self::fromSingleton();
            }

        };

    }

    /**
     * Verify singleton function returns same object
     *
     * @return void
     */
    public function testFromSingleton()
    {
        $Object1 = $this->Object->testFromSingleton();
        $Object2 = $this->Object->testFromSingleton();

        $this->assertSame(
            $Object1,
            $Object2,
            'Fails if singleton function not returning same object'
        );
    }

}
