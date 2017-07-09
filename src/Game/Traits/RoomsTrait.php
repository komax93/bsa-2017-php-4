<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 15:34
 */

namespace BinaryStudioAcademy\Game\Traits;


trait RoomsTrait
{
    public function getNearestRooms(): string
    {
        return implode(", ", self::NEAREST_ROOMS);
    }

    public function isNearestRoom($newRoomName): bool
    {
        if (in_array($newRoomName, self::NEAREST_ROOMS)) {
            return true;
        }

        return false;
    }
}