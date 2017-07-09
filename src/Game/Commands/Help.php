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
    public function getMessage()
    {
        return "Command List: status, observe, grab, where, help, go room.";
    }
}