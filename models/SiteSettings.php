<?php namespace Chanansys\sitesettings\models;

use Model;

class SiteSettings extends Model{
    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'chanansys_site_settings';
    public $settingsFields = 'fields.yaml';
}
