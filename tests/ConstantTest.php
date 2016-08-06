<?php
/**
 * The file for the constant-function tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

use Jstewmc\TestCase\TestCase;

/**
 * The tests for the constant-function class
 */
class ConstantTest extends TestCase
{    
    /* !__construct() */
    
    /**
     * __construct() should throw exception if b is not a number
     */
    public function testConstructThrowsExceptionIfCIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        new Constant('foo');
        
        return;
    }
    
    /**
     * __construct() should set the function's "c" property
     */
    public function testConstructIfCIsANumber()
    {
        $c = 1;
        
        $function = new Constant($c);
        
        $this->assertEquals($c, $this->getProperty('c', $function));
        
        return;
    }
    
    
    /* !invoke() */
    
    /**
     * __invoke() should throw exception if x is not a number
     */
    public function testInvokeThrowsExceptionIfXIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        (new Constant(1))('foo');
        
        return;
    }
    
    /**
     * __invoke() should return number if x is a number
     */
    public function testInvokeReturnsNumberIfXIsANumber()
    {
        $c = 1;
        $x = 2;
        
        $this->assertEquals($c, (new Constant($c))($x));
        
        return;
    }
}
