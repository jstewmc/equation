<?php
/**
 * The file for an equality function
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

use InvalidArgumentException;

/**
 * An equality (i.e., y = x)
 *
 * @since  0.1.0
 */
class Equality implements Fx
{
    /* !Magic methods */
     
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
        
        return $x;
    }
}
