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

    /**
     * Get current room name
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get coins count in this room
     *
     * @return mixed
     */
    public function getCoinsCount()
    {
        return $this->coin;
    }

    /**
     * This method grabs 1 coin from the room. If in room is not exist coins - throw EmptyException
     *
     * @return int
     * @throws EmptyException
     */
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