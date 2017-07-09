<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 20:39
 */

namespace BinaryStudioAcademy\Game\Commands;

use BinaryStudioAcademy\Game\Contracts\Building;
use BinaryStudioAcademy\Game\User;

abstract class AbstractCommand
{
    protected $building;
    protected $user;

    public function __construct(Building $building, User $user)
    {
        $this->building = $building;
        $this->user = $user;
    }

    public abstract function getMessage();
}