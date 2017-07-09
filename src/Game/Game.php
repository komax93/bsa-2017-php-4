<?php

namespace BinaryStudioAcademy\Game;

use BinaryStudioAcademy\Game\Contracts\Io\Reader;
use BinaryStudioAcademy\Game\Contracts\Io\Writer;

class Game
{
    const COINS_TO_WIN = 5;

    private $app;

    /**
     * Game constructor.
     */
    public function __construct()
    {
        $this->app = new GameServiceProvider(new Castle(), new User(0, self::COINS_TO_WIN));
    }

    /**
     * @param Reader $reader
     * @param Writer $writer
     */
    public function start(Reader $reader, Writer $writer): void
    {
        $writer->writeln("Welcome to the game. Enter your command!");

        while(true) {
            $writer->write("Command: ");
            $this->run($reader, $writer);
        }
    }

    /**
     * @param Reader $reader
     * @param Writer $writer
     */
    public function run(Reader $reader, Writer $writer)
    {
        $input = trim($reader->read());
        $this->app->executeCommand($input);
        $writer->writeln($this->app->getCommandMessage());
    }
}