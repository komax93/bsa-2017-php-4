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

    /**
     * User constructor.
     * @param int $coinsCount
     * @param $maxCoinsCount
     */
    public function __construct($coinsCount = 0, $maxCoinsCount)
    {
        $this->coinsCount = 0;
        $this->maxCoinsCount = $maxCoinsCount;
    }

    /**
     * This method return users coins count
     * @return int
     */
    public function getCoinsCount()
    {
        return $this->coinsCount;
    }

    /**
     * This method add coins to user
     * @param $count
     * @return string
     */
    public function addCoins($count)
    {
        $this->coinsCount += $count;

        if($this->coinsCount < $this->maxCoinsCount) {
            return "Congrats! Coin has been added to inventory.";
        }
        else {
            return "Good job. You've completed this quest. Bye!";
            exit();
        }
    }

    /**
     * This method return max coins count, which user can collect
     * @return mixed
     */
    public function getMaxCoinsCount()
    {
        return $this->maxCoinsCount;
    }

    /**
     * This method set max coins count, which user can collect
     * @param $maxCoinsCount
     */
    public function setMaxCoinsCount($maxCoinsCount)
    {
        $this->maxCoinsCount = $maxCoinsCount;
    }
}