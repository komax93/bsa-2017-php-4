<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 21:58
 */

namespace BinaryStudioAcademy\Game\Commands;

class Observe extends AbstractCommand
{
    public function getMessage()
    {
        return "There {$this->building->getRoom()->getCoinsCount()} coin(s) here.";
    }
}