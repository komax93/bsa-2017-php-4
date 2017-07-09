<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 17:08
 */

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Building;
use BinaryStudioAcademy\Game\Commands\{
    Status, Observe, Grab, Unknown, Where, Help, Go
};

class GameServiceProvider
{
    public $building;
    public $user;
    public $command;

    public function __construct(Building $building, User $user)
    {
        $this->building = $building;
        $this->user = $user;
    }

    public function executeCommand($input)
    {
        $params = explode(" ", $input);
        $command = array_shift($params);

        switch ($command) {
            case 'status' :
                $this->command = new Status($this->building, $this->user);
                break;

            case 'observe' :
                $this->command = new Observe($this->building, $this->user);
                break;

            case 'grab' :
                $this->command = new Grab($this->building, $this->user);
                break;

            case 'where' :
                $this->command = new Where($this->building, $this->user);
                break;

            case 'help' :
                $this->command = new Help($this->building, $this->user);
                break;

            case 'go' :
                $this->command = new Go($this->building, $this->user, array_shift($params));
                break;

            case 'exit' :
                exit();
                break;

            default :
                $this->command = new Unknown($command);
                break;
        }
    }

    public function getCommandMessage()
    {
        return $this->command->getMessage();
    }
}