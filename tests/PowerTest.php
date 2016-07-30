<?php
/**
 * The file for the power-function tests
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

use Jstewmc\TestCase\TestCase;

/**
 * The tests for the power-function class
 */
class PowerTest extends TestCase
{
    /* !__construct() */
    
    /**
     * __construct() should throw exception if c is not a number
     */
    public function testConstructThrowsExceptionIfCIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        new Power('foo', 1);
        
        return;
    }
    
    /**
     * __construct() should throw exception if p is not a number
     */
    public function testConstructThrowsExceptionIfPIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        new Power(1, 'foo');
        
        return;
    } 
    
    /**
     * __construct() should set the function's "c" and "p" properties
     */
    public function testConstruct()
    {
        $c = 1;
        $p = 1;
        
        $function = new Power($c, $p);
        
        $this->assertEquals($c, $this->getProperty('c', $function));
        $this->assertEquals($p, $this->getProperty('p', $function));
        
        return;
    } 
    
    
    /* !invoke() */
    
    /**
     * __invoke() should throw exception if x is not a number
     */
    public function testInvokeThrowsExceptionIfXIsNotANumber()
    {
        $this->setExpectedException('InvalidArgumentException');
        
        (new Power(1, 1))('foo');
        
        return;
    }
    
    /**
     * __invoke() should return number if x is a number
     */
    public function testInvokeReturnsNumberIfXIsANumber()
    {
        $c = 1;
        $p = 2;
        $x = 3;
        
        $this->assertEquals($c * pow($x, $p), (new Power($c, $p))($x));
        
        return;
    }
}
