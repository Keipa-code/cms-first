<?php namespace Keipa\PhoneDir\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKeipaPhonedirPhonenumber2 extends Migration
{
    public function up()
    {
        Schema::table('keipa_phonedir_phonenumber', function($table)
        {
            $table->string('phonenumber', 15)->change();
            $table->string('juridical_subscribers_id', 100)->default('null')->change();
        });
    }
    
    public function down()
    {
        Schema::table('keipa_phonedir_phonenumber', function($table)
        {
            $table->string('phonenumber', 191)->change();
            $table->string('juridical_subscribers_id', 191)->default('\'null\'')->change();
        });
    }
}
