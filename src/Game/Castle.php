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
use BinaryStudioAcademy\Game\Rooms\Hall;

class Castle implements Building
{
    private $room;

    public function __construct()
    {
        $this->room = new Hall();
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
        }

        return false;
    }
}