<?php

namespace jpmorby;

/**
 * Summary of TimeGreetingHelper
 * @author Jon Morby
 * @copyright (c) 2025
 */
class TimeGreetingHelper
{
    public static function getGreeting()
    {
        $hour = date('H');

        if ($hour < 12) {
            return 'Good morning';
        } elseif ($hour < 18) {
            return 'Good afternoon';
        } else {
            return 'Good evening';
        }
    }
}