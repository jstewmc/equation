<?php
/**
 * The file for the linear-function tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

use Jstewmc\TestCase\TestCase;

/**
 * The tests for the linear-function class
 */
class LinearTest extends TestCase
{
    /* !__construct() */
    
    /**
     * __construct() should throw exception if m is not a number
     */
    public function testConstructThrowsExceptionIfMIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        new Linear('foo', 1);
        
        return;
    }
    
    /**
     * __construct() should throw exception if b is not a number
     */
    public function testConstructThrowsExceptionIfBIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        new Linear(1, 'foo');
        
        return;
    } 
    
    /**
     * __construct() should set the function's "m" and "b" properties
     */
    public function testConstruct()
    {
        $m = 1;
        $b = 1;
        
        $function = new Linear($m, $b);
        
        $this->assertEquals($m, $this->getProperty('m', $function));
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
        
        (new Linear(1, 1))('foo');
        
        return;
    }
    
    /**
     * __invoke() should return number if x is a number
     */
    public function testInvokeReturnsNumberIfXIsANumber()
    {
        $m = 1;
        $x = 2;
        $b = 3;
        
        $this->assertEquals($m * $x + $b, (new Linear($m, $b))($x));
        
        return;
    }
}
