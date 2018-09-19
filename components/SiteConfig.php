<?php namespace Lime\SiteConfig\Components;

use Cms\Classes\ComponentBase;
use Lime\Siteconfig\Models\Settings;

class SiteConfig extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'lime.siteconfig::lang.component_name',
            'description' => 'lime.siteconfig::lang.component_description'
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
