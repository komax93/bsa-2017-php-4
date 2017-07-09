<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 15:48
 */

namespace BinaryStudioAcademy\Game\Rooms;

use BinaryStudioAcademy\Game\Contracts\Room;
use BinaryStudioAcademy\Game\Traits\RoomsTrait;

class Hall extends Room
{
    use RoomsTrait;
    const NEAREST_ROOMS = ['basement', 'corridor'];

    public function __construct()
    {
        $this->name = "hall";
        $this->coin = 1;
    }
}