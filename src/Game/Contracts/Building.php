<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 22:10
 */

namespace BinaryStudioAcademy\Game\Contracts;

use BinaryStudioAcademy\Game\Rooms\AbstractRoom;

interface Building
{
    public function getRoom() : AbstractRoom;
    public function changeRoom(AbstractRoom $room);
    public function changeRoomByName($roomName);
}