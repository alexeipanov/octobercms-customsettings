<?php namespace Lime\Siteconfig\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'site_settings';
    public $settingsFields = 'fields.yaml';
}
