<?php
/**
 * The file for a power function
 *
 * @author     Jack Clayton <clayjs0@gmail.com>
 * @copyright  2016 Jack Clayton
 * @license    MIT
 */

namespace Jstewmc\Fx;

use InvalidArgumentException;

/**
 * A power function (y = c * x ^ p)
 *
 * @since  0.1.0
 */
class Power
{
    /* !Private properties */
    
    /**
     * @var    int|float  the constant
     * @since  0.1.0
     */
    private $c;
    
    /**
     * @var    int|float  the power
     * @since  0.1.0
     */
    private $p;
    
    
    /* !Magic methods */
    
    /**
     * Called when the function is constructed
     *
     * @param   int|float  $c  the constant
     * @param   int|float  $p  the power
     * @throws  InvalidArgumentException  if $c is not a number
     * @throws  InvalidArgumentException  if $p is not a number
     * @since   0.1.0
     */
    public function __construct($c, $p)
    {
        // if $c is not a number, short-circuit
        if ( ! is_numeric($c)) {
            throw new InvalidArgumentException(
                __METHOD__ . "() expects parameter one, c, to be a number"
            );
        }
        
        // if $p is not a number, short-circuit
        if ( ! is_numeric($p)) {
            throw new InvalidArgumentException(
                __METHOD__ . "() expects parameter two, p, to be a number"
            );
        }
        
        $this->c = $c;
        $this->p = $p;
    }
    
    /**
     * Called when the class is treated like a (PHP) function
     *
     * @param   int|float  $x  the indenpent variable
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
        
        return $this->c * pow($x, $this->p);
    }
}
