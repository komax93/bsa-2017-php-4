<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 20:43
 */

namespace BinaryStudioAcademy\Game\Commands;

class Status extends AbstractCommand
{
    public function getMessage()
    {
        return "You're at {$this->building->getRoom()->getName()}. You have {$this->user->getCoinsCount()} coins.";
    }
}