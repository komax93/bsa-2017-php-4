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
        echo "Congrats! Coin has been added to inventory.";
        $this->coinsCount += $count;
    }
}