<?php

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Io\Reader;
use BinaryStudioAcademy\Game\Contracts\Io\Writer;

class Game
{
    const COINS_TO_WIN = 5;

    private $command;

    public function __construct()
    {
        $this->command = new Command(new Castle(), new User());
    }

    public function start(Reader $reader, Writer $writer): void
    {
        $writer->writeln("Welcome to the game. Choose your command!");

        while(true) {
            $writer->write("Command: ");
            $action = trim($reader->read());

            $this->command->setCommand($action);
            $this->command->getMessage();
        }
    }

    public function run(Reader $reader, Writer $writer)
    {
        //TODO: Implement step by step mode with game state persistence between steps

        $writer->writeln("You can't play yet. Please read input and convert it to commands.");
        $writer->writeln("Don't forget to create game's world.");
    }
}
