<?php namespace Chanansys\sitesettings\components;

use Cms\Classes\ComponentBase;
use chanansys\sitesettings\models\SiteSettings;

class PhoneNumbers extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Phone Number',
            'description' => 'Insert your phone number here.'
        ];
    }
    public function defineProperties()
    {
        return [
            'phone' => [
                'title'             => 'Phone Number',
                'description'       => 'Your Organizational Phone Number',
                'default'           => '',
                'type'              => 'string',
                'validationPattern' => '/^\+?([0-9]{3})\)?[-]?([0-9]{3})[-]?([0-9]{3})[-]?([0-9]{3})$/',
                'validationMessage' => 'Not a valid phone number',
                'placeholder'       => '+254-xxx-xxx-xxx'
            ]
        ];
    }
    public function onRender()
    {
        // Using properties
        //$this->page['phone'] = $this->property('phone');
        // Using settings
        $settings = SiteSettings::instance();
        $this->page['phone'] = $settings->phone;
    }
}
