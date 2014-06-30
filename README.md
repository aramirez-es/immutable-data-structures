Immutable Data Structures in PHP
================================
First of all, this is a proof of concept just to learning purposes. *Don't use it, please*.

*Hardware where tests were performed*:
- MacBook Air 2011, OS X 10.9.3
- 1,7 GHz Intel Core i5
- 4 GB 1333 MHz DDR3

```bash
$ php perf/skeleton.php 10000 array

    Performed test      : "array / 10000 ops (30% writes / 70% reads)".
    Time taken          : "0.232 seg".
    Memory Peak         : "3.113 MB".
    Memory Peak (real)  : "3.250 MB".
```

```bash
$ php perf/skeleton.php 10000 dictionary

    Performed test      : "dictionary / 10000 ops (30% writes / 70% reads)".
    Time taken          : "0.444 seg".
    Memory Peak         : "4.072 MB".
    Memory Peak (real)  : "4.500 MB".
```

```bash
$ php perf/skeleton.php 10000 mutable-dictionary

   Performed test      : "mutable-dictionary / 10000 ops (30% writes / 70% reads)".
    Time taken          : "0.450 seg".
    Memory Peak         : "4.954 MB".
    Memory Peak (real)  : "5.250 MB".
```

Known issues
------------
- Tree is not re-indexed after every set.
