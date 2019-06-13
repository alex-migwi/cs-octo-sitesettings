<?php namespace Chanansys\sitesettings\components;

use Cms\Classes\ComponentBase;
use chanansys\sitesettings\models\SiteSettings;

class Email extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Email',
            'description' => 'Insert your main email here.'
        ];
    }
    public function defineProperties()
    {
        return [
            'email' => [
                'title'             => 'Email',
                'description'       => 'Your Organizational Email',
                'default'           => '',
                'type'              => 'string',
                'validationPattern' => '/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/',
                'validationMessage' => 'Not a valid email',
                'placeholder'       => 'email@domain.ext'
            ]
        ];
    }
    public function onRender()
    {
        // Using properties
        //$this->page['email'] = $this->property('email');
        // Using settings
        $settings = SiteSettings::instance();
        $this->page['email'] = $settings->email;
    }
}