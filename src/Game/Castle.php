<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 21:57
 */

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Building;
use BinaryStudioAcademy\Game\Contracts\Room;
use BinaryStudioAcademy\Game\Exceptions\NotFoundException;

class Castle implements Building
{
    private $room;

    public function __construct(Room $room)
    {
        $this->room = $room;
    }

    public function getRoom() : Room
    {
        return $this->room;
    }

    public function changeRoom(Room $room)
    {
        $this->room = $room;
    }

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