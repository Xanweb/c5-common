<?php

namespace Xanweb\Common\Traits;

use Concrete\Core\Support\Facade\Application;

trait StaticApplicationTrait
{
    /**
     * @param string $make [optional]
     *
     * @return \Concrete\Core\Application\Application|mixed
     */
    protected static function app($make = null)
    {
        $app = Application::getFacadeApplication();

        if ($make !== null) {
            return $app->make($make);
        }

        return $app;
    }
}