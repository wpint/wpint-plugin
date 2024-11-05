<?php 
namespace Database\Migrations;

use Illuminate\Database\Schema\Blueprint;
use Wpint\Contracts\Migration\MigrationContract;
use Illuminate\Support\Facades\Schema;

class ExampleTable implements MigrationContract
{

    /**
     * up should construct your database
     *
     * @return void
     */
    public static function up()
    {
        if(! Schema::hasTable('example'))
        {
            Schema::create('example', function (Blueprint $table) {

                $table->increments('id');
                $table->string('email')->unique();
                $table->timestamps();
                
            });
        }
    }

    /**
     * down should deconstruct your database
     *
     * @return void
     */
    public static function down()
    {
        Schema::dropIfExists('example');
    }

}