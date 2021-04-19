<?php namespace Keipa\PhoneDir\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKeipaPhonedirPrivate5 extends Migration
{
    public function up()
    {
        Schema::table('keipa_phonedir_private', function($table)
        {
            $table->dropColumn('phonenumber');
        });
    }
    
    public function down()
    {
        Schema::table('keipa_phonedir_private', function($table)
        {
            $table->string('phonenumber', 15);
        });
    }
}
