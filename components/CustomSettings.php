<?php namespace Lime\CustomSettings\Components;

use Cms\Classes\ComponentBase;
use Lime\CustomSettings\Models\Settings;

class CustomSettings extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'lime.customsettings::lang.component_name',
            'description' => 'lime.customsettings::lang.component_description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $settings = Settings::instance();
        foreach ($settings->value as $key => $value) {
            $this->page[$key] = $value;
        }
    }
}
