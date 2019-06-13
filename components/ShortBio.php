<?php namespace Chanansys\sitesettings\components;

use Cms\Classes\ComponentBase;
use chanansys\sitesettings\models\SiteSettings;

class ShortBio extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Short Bio',
            'description' => 'Insert About us excerpt here.'
        ];
    }
    public function defineProperties()
    {
        return [
            'shortbio' => [
                'title'             => 'Short Bio',
                'description'       => 'Your Organizational Short Bio Excerpt',
                'default'           => '',
                'type'              => 'string'
            ]
        ];
    }
    public function onRender()
    {
        // Using properties
        //$this->page['shortbio'] = $this->property('shortbio');
        // Using settings
        $settings = SiteSettings::instance();
        $this->page['shortbio'] = $settings->shortbio;
    }
}