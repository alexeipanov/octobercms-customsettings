<?php namespace Lime\CustomSettings\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];
    public $settingsCode = 'custom_settings';
    public $settingsFields = 'fields.yaml';
}
