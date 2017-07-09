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

    /**
     * Unknown constructor.
     * Special constructor for unknown command.
     *
     * @param \BinaryStudioAcademy\Game\Contracts\Building $command
     */
    public function __construct($command)
    {
        $this->command = $command;
    }

    /**
     * Get message after command execution
     *
     * @return string
     */
    public function getMessage()
    {
        try {
            throw new WrongCommandException("Unknown command: '{$this->command}'.");
        } catch (WrongCommandException $e) {
            return $e->getMessage();
        }
    }
}