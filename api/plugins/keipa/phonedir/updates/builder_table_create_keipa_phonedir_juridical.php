<?php namespace Keipa\PhoneDir\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKeipaPhonedirJuridical extends Migration
{
    public function up()
    {
        Schema::create('keipa_phonedir_juridical', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('org_name', 50);
            $table->string('department_name', 50);
            $table->string('country', 80);
            $table->string('city', 50);
            $table->string('street', 50);
            $table->string('house', 10);
            $table->string('float', 10)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('keipa_phonedir_juridical');
    }
}
