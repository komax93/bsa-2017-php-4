<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 15:47
 */

namespace BinaryStudioAcademy\Game\Rooms;

use BinaryStudioAcademy\Game\Exceptions\EmptyException;

abstract class AbstractRoom
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
        else {
            throw new EmptyException("There is no coins left here. Type 'where' to go to another location.");
        }
    }
}