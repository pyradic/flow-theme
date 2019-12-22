<?php

namespace Anomaly\FlowTheme;

use Anomaly\Streams\Platform\Addon\AddonCollection;
use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Anomaly\Streams\Platform\Application\Event\ApplicationHasLoaded;
use Anomaly\Streams\Webpack\Webpack;

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
        $this->app->events->listen(ApplicationHasLoaded::class, function(){
            /** @var Webpack $webpack */
            $webpack = resolve(Webpack::class);
            $webpack->enableEntry('@anomaly/flow-theme');
        });
    }

}
