<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Mvc\Model\Transaction\Failed;

use IntegrationTester;

class GetCodeCest
{
    /**
     * Tests Phalcon\Mvc\Model\Transaction\Failed :: getCode()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcModelTransactionFailedGetCode(IntegrationTester $I)
    {
        $I->wantToTest("Mvc\Model\Transaction\Failed - getCode()");
        $I->skipTest("Need implementation");
    }
}
