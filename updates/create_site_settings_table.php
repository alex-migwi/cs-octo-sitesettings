<?php namespace Chanansys\sitesettings\updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateSiteSettingsTable extends Migration
{
    public function up()
    {
        Schema::create('chanansys_sitesettings_site_settings', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('chanansys_sitesettings_site_settings');
    }
}
