<?php namespace Keipa\PhoneDir\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateKeipaPhonedirPhonenumber extends Migration
{
    public function up()
    {
        Schema::create('keipa_phonedir_phonenumber', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('phonenumber');
            $table->string('juridical_subscriber_id')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('keipa_phonedir_phonenumber');
    }
}
