<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 16:01
 */

namespace BinaryStudioAcademy\Game\Rooms;

use BinaryStudioAcademy\Game\Traits\RoomsTrait;

class Basement extends AbstractRoom
{
    use RoomsTrait;
    const NEAREST_ROOMS = ['cabinet', 'hall'];

    public function __construct()
    {
        $this->name = "basement";
        $this->coin = 2;
    }
}