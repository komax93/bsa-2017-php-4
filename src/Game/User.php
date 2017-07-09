<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 0:24
 */

namespace BinaryStudioAcademy\Game;

class User
{
    private $coinsCount;
    private $maxCoinsCount;

    public function __construct()
    {
        $this->coinsCount = 0;
    }

    public function getCoinsCount()
    {
        return $this->coinsCount;
    }

    public function addCoins($count)
    {
        $this->coinsCount += $count;

        if($this->coinsCount < $this->maxCoinsCount) {
            echo "Congrats! Coin has been added to inventory.";
        }
        else {
            echo "Good job. You've completed this quest. Bye!";
            exit();
        }
    }

    public function getMaxCoinsCount()
    {
        return $this->maxCoinsCount;
    }

    public function setMaxCoinsCount($maxCoinsCount)
    {
        $this->maxCoinsCount = $maxCoinsCount;
    }
}