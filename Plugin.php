<?php namespace ChananSys\SiteSettings;

use System\Classes\PluginBase;

/**
 * Site Wide Settings Plugin Information File
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
            'name'        => 'General Website Information',
            'description' => 'Add information like email,phone numbers, address...',
            'author'      => 'Chanan Systems',
            'icon'        => 'icon-wrench'
        ];
    }
    public function registerComponents()
    {
        return [
		'ChananSys\SiteSettings\Components\ShortBio' => 'shortbio',
  		'ChananSys\SiteSettings\Components\Email' => 'email',
        'ChananSys\SiteSettings\Components\Facebook' => 'facebook',
        'ChananSys\SiteSettings\Components\OrgName' => 'orgname',
        'ChananSys\SiteSettings\Components\Location' => 'location',
        'ChananSys\SiteSettings\Components\PhoneNumbers' => 'phone',
        'ChananSys\SiteSettings\Components\Twitter' => 'twitter'
        ];
    }
    public function registerSettings()
    {
        return [
            'settings' => [
                'label'       => 'General Website Information',
                'description' => 'Organizational Information like Location, Phone Number, Email, Facebook, Twitter e.t.c. to be used within the theme',
                'icon'        => 'icon-wrench',
                'class'       => 'ChananSys\SiteSettings\Models\SiteSettings',
                'order'       => 1
            ]
        ];
    }
}