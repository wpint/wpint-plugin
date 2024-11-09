<?php 
namespace WPINT\Inertia\Console;

use WPINT\Framework\Console\Command;
use WPINT\Framework\Console\CommandAttribute;
use WPINT\Framework\Console\SubCommandAttribute;

/**
 * All WP_CLI::add_command()'s third optional 
 * $args can be introduced to the command in CommnadAttribute arguments 
 */
#[CommandAttribute(['shortdesc' => 'WPINT: This is the example command'])]
class ExampleCommand extends Command
{

    /**
     * Commane name
     *
     * @var string
     */
    public string $command = 'example';

    /**
     * Example Command
     * Any method that has SubCommandAttribute will be registered as sub command
     *
     * @return void
     */
    #[SubCommandAttribute('example command\'s description')]
    protected function subcommand()
    {
        // Commands logic
    }

}       
