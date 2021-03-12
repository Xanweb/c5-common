<?php

namespace Xanweb\Common\Traits;

trait SingletonTrait
{
    private static $instance;

    /**
     * Gets a singleton instance of this class.
     *
     * @return static
     */
    public static function get(): self
    {
        return self::$instance ?? self::$instance = new static();
    }
}