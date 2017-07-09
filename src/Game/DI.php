<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 17:08
 */

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Building;

class DI
{
    public $building;
    public $user;
    public $command;

    public function __construct(Building $building, User $user)
    {
        $this->building = $building;
        $this->user = $user;
        $this->command = new Command($this->building, $this->user);
    }

    public function setCoinsToWin($coinsToWin)
    {
        $this->user->setMaxCoinsCount($coinsToWin);
    }
}