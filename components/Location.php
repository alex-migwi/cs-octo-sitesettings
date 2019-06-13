<?php namespace Chanansys\sitesettings\components;

use Cms\Classes\ComponentBase;
use chanansys\sitesettings\models\SiteSettings;

class Location extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Location',
            'description' => 'Inserts your physical location no need to set it if you have entered it in the Website Settings.'
        ];
    }
    public function defineProperties()
    {
        return [
            'location' => [
                'title'             => 'Physical Location',
                'description'       => 'Your Physical Office Location',
                'default'           => '',
                'type'              => 'string',
                'placeholder'       => 'Enter office location'
            ]
        ];
    }
    public function onRender()
    {
        // Using properties
        //$this->page['location'] = $this->property('location');
        // Using settings
        $settings = SiteSettings::instance();
        $this->page['location'] = $settings->location;
    }
}
