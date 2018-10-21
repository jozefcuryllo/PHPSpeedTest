# PHPSpeedTest

It's just an experiment to examine how much time it takes for PHP to traverse over many files.
```
no  |   short (1) [ms]  |   long (10) [ms]  |   extralong (100) [ms]
------------------------------------------------------------------------
1   |   6               |   8               |   23   
2   |   11              |   15              |   27   
3   |   6               |   7               |   22   
4   |   7               |   8               |   23   
5   |   6               |   8               |   29   
6   |   7               |   11              |   23   
7   |   7               |   9               |   31   
8   |   7               |   8               |   23   
9   |   7               |   8               |   23   
10  |   6               |   7               |   24   
11  |   7               |   14              |   24   
12  |   6               |   7               |   27   
13  |   6               |   22              |   23   
14  |   6               |   7               |   23   
15  |   6               |   7               |   22   
16  |   11              |   12              |   23   
------------------------------------------------------------------------
Mean: 7                 |   9.875           |   24.375
Median: 6.5             |   8               |   23 
```

More details you can find in Polish on: http://szalonypecet.pl/2018/10/21/czy-korzystanie-ze-wzorcow-projektowych-spowalnia-dzialanie-programu/
