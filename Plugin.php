<?php namespace Lime\SiteConfig;

use Backend;
use System\Classes\PluginBase;

/**
 * siteConfig Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name' => 'lime.siteconfig::lang.plugin_name',
            'description' => 'lime.siteconfig::lang.plugin_description',
            'author' => 'lime',
            'icon' => 'icon-cog'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Lime\SiteConfig\Components\SiteConfig' => 'SiteConfig',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'lime.siteconfig.some_permission' => [
                'tab' => 'siteConfig',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [];
    }

    public function registerSettings()
    {
        return [
            'settings' => [
                'label' => 'lime.siteconfig::lang.plugin_name',
                'description' => 'lime.siteconfig::lang.plugin_description',
                'icon' => 'icon-cog',
                'class' => 'Lime\SiteConfig\Models\Settings',
                'order' => 1
            ]
        ];
    }

}
