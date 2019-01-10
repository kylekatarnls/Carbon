<?php

/**
 * This file is part of the Carbon package.
 *
 * (c) Brian Nesbitt <brian@nesbot.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Tests\Localization;

class SkTest extends LocalizationTestCase
{
    const LOCALE = 'sk'; // Slovak

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tomorrow at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Saturday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Sunday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Monday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Tuesday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Wednesday at 12:00 AM',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'Thursday at 12:00 AM',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'Friday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Tuesday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Wednesday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Thursday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Friday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Saturday at 12:00 AM',
        // Carbon::now()->subDays(2)->calendar()
        'Last Sunday at 8:49 PM',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Yesterday at 10:00 PM',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Today at 10:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Today at 2:00 AM',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Tomorrow at 1:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Tuesday at 12:00 AM',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'Yesterday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Yesterday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Tuesday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Monday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Sunday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Saturday at 12:00 AM',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Last Friday at 12:00 AM',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'Last Thursday at 12:00 AM',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'Last Wednesday at 12:00 AM',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Last Friday at 12:00 AM',
        // Carbon::parse('2018-01-01 00:00:00')->isoFormat('Qo Mo Do Wo wo')
        '1 1 1 1 1',
        // Carbon::parse('2018-01-02 00:00:00')->isoFormat('Do wo')
        '2 1',
        // Carbon::parse('2018-01-03 00:00:00')->isoFormat('Do wo')
        '3 1',
        // Carbon::parse('2018-01-04 00:00:00')->isoFormat('Do wo')
        '4 1',
        // Carbon::parse('2018-01-05 00:00:00')->isoFormat('Do wo')
        '5 1',
        // Carbon::parse('2018-01-06 00:00:00')->isoFormat('Do wo')
        '6 1',
        // Carbon::parse('2018-01-07 00:00:00')->isoFormat('Do wo')
        '7 1',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11 2',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100',
        // Carbon::parse('2018-02-10 00:00:00', 'Europe/Paris')->isoFormat('h:mm a z')
        '12:00 am cet',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 AM, 12:00 am',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 AM, 1:30 am',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 AM, 2:00 am',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 AM, 6:00 am',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 AM, 10:00 am',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 PM, 12:00 pm',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 PM, 5:00 pm',
        // Carbon::parse('2018-02-10 21:30:00')->isoFormat('h:mm A, h:mm a')
        '9:30 PM, 9:30 pm',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 PM, 11:00 pm',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'pred sekundou',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'pred sekundu',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'pred 2 sekundami',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'pred 2 sekundy',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'pred minútou',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'pred minútu',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'pred 2 minútami',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'pred 2 minúty',
        // Carbon::now()->subHours(1)->diffForHumans()
        'pred hodinou',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'pred hodinu',
        // Carbon::now()->subHours(2)->diffForHumans()
        'pred 2 hodinami',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'pred 2 hodiny',
        // Carbon::now()->subDays(1)->diffForHumans()
        'pred dňom',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'pred deň',
        // Carbon::now()->subDays(2)->diffForHumans()
        'pred 2 dňami',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'pred 2 dni',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'pred týždňom',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'pred týždeň',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'pred 2 týždňami',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'pred 2 týždne',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'pred mesiacom',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'pred mesiac',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'pred 2 mesiacmi',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'pred 2 mesiace',
        // Carbon::now()->subYears(1)->diffForHumans()
        'pred rokom',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'pred rok',
        // Carbon::now()->subYears(2)->diffForHumans()
        'pred 2 rokmi',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'pred 2 roky',
        // Carbon::now()->addSecond()->diffForHumans()
        'za sekundu',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'za sekundu',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'o sekundu neskôr',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'o sekundu neskôr',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'sekundu predtým',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'sekundu predtým',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'sekundu',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        'sekundu',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 sekundy',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 sekundy',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'za sekundu',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'minútu sekundu',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 roky 3 mesiace deň sekundu',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        'za 3 roky',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        'pred 5 mesiacov',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        'pred 2 roky 3 mesiace deň sekundu',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'týždeň 10 hodín',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'týždeň 6 dní',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'týždeň 6 dní',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 týždne hodinu',
        // CarbonInterval::days(2)->forHumans()
        '2 dni',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        'deň 3 hodiny',
    ];
}
