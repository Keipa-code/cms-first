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
            $table->string('phonenumber', 15);
            $table->string('juridical_subscribers_id', 100)->nullable();
            $table->string('private_subscriber_id', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('keipa_phonedir_phonenumber');
    }
}
