<?php namespace Marek\Filmy;

use Backend;
use System\Classes\PluginBase;

/**
 * Filmy Plugin Information File
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
            'name'        => 'Filmy',
            'description' => 'No description provided yet...',
            'author'      => 'Marek',
            'icon'        => 'icon-leaf'
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
        return []; // Remove this line to activate

        return [
            'Marek\Filmy\Components\MyComponent' => 'myComponent',
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
            'marek.filmy.some_permission' => [
                'tab' => 'Filmy',
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
    //    return []; // Remove this line to activate

        return [
            'filmy' => [
                'label'       => 'Filmy',
                'url'         => Backend::url('marek/filmy/films'),
                'icon'        => 'icon-leaf',
                'permissions' => ['marek.filmy.*'],
                'order'       => 500,
            ],

            'directors' => [
                'label'       => 'Directors',
                'url'         => Backend::url('marek/filmy/directors'),
                'icon'        => 'icon-leaf',
                'permissions' => ['marek.filmy.*'],
                'order'       => 500,
            ],

            'genres' => [
                'label'       => 'Genres',
                'url'         => Backend::url('marek/filmy/genres'),
                'icon'        => 'icon-leaf',
                'permissions' => ['marek.filmy.*'],
                'order'       => 500,
            ],

            'ratings' => [
                'label'       => 'Ratings',
                'url'         => Backend::url('marek/filmy/ratings'),
                'icon'        => 'icon-leaf',
                'permissions' => ['marek.filmy.*'],
                'order'       => 500,
            ],

            'releases' => [
                'label'       => 'Releases',
                'url'         => Backend::url('marek/filmy/releases'),
                'icon'        => 'icon-leaf',
                'permissions' => ['marek.filmy.*'],
                'order'       => 500,
            ],
        ];
    }
}
