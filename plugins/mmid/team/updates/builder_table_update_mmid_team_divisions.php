<?php namespace Mmid\Team\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMmidTeamDivisions extends Migration
{
    public function up()
    {
        Schema::table('mmid_team_divisions', function($table)
        {
            $table->integer('order');
        });
    }
    
    public function down()
    {
        Schema::table('mmid_team_divisions', function($table)
        {
            $table->dropColumn('order');
        });
    }
}
