<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 16:09
 */

namespace BinaryStudioAcademy\Game\Rooms;

use BinaryStudioAcademy\Game\Contracts\Room;
use BinaryStudioAcademy\Game\Traits\RoomsTrait;

class Bedroom extends Room
{
    use RoomsTrait;
    const NEAREST_ROOMS = ['corridor'];

    public function __construct()
    {
        $this->name = "bedroom";
        $this->coin = 1;
    }
}