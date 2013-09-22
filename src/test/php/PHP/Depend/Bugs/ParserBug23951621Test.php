<?php
/**
 * This file is part of PHP_Depend.
 *
 * PHP Version 5
 *
 * Copyright (c) 2008-2011, Manuel Pichler <mapi@pdepend.org>.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the name of Manuel Pichler nor the names of his
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @copyright 2008-2011 Manuel Pichler. All rights reserved.
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       https://www.pivotaltracker.com/story/show/23951621
 * @since     0.10.9
 */

require_once dirname(__FILE__) . '/AbstractTest.php';

/**
 * Test case for bug #23951621.
 *
 * @copyright 2008-2011 Manuel Pichler. All rights reserved.
 * @license   http://www.opensource.org/licenses/bsd-license.php  BSD License
 * @link       https://www.pivotaltracker.com/story/show/23951621
 * @since     0.10.9
 *
 * @ticket 23951621
 * @covers stdClass
 * @group pdepend
 * @group pdepend::bugs
 * @group regressiontest
 */
class PHP_Depend_Bugs_ParserBug23951621Test extends PHP_Depend_Bugs_AbstractTest
{
    /**
     * testParserHandlesHeredocAsPropertyDefaultValue
     *
     * @return void
     */
    public function testParserHandlesHeredocAsPropertyDefaultValue()
    {
        $class = $this->getFirstClassForTestCase();
        $this->assertInstanceOf('PHP_Depend_Code_Class', $class);
    }

    /**
     * testParserHandlesHeredocAsParameterDefaultValue
     *
     * @return void
     */
    public function testParserHandlesHeredocAsParameterDefaultValue()
    {
        $class = $this->getFirstClassForTestCase();
        $this->assertInstanceOf('PHP_Depend_Code_Class', $class);
    }

    /**
     * testParserHandlesHeredocAsClassConstantValue
     *
     * @return void
     */
    public function testParserHandlesHeredocAsClassConstantValue()
    {
        $interface = $this->getFirstInterfaceForTestCase();
        $this->assertInstanceOf('PHP_Depend_Code_Interface', $interface);
    }
}
