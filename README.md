# f(x)
Linear, (univariate) quadratic, power, and exponential functions:

```php
use Jstewmc\Fx;

(new Linear(1, 2))(3);        // returns 5 (1 * 3 + 2)
(new Quadratic(1, 2, 3))(4);  // returns 27 (1 * 4 ^ 2 + 2 * 4 + 3)
(new Power(1, 2))(3);         // returns 9 (1 * 3 ^ 2)
(new Exponential(1))(2);      // returns 1 (1 ^ 2)
```

## Linear

A linear function is `y = mx + b`, where `m` is the _slope_ and `b` is the _y-intercept_:

```php
use Jstewmc\Fx;

(new Linear(1, 2))(3);  // returns 5 (1 * 3 + 2)
```

## Quadratic

A univariate, standard-form quadratic function is <code>y = ax<sup>2</sup> + bx + c<code>, where `a`, `b`, and `c` are _constants_ (aka, the _quadratic coefficient_, the _linear coefficient_, and the _constant_, respectively):

```php
use Jstewmc\Fx;

(new Quadratic(1, 2, 3))(4);  // returns 27 (1 * 4 ^ 2 + 2 * 4 + 3)
``` 

## Power

A power function is `y = cx<sup>p</sup>`, where `c` is a _constant_, and `p` is the _power_:

```php
use Jstewmc\Fx;

(new Power(1, 2))(3);  // returns 9 (1 * 3 ^ 2)
```

## Exponential

An exponential function is `y = b<sup>x</sup>`, where `b` is a _constant_:

```php
use Jstewmc\Fx;
 
(new Exponential(1))(2);  // returns 1 (1 ^ 2)
```

That's it!

## License

[MIT](https://github.com/jstewmc/test-case)

## Author

[Jack Clayton](mailto:clayjs0@gmail.com)

## Version 

### 0.1.0, July 30, 2016

* Initial release