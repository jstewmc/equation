# f(x)
Simple math functions.

```php
use Jstewmc\Fx;

(new Constant(1))(3);         // returns 1
(new Equality())(3);          // returns 3
(new Linear(1, 2))(3);        // returns 5 (1 * 3 + 2)
(new Quadratic(1, 2, 3))(4);  // returns 27 (1 * 4 ^ 2 + 2 * 4 + 3)
(new Power(1, 2))(3);         // returns 9 (1 * 3 ^ 2)
(new Exponential(1))(2);      // returns 1 (1 ^ 2)
```

This library supports the following functions: 

* constant, `c = x`
* equality, `y = x`
* linear, `y = mx + b` 
* quadratic, <code>y = ax<sup>2</sup> + bx + c</code>
* power, <code>y = cx<sup>p</sup></code>
* exponential, <code>y = b<sup>x</sup></code>

## Constant

A constant function where `c = x`:

```php
use Jstewmc\Fx

$fx = new Constant(1);

$fx(1);  // returns 1
$fx(2);  // returns 1
$fx(3);  // returns 1
```

## Equality

An equality where `y = x`:

```php
use Jstewmc\Fx;

$fx = new Equality();

$fx(1);  // returns 1
$fx(2);  // returns 2
$fx(3);  // returns 3
```

## Linear

A linear function is `y = mx + b`, where `m` is the _slope_ and `b` is the _y-intercept_:

```php
use Jstewmc\Fx;

$fx = new Linear(1, 2);

$fx(1);  // returns 3 (1 * 1 + 2)
$fx(2);  // returns 4 (1 * 2 + 2)
$fx(3);  // returns 5 (1 * 3 + 2)
```

## Quadratic

A univariate, standard-form quadratic function is <code>y = ax<sup>2</sup> + bx + c</code>, where `a`, `b`, and `c` are _constants_ (aka, the _quadratic coefficient_, the _linear coefficient_, and the _constant_, respectively):

```php
use Jstewmc\Fx;

$fx = new Quadratic(1, 2, 3);

$fx(1);  // returns 5 (1 * 1 ^ 2 + 2 * 1 + 3)
$fx(2);  // returns 11 (1 * 2 ^ 2 + 2 * 2 + 3)
$fx(3);  // returns 18 (1 * 3 ^ 2 + 2 * 3 + 3)
``` 

## Power

A power function is <code>y = cx<sup>p</sup></code>, where `c` is a _constant_, and `p` is the _power_:

```php
use Jstewmc\Fx;

$fx = new Power(1, 2);

$fx(1);  // returns 1 (1 * 1 ^ 2)
$fx(2);  // returns 4 (1 * 2 ^ 2)
$fx(3);  // returns 9 (1 * 3 ^ 2)
```

## Exponential

An exponential function is <code>y = b<sup>x</sup></code>, where `b` is a _constant_:

```php
use Jstewmc\Fx;

$fx = new Exponential(2);

$fx(1);  // returns 2 (2 ^ 1)
$fx(2);  // returns 4 (2 ^ 2)
$fx(3);  // returns 8 (2 ^ 3)
```

That's it!

## License

[MIT](https://github.com/jstewmc/test-case)

## Author

[Jack Clayton](mailto:clayjs0@gmail.com)

## Version 

### 0.3.1, August 16, 2016

* Update `Fx` parent class to be an interface

### 0.3.0, August 6, 2016

* Add `Fx` parent class

### 0.2.0, August 6, 2016

* Update README examples
* Add `Equality` function
* Add `Constant` function

### 0.1.0, July 30, 2016

* Initial release