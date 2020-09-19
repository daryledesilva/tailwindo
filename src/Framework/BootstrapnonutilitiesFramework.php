<?php

namespace Awssat\Tailwindo\Framework;

class BootstrapnonutilitiesFramework extends BootstrapFramework
{
    public function __construct()
    {
        $this->components = array_diff_key($this->components, array_flip([
            'mediaObject',
            'alerts',
            'badges',
            'breadcrumb',
            'buttons',
            'cards',
            'dropdowns',
            'forms',
            'inputGroups',
            'listGroups',
            'modals',
            'navs',
            'pagination',
        ]));
    }
}
