<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 16:05
 */

namespace BinaryStudioAcademy\Game\Rooms;

use BinaryStudioAcademy\Game\Contracts\Room;
use BinaryStudioAcademy\Game\Traits\RoomsTrait;

class Cabinet extends Room
{
    use RoomsTrait;
    const NEAREST_ROOMS = ['corridor'];

    public function __construct()
    {
        $this->name = "cabinet";
        $this->coin = 1;
    }
}