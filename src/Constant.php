<?php
/**
 * The file for a constant function
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

use InvalidArgumentException;

/**
 * A constant function (i.e., c = x)
 *
 * @since  0.1.0
 */
class Constant
{
    /* !Private properties */
    
    /**
     * @var    int|float  the constant value
     * @since  0.1.0
     */
    private $c;
    
    
    /* !Magic methods */
    
    /**
     * Called when the class is constructed
     *
     * @param  int|float  $c  the constant
     * @since  0.1.0
     */
    public function __construct($c)
    {
        // if $c is not a number, short-circuit
        if ( ! is_numeric($c)) {
            throw new InvalidArgumentException(
                __METHOD__ . "() expects parameter one, c, to be a number"
            );
        }
        
        $this->c = $c;
    } 
     
    /**
     * Called when the class is treated like a function
     *
     * @param   int|float  $x  the function's variable (aka, "x")
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
        
        return $this->c;
    }
}
