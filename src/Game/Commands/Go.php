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

    /**
     * Go constructor.
     *
     * @param Building $building
     * @param User $user
     * @param $roomName
     */
    public function __construct(Building $building, User $user, $roomName)
    {
        parent::__construct($building, $user);
        $this->roomName = $roomName;
    }

    /**
     * Get message after command execution
     *
     * @return string
     */
    public function getMessage()
    {
        try {
            return $this->building->changeRoomByName($this->roomName);
        } catch (NotFoundException $e) {
            return $e->getMessage();
        }
    }
}