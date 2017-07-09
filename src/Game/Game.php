<?php

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Io\Reader;
use BinaryStudioAcademy\Game\Contracts\Io\Writer;

class Game
{
    const COINS_TO_WIN = 5;

    private $world;

    public function __construct()
    {
        $this->world = new World(new Castle(), new User(0, self::COINS_TO_WIN));
    }

    public function start(Reader $reader, Writer $writer): void
    {
        $writer->writeln("Welcome to the game. Enter your command!");

        while(true) {
            $writer->write("Command: ");
            $this->run($reader, $writer);
        }
    }

    public function run(Reader $reader, Writer $writer)
    {
        $input = trim($reader->read());
        $this->world->command->setCommand($input);
        $writer->writeln($this->world->command->getMessage());
    }
}
