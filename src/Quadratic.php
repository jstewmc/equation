<?php
/**
 * The file for a univariate quadratic function
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

use InvalidArgumentException;


/**
 * A univariate quadratic function (y = ax^2 + bx + c)
 *
 * @since  0.1.0
 */
class Quadratic
{
    /* !Private properties */
    
    /**
     * @var    int|float  the quadratic coefficient (aka, "a")
     * @since  0.1.0
     */ 
    private $a;
    
    /**
     * @var    int|float  the linear coefficient (aka, "b")
     * @since  0.1.0
     */
    private $b;
    
    /**
     * @var    int|float  the constant (aka, "c")
     * @since  0.1.0
     */
    private $c;
    
    
    /* !Magic methods */
    
    /**
     * Called when the function is constructed
     *
     * @param   int|float  $a  the function's quadratic coefficient
     * @param   int|float  $b  the function's linear coefficient
     * @param   int|float  $c  the function's constant
     * @throws  InvalidArgumentException  if $a is not a number
     * @throws  InvalidArgumentException  if $b is not a number
     * @throws  InvalidArgumentException  if $c is not a number
     * @since   0.1.0
     */
    public function __construct($a, $b, $c)
    {
        // if $a is not a number, short-circuit
        if ( ! is_numeric($a)) {
            throw new InvalidArgumentException(
                __METHOD__ . "() expects parameter one, a, to be a number"
            );
        }
        
        // if $b is not a number, short-circuit
        if ( ! is_numeric($b)) {
            throw new InvalidArgumentException(
                __METHOD__ . "() expects parameter two, b, to be a number"
            );
        }
        
        // if $c is not a number, short-circuit
        if ( ! is_numeric($c)) {
            throw new InvalidArgumentException(
                __METHOD__ . "() expects parameter three, c, to be a number"
            );
        }
        
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    
    /**
     * Called when the class is treated like a (PHP) function
     *
     * @param   int|float  $x  the function's independent variable (aka, "x")
     * @return  int|float  the function's result (aka, "y")
     * @throws  InvalidArgumentException  if $x is not a number
     * @since   0.1.0
     */
    public function __invoke($x)
    {
        // if $x is not a number, short-circuit
        if ( ! is_numeric($x)) {
            throw new InvalidArgumentException(
                __METHOD__ . "() expects parameter one, x, to be a number"
            );
        }
        
        return $this->a * pow($x, 2) + $this->b * $x + $this->c;
    }
}
