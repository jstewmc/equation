<?php
/**
 * The file for an exponential function
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

use InvalidArgumentException;

/**
 * An exponential function (y = b ^ x)
 *
 * @since  0.1.0
 */
class Exponential extends Fx
{
    /* !Private properties */
    
    /**
     * @var    int|float  the constant
     * @since  0.1.0
     */
    private $b;
    
    
    /* !Magic methods */
    
    /**
     * Called when the function is constructed
     *
     * @param   int|float  $b  the constant
     * @throws  InvalidArgumentException  if $b is not a number
     * @since   0.1.0
     */
    public function __construct($b)
    {
        // if $b is not a number, short-circuit
        if ( ! is_numeric($b)) {
            throw new InvalidArgumentException(
                __METHOD__ . "() expects parameter one, b, to be a number"
            );
        }
        
        $this->b = $b;
    }
    
    /**
     * Called when the class is treated like a (PHP) function
     *
     * @param   int|float  $x  the independent variable
     * @return  int|float
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
        
        return pow($this->b, $x);
    }
}
