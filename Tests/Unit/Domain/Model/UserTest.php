<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Stefan Froemken <sfroemken@jweiland.net>, jweiland.net
 *  			
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class Tx_Pforum_Domain_Model_User.
 *
 * @version $Id$
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @author Stefan Froemken <sfroemken@jweiland.net>
 */
class Tx_Pforum_Domain_Model_UserTest extends Tx_Extbase_Tests_Unit_BaseTestCase
{
    /**
     * @var Tx_Pforum_Domain_Model_User
     */
    protected $fixture;

    public function setUp()
    {
        $this->fixture = new Tx_Pforum_Domain_Model_User();
    }

    public function tearDown()
    {
        unset($this->fixture);
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->fixture->setName('Conceived at T3CON10');

        $this->assertSame(
            'Conceived at T3CON10',
            $this->fixture->getName()
        );
    }

    /**
     * @test
     */
    public function getUsernameReturnsInitialValueForString()
    {
    }

    /**
     * @test
     */
    public function setUsernameForStringSetsUsername()
    {
        $this->fixture->setUsername('Conceived at T3CON10');

        $this->assertSame(
            'Conceived at T3CON10',
            $this->fixture->getUsername()
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->fixture->setEmail('Conceived at T3CON10');

        $this->assertSame(
            'Conceived at T3CON10',
            $this->fixture->getEmail()
        );
    }

    /**
     * @test
     */
    public function getPasswordReturnsInitialValueForString()
    {
    }

    /**
     * @test
     */
    public function setPasswordForStringSetsPassword()
    {
        $this->fixture->setPassword('Conceived at T3CON10');

        $this->assertSame(
            'Conceived at T3CON10',
            $this->fixture->getPassword()
        );
    }
}
