<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 22:10
 */

namespace BinaryStudioAcademy\Game\Contracts;

interface Building
{
    public function getRoom() : Room;
    public function changeRoom(Room $room);
    public function changeRoomByName($roomName);
}