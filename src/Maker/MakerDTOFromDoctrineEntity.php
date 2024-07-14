<?php

namespace App\Maker;

use Symfony\Bundle\MakerBundle\ConsoleStyle;
use Symfony\Bundle\MakerBundle\DependencyBuilder;
use Symfony\Bundle\MakerBundle\Generator;
use Symfony\Bundle\MakerBundle\InputConfiguration;
use Symfony\Bundle\MakerBundle\MakerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;

/**
 * @method string getCommandDescription()
 */
class MakerDTOFromDoctrineEntity implements MakerInterface
{

    public static function getCommandName(): string
    {
        return 'make:dto-from-doctrine-entity';
    }

    public function configureCommand(Command $command, InputConfiguration $inputConfig)
    {
        // TODO: Implement configureCommand() method.
    }

    public function configureDependencies(DependencyBuilder $dependencies)
    {
        // TODO: Implement configureDependencies() method.
    }

    public function interact(InputInterface $input, ConsoleStyle $io, Command $command)
    {
        // TODO: Implement interact() method.
    }

    public function generate(InputInterface $input, ConsoleStyle $io, Generator $generator)
    {
        // TODO: Implement generate() method.
    }

    public function __call(string $name, array $arguments)
    {
        // TODO: Implement @method string getCommandDescription()
    }
}