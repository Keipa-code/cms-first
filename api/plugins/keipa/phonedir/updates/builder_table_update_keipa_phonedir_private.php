<?php namespace Keipa\PhoneDir\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKeipaPhonedirPrivate extends Migration
{
    public function up()
    {
        Schema::table('keipa_phonedir_private', function($table)
        {
            $table->renameColumn('date', 'created');
        });
    }
    
    public function down()
    {
        Schema::table('keipa_phonedir_private', function($table)
        {
            $table->renameColumn('created', 'date');
        });
    }
}
