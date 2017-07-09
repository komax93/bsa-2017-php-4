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
            $this->run($reader, $writer);
        }
    }

    public function run(Reader $reader, Writer $writer)
    {
        $input = trim($reader->read());
        $this->app->command->setCommand($input);
        $writer->writeln($this->app->command->getMessage());
    }
}
