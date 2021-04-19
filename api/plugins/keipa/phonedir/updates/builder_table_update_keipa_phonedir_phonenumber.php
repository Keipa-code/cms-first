<?php namespace Keipa\PhoneDir\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateKeipaPhonedirPhonenumber extends Migration
{
    public function up()
    {
        Schema::table('keipa_phonedir_phonenumber', function($table)
        {
            $table->string('juridical_subscribers_id', 191)->nullable()->default('null');
            $table->dropColumn('juridical_subscriber_id');
        });
    }
    
    public function down()
    {
        Schema::table('keipa_phonedir_phonenumber', function($table)
        {
            $table->dropColumn('juridical_subscribers_id');
            $table->string('juridical_subscriber_id', 191)->nullable()->default('NULL');
        });
    }
}
