<?php

class Song
{
    private $artistName;
    private $songName;
    static $totalLength;
    private $songLengthMinutes;
    private $songLengthSeconds;
    static $counter;


    public function __construct($artistName,
                                $songName,
                                $songLengthMinutes,
                                $songLengthSeconds)
    {
        $this->setArtistName($artistName);
        $this->setSongName($songName);
        $this->setSongLength($songLengthMinutes,$songLengthSeconds);
        self::$counter++;
    }

    public function setArtistName($artistName)
    {
        if (strlen($artistName) < 3 && strlen($artistName) > 20) {
            throw new \Exception("Artist name should be between 3 and 20 symbols." . PHP_EOL);
        } else {
            $this->artistName = $artistName;
        }
    }

    public function setSongName($songName)
    {
        if (strlen($songName) < 3 && strlen($songName) > 30) {
            throw new \Exception("Song name should be between 3 and 30 symbols." . PHP_EOL);
        }else{
            $this->songName = $songName;
        }
    }

    public function setSongLength(int $minutes, int $seconds)
    {
        if ($seconds < 0 || $seconds > (14 * 60 + 59)) {
            throw new \Exception("Invalid song length." . PHP_EOL);
        }
        if ($minutes < 0 || $minutes > 14) {
            throw new \Exception("Song minutes should be between 0 and 14." . PHP_EOL);
        }
        if ($seconds < 0 || $seconds > 59) {
            throw new \Exception("Song seconds should be between 0 and 59." . PHP_EOL);
        }

        $this->songLengthMinutes = $minutes;
        $this->songLengthSeconds = $seconds;
        self:: $totalLength += $this->songLengthMinutes * 60 + $this->songLengthSeconds;
    }


}