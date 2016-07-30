# f(x)
Linear, (univariate) quadratic, power, and exponential functions:

```php
use Jstewmc\Fx;

(new Linear(1, 2))(3);        // returns 5 (1 * 3 + 2)
(new Quadratic(1, 2, 3))(4);  // returns 27 (1 * 4 ^ 2 + 2 * 4 + 3)
(new Power(1, 2))(3);         // returns 9 (1 * 3 ^ 2)
(new Exponential(1))(2);      // returns 1 (1 ^ 2)
```

## License

[MIT](https://github.com/jstewmc/test-case)

## Author

[Jack Clayton](mailto:clayjs0@gmail.com)

## Version 

### 0.1.0, July 30, 2016

* Initial release