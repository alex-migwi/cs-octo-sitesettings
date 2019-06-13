<?php namespace Chanansys\sitesettings\components;

use Cms\Classes\ComponentBase;
use chanansys\sitesettings\models\SiteSettings;

class OrgName extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Organization Name',
            'description' => 'Insert Organisation Name Here.'
        ];
    }
    public function defineProperties()
    {
        return [
            'orgname' => [
                'title'             => 'Organisation Name Here',
                'description'       => 'Your Organizational Name Here',
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
        $this->page['orgname'] = $settings->orgname;
    }
}