<?php namespace Chanansys\sitesettings\components;

use Cms\Classes\ComponentBase;
use chanansys\sitesettings\models\SiteSettings;

class Facebook extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Facebook',
            'description' => 'Insert your facebook page name.'
        ];
    }
    public function defineProperties()
    {
        return [
            'facebook' => [
                'title'             => 'Facebook Username / Pagename',
                'description'       => 'Your Official Facebook Page ',
                'default'           => '',
                'type'              => 'string',
                'placeholder'       => 'Enter facebook page name'
            ]
        ];
    }
    public function onRender()
    {
        // Using properties
        //$this->page['facebook'] = $this->property('facebook');
        // Using settings
        $settings = SiteSettings::instance();
        $this->page['facebook'] = $settings->facebook;
    }
}