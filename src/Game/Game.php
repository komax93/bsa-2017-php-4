<?php

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Io\Reader;
use BinaryStudioAcademy\Game\Contracts\Io\Writer;
use BinaryStudioAcademy\Game\Rooms\Hall;

class Game
{
    const COINS_TO_WIN = 5;

    private $app;

    public function __construct()
    {
        $this->app = new DI(new Castle(new Hall()), new User());
        $this->app->setCoinsToWin(self::COINS_TO_WIN);
    }

    public function start(Reader $reader, Writer $writer): void
    {
        $writer->writeln("Welcome to the game. Choose your command!");

        while(true) {
            $writer->write("Command: ");
            $action = trim($reader->read());

            $this->app->command->setCommand($action);
            $this->app->command->getMessage();

            echo PHP_EOL;
        }
    }

    public function run(Reader $reader, Writer $writer)
    {
        //TODO: Implement step by step mode with game state persistence between steps

        $writer->writeln("You can't play yet. Please read input and convert it to commands.");
        $writer->writeln("Don't forget to create game's world.");
    }
}
