<?php

// Converts a number into a short version, eg: 1000 -> 1k
// Based on: http://stackoverflow.com/a/4371114
function number_format_short($n, $precision = 1)
{
    if (is_numeric($n)) {
        if ($n < 900) {
            // 0 - 900
            $n_format = number_format($n, $precision);
            $suffix = '';
        } else if ($n < 900000) {
            // 0.9k-850k
            $n_format = number_format($n / 1000, $precision);
            $suffix = 'K';
        } else if ($n < 900000000) {
            // 0.9m-850m
            $n_format = number_format($n / 1000000, $precision);
            $suffix = 'M';
        } else if ($n < 900000000000) {
            // 0.9b-850b
            $n_format = number_format($n / 1000000000, $precision);
            $suffix = 'B';
        } else {
            // 0.9t+
            $n_format = number_format($n / 1000000000000, $precision);
            $suffix = 'T';
        }

        // Remove unecessary zeroes after decimal. "1.0" -> "1"; "1.00" -> "1"
        // Intentionally does not affect partials, eg "1.50" -> "1.50"
        if ($precision > 0) {
            $dotzero = '.' . str_repeat('0', $precision);
            $n_format = str_replace($dotzero, '', $n_format);
        }

        return $n_format . $suffix;
    } else return $n;
}

/*
Example Usage:
number_format_short(7201); // Output: 7.2k
Demo:
echo '<table>';
for($d = 0; $d < 16; $d++ ) {
	$n = intval("09" . str_repeat( "0", $d ));
	$n = $n / 10;
	echo number_format_short($n) .'<br>'; // 0.9
	$n = intval("1" . str_repeat( "0", $d ));
	echo number_format_short($n) .'<br>'; // 1.0
	$n = intval("11" . str_repeat( "0", $d ));;
	$n = $n / 10;
	echo number_format_short($n) .'<br>'; // 1.1
}
echo '</table>';
Demo Output:
0.9
1
1.1

9
10
11

90
100
110

0.9K
1K
1.1K

9K
10K
11K

90K
100K
110K

0.9M
1M
1.1M

9M
10M
11M

90M
100M
110M

0.9B
1B
1.1B

9B
10B
11B

90B
100B
110B

0.9T
1T
1.1T

9T
10T
11T

90T
100T
110T

900T
1,000T
1,100T
*/