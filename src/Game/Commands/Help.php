<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 22:39
 */

namespace BinaryStudioAcademy\Game\Commands;

class Help extends AbstractCommand
{
    /**
     * Get message after command execution
     *
     * @return string
     */
    public function getMessage()
    {
        return "Command List: status, observe, grab, where, help, go room.";
    }
}