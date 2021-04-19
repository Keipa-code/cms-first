<?php namespace Keipa\PhoneDir\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKeipaPhonedirJuridical extends Migration
{
    public function up()
    {
        Schema::table('keipa_phonedir_juridical', function($table)
        {
            $table->dropColumn('phonenumbers');
        });
    }
    
    public function down()
    {
        Schema::table('keipa_phonedir_juridical', function($table)
        {
            $table->string('phonenumbers', 191);
        });
    }
}
