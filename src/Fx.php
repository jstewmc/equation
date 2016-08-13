<?php
/**
 * The file for the fx interface
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

/**
 * The fx interface
 *
 * @since  0.2.0
 */
interface Fx
{
    /* !Public methods */
    
    /**
     * Called when the function is treated like a (PHP) function
     *
     * @param   int|float  $x  the x-variable
     * @return  int|float
     * @throws  InvalidArgumentException  if $x is not a number
     * @since   0.3.1
     */
     public function __invoke($x);
}
