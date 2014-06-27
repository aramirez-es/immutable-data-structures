Immutable Data Structures in PHP
================================
First of all, this is a proof of concept just to learning purposes. *Don't use it, please*.

*Hardware where tests were performed*:
- MacBook Air 2011, OS X 10.9.3
- 1,7 GHz Intel Core i5
- 4 GB 1333 MHz DDR3

```php
$ php perf/skeleton.php 100000 array

    Performed test      : "array / 100000 iterations".
    Time taken          : "0.507 seg".
    Memory Peak         : "34.509 MB".
    Memory Peak (real)  : "35.500 MB".
```

```php
$ php perf/skeleton.php 100000 fixedarray

    Performed test      : "fixedarray / 100000 iterations".
    Time taken          : "0.072 seg".
    Memory Peak         : "24.353 MB".
    Memory Peak (real)  : "25.250 MB".
```

```php
$ php perf/skeleton.php 100000 dictionary

    Performed test      : "dictionary / 100000 iterations".
    Time taken          : "65.271 seg".
    Memory Peak         : "72.436 MB".
    Memory Peak (real)  : "73.250 MB".
```