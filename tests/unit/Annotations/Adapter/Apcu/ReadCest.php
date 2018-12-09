<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Annotations\Adapter\Apcu;

use UnitTester;

class ReadCest
{
    /**
     * Tests Phalcon\Annotations\Adapter\Apcu :: read()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function annotationsAdapterApcuRead(UnitTester $I)
    {
        $I->wantToTest("Annotations\Adapter\Apcu - read()");
        $I->skipTest("Need implementation");
    }
}