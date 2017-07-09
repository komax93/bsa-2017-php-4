<?php
/**
 * Created by PhpStorm.
 * User: maxym
 * Date: 09.07.17
 * Time: 22:44
 */

namespace BinaryStudioAcademy\Game\Commands;

use BinaryStudioAcademy\Game\Exceptions\WrongCommandException;

class Unknown extends AbstractCommand
{
    private $command;

    public function __construct($command)
    {
        $this->command = $command;
    }

    public function getMessage()
    {
        try {
            throw new WrongCommandException("Unknown command: '{$this->command}'.");
        } catch (WrongCommandException $e) {
            return $e->getMessage();
        }
    }
}