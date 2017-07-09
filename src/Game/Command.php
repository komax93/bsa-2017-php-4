<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 08.07.17
 * Time: 23:17
 */

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Building;

class Command
{
    const TEST_COMMANDS = [
        ['status', "You're at hall. You have 0 coins."],
        ['observe', "There 1 coin(s) here."],
        ['grab', "Congrats! Coin has been added to inventory."],
        ['status', "You're at hall. You have 1 coins."],
        ['grab', "There is no coins left here. Type 'where' to go to another location."],
        ['where', "You're at hall. You can go to: basement, corridor."],
        ['go basement', "You're at basement. You can go to: cabinet, hall."],
        ['observe', "There 2 coin(s) here."],
        ['grab', "Congrats! Coin has been added to inventory."],
        ['grab', "Congrats! Coin has been added to inventory."],
        ['grab', "There is no coins left here. Type 'where' to go to another location."],
        ['status', "You're at basement. You have 3 coins."],
        ['where', "You're at basement. You can go to: cabinet, hall."],
        ['go tower', "Can not go to tower."],
        ['go cabinet', "You're at cabinet. You can go to: corridor."],
        ['observe', "There 1 coin(s) here."],
        ['collect', "Unknown command: 'collect'."],
        ['grab', "Congrats! Coin has been added to inventory."],
        ['status', "You're at cabinet. You have 4 coins."],
        ['go corridor', "You're at corridor. You can go to: hall, cabinet, bedroom."],
        ['grab', "There is no coins left here. Type 'where' to go to another location."],
        ['go bedroom', "You're at bedroom. You can go to: corridor."],
        ['observe', "There 1 coin(s) here."],
        ['grab', "Good job. You've completed this quest. Bye!"]
    ];

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
                echo "You're at {$this->building->getRoom()->getName()}. You have {$this->user->getCoinsCount()} coins.";
                break;
            case 'observe' :
                echo "There {$this->building->getRoom()->getCoinsCount()} coin(s) here.";
                break;
            case 'grab' :
                echo "Congrats! Coin has been added to inventory.";
                $this->user->addCoins($this->building->getRoom()->grabCoin());
                break;
            case 'where' :
                echo "You're at {$this->building->getRoom()->getName()}. You can go to: {$this->building->getRoom()->getNearestRooms()}.";
                break;
            case 'help' :
                echo "Command List: status, observe, grab, where, help, go room.";
                break;
            case (preg_match("/^go\s(.*)$/i", $this->command) ? true : false) :
                $command = $this->getGoCommand($this->command);
                if($this->building->changeRoomByName($command) !== false) {
                    echo "You're at {$this->building->getRoom()->getName()}. You can go to: {$this->building->getRoom()->getNearestRooms()}.";
                }
                break;
            case 'exit' :
                exit();
                break;
            default :
                throw new Exception("You have a command error!");
                break;
        }
    }

    private function getGoCommand($str)
    {
        preg_match("/^go\s+([a-zA-Z]+)/", $str, $result);
        return $result[1];
    }
}