<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 15:47
 */

namespace BinaryStudioAcademy\Game\Contracts;

abstract class Room
{
    protected $name;
    protected $coin;

    public function getName()
    {
        return $this->name;
    }

    public function getCoinsCount()
    {
        return $this->coin;
    }

    public function grabCoin(): int
    {
        if ($this->coin > 0) {
            $this->coin--;

            return 1;
        }

        return 0;
    }
}