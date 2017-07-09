<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 22:57
 */

namespace BinaryStudioAcademy\Game\Commands;

use BinaryStudioAcademy\Game\Contracts\Building;
use BinaryStudioAcademy\Game\User;
use BinaryStudioAcademy\Game\Exceptions\NotFoundException;

class Go extends AbstractCommand
{
    private $roomName;

    public function __construct(Building $building, User $user, $roomName)
    {
        parent::__construct($building, $user);
        $this->roomName = $roomName;
    }

    public function getMessage()
    {
        try {
            return $this->building->changeRoomByName($this->roomName);
        } catch (NotFoundException $e) {
            return $e->getMessage();
        }
    }
}