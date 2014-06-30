Immutable Data Structures in PHP
================================
First of all, this is a proof of concept just to learning purposes. *Don't use it, please*.

*Hardware where tests were performed*:
- MacBook Air 2011, OS X 10.9.3
- 1,7 GHz Intel Core i5
- 4 GB 1333 MHz DDR3

```bash
$ php perf/skeleton.php 100000 array

    Performed test      : "array / 100000 ops (30% writes / 70% reads)".
    Time taken          : "37.561 seg".
    Memory Peak         : "29.609 MB".
    Memory Peak (real)  : "31.000 MB".
```

```bash
$ php perf/skeleton.php 100000 dictionary

    Performed test      : "dictionary / 100000 ops (30% writes / 70% reads)".
    Time taken          : "54.677 seg".
    Memory Peak         : "37.970 MB".
    Memory Peak (real)  : "39.250 MB".
```

Known issues
------------
- Tree is not re-indexed after every set.
