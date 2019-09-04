
<?php
$out = 'Hello, there! ';
$conStr = function ($n = 3, &$out) use (&$conStr){
    if ($n > 0) {
        $temp = $out . ", " . $conStr($n - 1, $out);
        return $temp;
        };

return '';
};

print $conStr(3,$out);


