<?php

namespace Anomaly\FlowTheme;

use Anomaly\Streams\Platform\Addon\AddonCollection;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * FlowThemeServiceProvider class
 *
 * @link   http://pyrocms.com/
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class FlowThemeServiceProvider extends AddonServiceProvider
{
    public function register()
    {
        parent::register();

        $this->app->booting(function(){
            resolve(AddonCollection::class)->put('anomaly.theme.flow', json_decode(file_get_contents(__DIR__.'/../composer.json'),true));
        });
    }

    public function boot()
    {
        parent::boot();
    }

}
