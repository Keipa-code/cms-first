<?php namespace Keipa\PhoneDir\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKeipaPhonedirPrivate extends Migration
{
    public function up()
    {
        Schema::create('keipa_phonedir_private', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('firstname', 30);
            $table->string('surname', 30);
            $table->string('patronymic', 30);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('keipa_phonedir_private');
    }
}
