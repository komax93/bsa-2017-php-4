<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 16:03
 */

namespace BinaryStudioAcademy\Game\Rooms;

use BinaryStudioAcademy\Game\Traits\RoomsTrait;

class Corridor extends AbstractRoom
{
    use RoomsTrait;
    const NEAREST_ROOMS = ['hall', 'cabinet', 'bedroom'];

    public function __construct()
    {
        $this->name = "corridor";
        $this->coin = 0;
    }
}