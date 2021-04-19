<?php namespace Keipa\PhoneDir\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKeipaPhonedirPrivate2 extends Migration
{
    public function up()
    {
        Schema::table('keipa_phonedir_private', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->dropColumn('created');
        });
    }
    
    public function down()
    {
        Schema::table('keipa_phonedir_private', function($table)
        {
            $table->dropColumn('created_at');
            $table->dateTime('created');
        });
    }
}
