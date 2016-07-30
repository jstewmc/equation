<?php
/**
 * The file for the quadratic-function tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

use Jstewmc\TestCase\TestCase;

/**
 * The tests for the quadratic-function class
 */
class QuadraticTest extends TestCase
{
    /* !__construct() */
    
    /**
     * __construct() should throw exception if a is not a number
     */
    public function testConstructThrowsExceptionIfAIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        new Quadratic('foo', 1, 1);
        
        return;
    }
    
    /**
     * __construct() should throw exception if b is not a number
     */
    public function testConstructThrowsExceptionIfBIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        new Quadratic(1, 'foo', 1);
        
        return;
    } 
    
    /**
     * __construct() should throw exception if c is not a number
     */
    public function testConstructThrowsExceptionIfCIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        new Quadratic(1, 1, 'foo');
        
        return;
    } 
    
    /**
     * __construct() should set the function's "a", "b", and "c" properties
     */
    public function testConstruct()
    {
        $a = 1;
        $b = 1;
        $c = 1;
        
        $function = new Quadratic($a, $b, $c);
        
        $this->assertEquals($a, $this->getProperty('a', $function));
        $this->assertEquals($b, $this->getProperty('b', $function));
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
        
        (new Quadratic(1, 1, 1))('foo');
        
        return;
    }
    
    /**
     * __invoke() should return number if x is a number
     */
    public function testInvokeReturnsNumberIfXIsANumber()
    {
        $a = 1;
        $b = 2;
        $c = 3;
        $x = 4;
        
        // 27
        
        $this->assertEquals(
            $a * pow($x, 2) + $b * $x + $c, 
            (new Quadratic($a, $b, $c))($x)
        );
        
        return;
    }
}
