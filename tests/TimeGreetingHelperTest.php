<?php

use jpmorby\TimeGreetingHelper;

it('replies with a greeting', function () {
    $greeting = TimeGreetingHelper::getGreeting();
    expect($greeting)->toBeIn(['Good morning', 'Good afternoon', 'Good evening']);
});