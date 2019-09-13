<?php
include_once "Song.php";

$number = trim(fgets(STDIN));

while ($number) {
    $songData = explode(';', trim(fgets(STDIN)));
    try {
        if (count($songData) != 3) {
            throw new Exception('Invalid song.');
        } else {
            $s_artist = $songData[0];
            $s_name = $songData[1];
            $s_length = explode(':', $songData[2]);

            $s_minutes = $s_length[0];
            $s_seconds = $s_length[1];

            $mySong = new Song($s_artist, $s_name, $s_minutes, $s_seconds);

            print "Song added." . PHP_EOL;

        }
    } catch (Exception $ex) {

        print $ex->getMessage();
    }

    $number--;
}

print "Song added: " . $mySong::$counter . "\r\n";

$hours = floor(floor($mySong::$totalLength / 60) / 60);
$minutes = str_pad(floor($mySong::$totalLength / 60) % 60, 2, "0", STR_PAD_LEFT);
$seconds = str_pad($mySong::$totalLength % 60, 2, "0", STR_PAD_LEFT);

print "Playlist length: " . "{$hours}h {$minutes}m {$seconds}s";
