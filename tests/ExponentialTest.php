<?php
/**
 * The file for the exponential-function tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

use Jstewmc\TestCase\TestCase;

/**
 * The tests for the exponential-function class
 */
class ExponentialTest extends TestCase
{
    /* !__construct() */
    
    /**
     * __construct() should throw exception if b is not a number
     */
    public function testConstructThrowsExceptionIfBIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        new Exponential('foo');
        
        return;
    }
    
    /**
     * __construct() should set the function's "b" properties
     */
    public function testConstruct()
    {
        $b = 1;
        
        $function = new Exponential($b);
        
        $this->assertEquals($b, $this->getProperty('b', $function));
        
        return;
    } 
    
    
    /* !invoke() */
    
    /**
     * __invoke() should throw exception if x is not a number
     */
    public function testInvokeThrowsExceptionIfXIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        (new Exponential(1))('foo');
        
        return;
    }
    
    /**
     * __invoke() should return number if x is a number
     */
    public function testInvokeReturnsNumberIfXIsANumber()
    {
        $b = 2;
        $x = 3;
        
        $this->assertEquals(pow($b, $x), (new Exponential($b))($x));
        
        return;
    }
}
