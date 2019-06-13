<?php namespace Chanansys\sitesettings\components;

use Cms\Classes\ComponentBase;
use chanansys\sitesettings\models\SiteSettings;

class Twitter extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Twitter Account',
            'description' => 'Insert your Twitter account name.'
        ];
    }
    public function defineProperties()
    {
        return [
            'twitter' => [
                'title'             => 'Twitter Account',
                'description'       => 'Your Organizational Twitter Account',
                'default'           => '',
                'type'              => 'string',
                'placeholder'       => '@twittername'
            ]
        ];
    }
    public function onRender()
    {
        // Using properties
        //$this->page['phone'] = $this->property('phone');
        // Using settings
        $settings = SiteSettings::instance();
        $this->page['twitter'] = $settings->twitter;
    }
}