<?php namespace Keipa\PhoneDir\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKeipaPhonedirPhonenumber3 extends Migration
{
    public function up()
    {
        Schema::table('keipa_phonedir_phonenumber', function($table)
        {
            $table->string('private_subscribers_id', 100)->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('keipa_phonedir_phonenumber', function($table)
        {
            $table->dropColumn('private_subscribers_id');
        });
    }
}
