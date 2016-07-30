<?php
/**
 * The file for a linear function
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

use InvalidArgumentException;


/**
 * A linear function (y = mx + b)
 *
 * @since  0.1.0
 */
class Linear
{
    /* !Private properties */
    
    /**
     * @var    int|float  the function's slope (aka, "m")
     * @since  0.1.0
     */ 
    private $m;
    
    /**
     * @var    int|float  the function's y-intercept (aka, "b")
     * @since  0.1.0
     */
    private $b;
    
    
    /* !Magic methods */
    
    /**
     * Called when the function is constructed
     *
     * @param   int|float  $m  the function's slope
     * @param   int|float  $b  the function's y-intercept
     * @throws  InvalidArgumentException  if $m is not a number
     * @throws  InvalidArgumentException  if $b is not a number
     * @since   0.1.0
     */
    public function __construct($m, $b)
    {
        // if $m is not a number, short-circuit
        if ( ! is_numeric($m)) {
            throw new InvalidArgumentException(
                __METHOD__ . "() expects parameter one, m, to be a number"
            );
        }
        
        // if $b is not a number, short-circuit
        if ( ! is_numeric($b)) {
            throw new InvalidArgumentException(
                __METHOD__ . "() expects parameter two, b, to be a number"
            );
        }
        
        $this->m = $m;
        $this->b = $b;
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
        
        return $this->m * $x + $this->b;
    }
}
