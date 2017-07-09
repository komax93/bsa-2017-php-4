<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 21:57
 */

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Building;
use BinaryStudioAcademy\Game\Rooms\AbstractRoom;
use BinaryStudioAcademy\Game\Exceptions\NotFoundException;
use BinaryStudioAcademy\Game\Rooms\Hall;

class Castle implements Building
{
    private $room;

    /**
     * Castle constructor.
     * This class implement Building contract.
     * First, the user appears in the Hall
     */
    public function __construct()
    {
        $this->room = new Hall();
    }

    /**
     * This method return room object.
     *
     * @return AbstractRoom
     */
    public function getRoom() : AbstractRoom
    {
        return $this->room;
    }

    /**
     * This method change room in building (in this case in Castle).
     *
     * @param AbstractRoom $room
     */
    public function changeRoom(AbstractRoom $room)
    {
        $this->room = $room;
    }

    /**
     * This method change room in building by name.
     *
     * @param $roomName
     * @return string
     * @throws NotFoundException
     */
    public function changeRoomByName($roomName)
    {
        if($this->room->isNearestRoom($roomName)) {
            $roomObject = "\BinaryStudioAcademy\Game\Rooms\\" . ucfirst($roomName);
            $this->room = new $roomObject;

            return "You're at {$this->getRoom()->getName()}. You can go to: {$this->getRoom()->getNearestRooms()}.";
        }
        else {
            throw new NotFoundException("Can not go to {$roomName}.");
        }
    }
}