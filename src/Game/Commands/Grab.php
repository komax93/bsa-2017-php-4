<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 22:25
 */

namespace BinaryStudioAcademy\Game\Commands;

use BinaryStudioAcademy\Game\Exceptions\EmptyException;

class Grab extends AbstractCommand
{
    public function getMessage()
    {
        try {
            return $this->user->addCoins($this->building->getRoom()->grabCoin());
        } catch (EmptyException $e) {
            return $e->getMessage();
        }
    }
}