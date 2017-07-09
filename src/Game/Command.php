<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 23:17
 */

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Building;
use BinaryStudioAcademy\Game\Exceptions\EmptyException;
use BinaryStudioAcademy\Game\Exceptions\NotFoundException;
use BinaryStudioAcademy\Game\Exceptions\WrongCommandException;

class Command
{
    private $command;
    private $building;
    private $user;

    public function __construct(Building $building, User $user)
    {
        $this->building = $building;
        $this->user = $user;
    }

    public function setCommand($command)
    {
        $this->command = $command;
    }

    public function getMessage()
    {
        switch ($this->command) {
            case 'status' :
                return "You're at {$this->building->getRoom()->getName()}. You have {$this->user->getCoinsCount()} coins.";
                break;

            case 'observe' :
                return "There {$this->building->getRoom()->getCoinsCount()} coin(s) here.";
                break;

            case 'grab' :
                try {
                    return $this->user->addCoins($this->building->getRoom()->grabCoin());
                } catch (EmptyException $e) {
                    return $e->getMessage();
                }
                break;

            case 'where' :
                return "You're at {$this->building->getRoom()->getName()}. You can go to: {$this->building->getRoom()->getNearestRooms()}.";
                break;

            case 'help' :
                return "Command List: status, observe, grab, where, help, go room.";
                break;

            case (preg_match("/^go\s(.*)$/i", $this->command) ? true : false) :
                $command = $this->getRoomNameFromCommand($this->command);
                try {
                    return $this->building->changeRoomByName($command);
                } catch (NotFoundException $e) {
                    return $e->getMessage();
                }
                break;

            case 'exit' :
                exit();
                break;

            default :
                try {
                    throw new WrongCommandException("Unknown command: '{$this->command}'.");
                } catch (WrongCommandException $e) {
                    return $e->getMessage();
                }
                break;
        }
    }

    private function getRoomNameFromCommand($str)
    {
        preg_match("/^go\s+([a-zA-Z]+)/", $str, $result);
        return $result[1];
    }
}