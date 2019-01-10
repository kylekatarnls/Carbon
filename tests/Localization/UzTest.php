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

class UzTest extends LocalizationTestCase
{
    const LOCALE = 'uz'; // Uzbek

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Эртага 00:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Шанба куни соат 00:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Якшанба куни соат 00:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Душанба куни соат 00:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Сешанба куни соат 00:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Чоршанба куни соат 00:00 да',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'Пайшанба куни соат 00:00 да',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'Жума куни соат 00:00 да',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Сешанба куни соат 00:00 да',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Чоршанба куни соат 00:00 да',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Пайшанба куни соат 00:00 да',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Жума куни соат 00:00 да',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Шанба куни соат 00:00 да',
        // Carbon::now()->subDays(2)->calendar()
        'Утган Якшанба куни соат 20:49 да',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Кеча соат 22:00 да',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'Бугун соат 10:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Бугун соат 02:00 да',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'Эртага 01:00 да',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Сешанба куни соат 00:00 да',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'Кеча соат 00:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Кеча соат 00:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Утган Сешанба куни соат 00:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Утган Душанба куни соат 00:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Утган Якшанба куни соат 00:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Утган Шанба куни соат 00:00 да',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'Утган Жума куни соат 00:00 да',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'Утган Пайшанба куни соат 00:00 да',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'Утган Чоршанба куни соат 00:00 да',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'Утган Жума куни соат 00:00 да',
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
        'Бир неча фурсат олдин',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'Бир неча 1 s олдин',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'Бир неча 2 фурсат олдин',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'Бир неча 2 s олдин',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'Бир неча бир дакика олдин',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'Бир неча 1 daq олдин',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'Бир неча 2 дакика олдин',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'Бир неча 2 daq олдин',
        // Carbon::now()->subHours(1)->diffForHumans()
        'Бир неча бир соат олдин',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'Бир неча 1 soat олдин',
        // Carbon::now()->subHours(2)->diffForHumans()
        'Бир неча 2 соат олдин',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'Бир неча 2 soat олдин',
        // Carbon::now()->subDays(1)->diffForHumans()
        'Бир неча бир кун олдин',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'Бир неча 1 kun олдин',
        // Carbon::now()->subDays(2)->diffForHumans()
        'Бир неча 2 кун олдин',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'Бир неча 2 kun олдин',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'Бир неча бир ҳафта олдин',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'Бир неча 1 ҳафта олдин',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'Бир неча 2 ҳафта олдин',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'Бир неча 2 ҳафта олдин',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'Бир неча бир ой олдин',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'Бир неча 1 oy олдин',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'Бир неча 2 ой олдин',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'Бир неча 2 oy олдин',
        // Carbon::now()->subYears(1)->diffForHumans()
        'Бир неча бир йил олдин',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'Бир неча 1 yil олдин',
        // Carbon::now()->subYears(2)->diffForHumans()
        'Бир неча 2 йил олдин',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'Бир неча 2 yil олдин',
        // Carbon::now()->addSecond()->diffForHumans()
        'Якин фурсат ичида',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'Якин 1 s ичида',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'фурсат keyin',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        '1 s keyin',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'фурсат oldin',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        '1 s oldin',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'фурсат',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        '1 s',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        '2 фурсат',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        '2 s',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'Якин 1 s ичида',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'бир дакика фурсат',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        '2 yil 3 oy 1 kun 1 s',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        'Якин 3 йил ичида',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        'Бир неча 5 oy олдин',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        'Бир неча 2 yil 3 oy 1 kun 1 s олдин',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'бир ҳафта 10 соат',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'бир ҳафта 6 кун',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'бир ҳафта 6 кун',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        '2 ҳафта бир соат',
        // CarbonInterval::days(2)->forHumans()
        '2 кун',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        '1 kun 3 soat',
    ];
}
