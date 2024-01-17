<?php 
namespace App\Consoles;

use Wpint\Contracts\Console\ConsoleContract;
use WPINT\Framework\Console\Command;
use Wpint\Support\Facades\CLI;

class ExampleCommand extends Command implements ConsoleContract
{

    public string $command = 'examplecommand';

    /**
     * command logic
     *
     * @param [type] $args
     * @param [type] $assoc_args
     * @return void
     */
    public function handle($args, $assoc_args)
    {        
        CLI::success( "I'll Show you" );
    }

    /**
     * runs before the command execution
     *
     * @return void
     */
    public function hook_before_invoke()
    {
        CLI::warning('before invoke.');
    }
    
    /**
     * runs after command execution
     *
     * @return void
     */
    public function hook_after_invoke()
    {
        CLI::warning('after invoke.');
    }


}       
