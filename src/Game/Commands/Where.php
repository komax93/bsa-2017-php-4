<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 22:37
 */

namespace BinaryStudioAcademy\Game\Commands;

class Where extends AbstractCommand
{
    /**
     * Get message after command execution
     *
     * @return string
     */
    public function getMessage()
    {
        return "You're at {$this->building->getRoom()->getName()}. You can go to: {$this->building->getRoom()->getNearestRooms()}.";
    }
}