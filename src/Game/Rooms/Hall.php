<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 15:48
 */

namespace BinaryStudioAcademy\Game\Rooms;

use BinaryStudioAcademy\Game\Traits\RoomsTrait;

class Hall extends AbstractRoom
{
    use RoomsTrait;
    const NEAREST_ROOMS = ['basement', 'corridor'];

    /**
     * Hall constructor.
     */
    public function __construct()
    {
        $this->name = "hall";
        $this->coin = 1;
    }
}