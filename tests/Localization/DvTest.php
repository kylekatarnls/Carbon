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

class DvTest extends LocalizationTestCase
{
    const LOCALE = 'dv'; // Divehi

    const CASES = [
        // Carbon::parse('2018-01-04 00:00:00')->addDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'މާދަމާ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ހޮނިހިރު 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'އާދިއްތަ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ހޯމަ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'އަންގާރަ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ބުދަ 00:00',
        // Carbon::parse('2018-01-05 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-05 00:00:00'))
        'ބުރާސްފަތި 00:00',
        // Carbon::parse('2018-01-06 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-06 00:00:00'))
        'ހުކުރު 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'އަންގާރަ 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(3)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ބުދަ 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(4)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ބުރާސްފަތި 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(5)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ހުކުރު 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(6)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ހޮނިހިރު 00:00',
        // Carbon::now()->subDays(2)->calendar()
        'ފާއިތުވި އާދިއްތަ 20:49',
        // Carbon::parse('2018-01-04 00:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'އިއްޔެ 22:00',
        // Carbon::parse('2018-01-04 12:00:00')->subHours(2)->calendar(Carbon::parse('2018-01-04 12:00:00'))
        'މިއަދު 10:00',
        // Carbon::parse('2018-01-04 00:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'މިއަދު 02:00',
        // Carbon::parse('2018-01-04 23:00:00')->addHours(2)->calendar(Carbon::parse('2018-01-04 23:00:00'))
        'މާދަމާ 01:00',
        // Carbon::parse('2018-01-07 00:00:00')->addDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'އަންގާރަ 00:00',
        // Carbon::parse('2018-01-08 00:00:00')->subDay()->calendar(Carbon::parse('2018-01-08 00:00:00'))
        'އިއްޔެ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(1)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'އިއްޔެ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ފާއިތުވި އަންގާރަ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(3)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ފާއިތުވި ހޯމަ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(4)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ފާއިތުވި އާދިއްތަ 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(5)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ފާއިތުވި ހޮނިހިރު 00:00',
        // Carbon::parse('2018-01-04 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-04 00:00:00'))
        'ފާއިތުވި ހުކުރު 00:00',
        // Carbon::parse('2018-01-03 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-03 00:00:00'))
        'ފާއިތުވި ބުރާސްފަތި 00:00',
        // Carbon::parse('2018-01-02 00:00:00')->subDays(6)->calendar(Carbon::parse('2018-01-02 00:00:00'))
        'ފާއިތުވި ބުދަ 00:00',
        // Carbon::parse('2018-01-07 00:00:00')->subDays(2)->calendar(Carbon::parse('2018-01-07 00:00:00'))
        'ފާއިތުވި ހުކުރު 00:00',
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
        '7 2',
        // Carbon::parse('2018-01-11 00:00:00')->isoFormat('Do wo')
        '11 2',
        // Carbon::parse('2018-02-09 00:00:00')->isoFormat('DDDo')
        '40',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('DDDo')
        '41',
        // Carbon::parse('2018-04-10 00:00:00')->isoFormat('DDDo')
        '100',
        // Carbon::parse('2018-02-10 00:00:00', 'Europe/Paris')->isoFormat('h:mm a z')
        '12:00 މކ cet',
        // Carbon::parse('2018-02-10 00:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 މކ, 12:00 މކ',
        // Carbon::parse('2018-02-10 01:30:00')->isoFormat('h:mm A, h:mm a')
        '1:30 މކ, 1:30 މކ',
        // Carbon::parse('2018-02-10 02:00:00')->isoFormat('h:mm A, h:mm a')
        '2:00 މކ, 2:00 މކ',
        // Carbon::parse('2018-02-10 06:00:00')->isoFormat('h:mm A, h:mm a')
        '6:00 މކ, 6:00 މކ',
        // Carbon::parse('2018-02-10 10:00:00')->isoFormat('h:mm A, h:mm a')
        '10:00 މކ, 10:00 މކ',
        // Carbon::parse('2018-02-10 12:00:00')->isoFormat('h:mm A, h:mm a')
        '12:00 މފ, 12:00 މފ',
        // Carbon::parse('2018-02-10 17:00:00')->isoFormat('h:mm A, h:mm a')
        '5:00 މފ, 5:00 މފ',
        // Carbon::parse('2018-02-10 21:30:00')->isoFormat('h:mm A, h:mm a')
        '9:30 މފ, 9:30 މފ',
        // Carbon::parse('2018-02-10 23:00:00')->isoFormat('h:mm A, h:mm a')
        '11:00 މފ, 11:00 މފ',
        // Carbon::parse('2018-01-01 00:00:00')->ordinal('hour')
        '0',
        // Carbon::now()->subSeconds(1)->diffForHumans()
        'ކުރިން ސިކުންތުކޮޅެއް',
        // Carbon::now()->subSeconds(1)->diffForHumans(null, false, true)
        'ކުރިން ސިކުންތުކޮޅެއް',
        // Carbon::now()->subSeconds(2)->diffForHumans()
        'ކުރިން d% ސިކުންތު',
        // Carbon::now()->subSeconds(2)->diffForHumans(null, false, true)
        'ކުރިން d% ސިކުންތު',
        // Carbon::now()->subMinutes(1)->diffForHumans()
        'ކުރިން މިނިޓެއް',
        // Carbon::now()->subMinutes(1)->diffForHumans(null, false, true)
        'ކުރިން މިނިޓެއް',
        // Carbon::now()->subMinutes(2)->diffForHumans()
        'ކުރިން މިނިޓު 2',
        // Carbon::now()->subMinutes(2)->diffForHumans(null, false, true)
        'ކުރިން މިނިޓު 2',
        // Carbon::now()->subHours(1)->diffForHumans()
        'ކުރިން ގަޑިއިރެއް',
        // Carbon::now()->subHours(1)->diffForHumans(null, false, true)
        'ކުރިން ގަޑިއިރެއް',
        // Carbon::now()->subHours(2)->diffForHumans()
        'ކުރިން ގަޑިއިރު 2',
        // Carbon::now()->subHours(2)->diffForHumans(null, false, true)
        'ކުރިން ގަޑިއިރު 2',
        // Carbon::now()->subDays(1)->diffForHumans()
        'ކުރިން ދުވަހެއް',
        // Carbon::now()->subDays(1)->diffForHumans(null, false, true)
        'ކުރިން ދުވަހެއް',
        // Carbon::now()->subDays(2)->diffForHumans()
        'ކުރިން ދުވަސް 2',
        // Carbon::now()->subDays(2)->diffForHumans(null, false, true)
        'ކުރިން ދުވަސް 2',
        // Carbon::now()->subWeeks(1)->diffForHumans()
        'ކުރިން ހަފްތާ 1',
        // Carbon::now()->subWeeks(1)->diffForHumans(null, false, true)
        'ކުރިން ހަފްތާ 1',
        // Carbon::now()->subWeeks(2)->diffForHumans()
        'ކުރިން ހަފްތާ 2',
        // Carbon::now()->subWeeks(2)->diffForHumans(null, false, true)
        'ކުރިން ހަފްތާ 2',
        // Carbon::now()->subMonths(1)->diffForHumans()
        'ކުރިން މަހެއް',
        // Carbon::now()->subMonths(1)->diffForHumans(null, false, true)
        'ކުރިން މަހެއް',
        // Carbon::now()->subMonths(2)->diffForHumans()
        'ކުރިން މަސް 2',
        // Carbon::now()->subMonths(2)->diffForHumans(null, false, true)
        'ކުރިން މަސް 2',
        // Carbon::now()->subYears(1)->diffForHumans()
        'ކުރިން އަހަރެއް',
        // Carbon::now()->subYears(1)->diffForHumans(null, false, true)
        'ކުރިން އަހަރެއް',
        // Carbon::now()->subYears(2)->diffForHumans()
        'ކުރިން އަހަރު 2',
        // Carbon::now()->subYears(2)->diffForHumans(null, false, true)
        'ކުރިން އަހަރު 2',
        // Carbon::now()->addSecond()->diffForHumans()
        'ތެރޭގައި ސިކުންތުކޮޅެއް',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true)
        'ތެރޭގައި ސިކުންތުކޮޅެއް',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now())
        'ސިކުންތުކޮޅެއް ފަހުން',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), false, true)
        'ސިކުންތުކޮޅެއް ފަހުން',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond())
        'ސިކުންތުކޮޅެއް ކުރި',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond(), false, true)
        'ސިކުންތުކޮޅެއް ކުރި',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true)
        'ސިކުންތުކޮޅެއް',
        // Carbon::now()->addSecond()->diffForHumans(Carbon::now(), true, true)
        'ސިކުންތުކޮޅެއް',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true)
        'd% ސިކުންތު',
        // Carbon::now()->diffForHumans(Carbon::now()->addSecond()->addSecond(), true, true)
        'd% ސިކުންތު',
        // Carbon::now()->addSecond()->diffForHumans(null, false, true, 1)
        'ތެރޭގައި ސިކުންތުކޮޅެއް',
        // Carbon::now()->addMinute()->addSecond()->diffForHumans(null, true, false, 2)
        'މިނިޓެއް ސިކުންތުކޮޅެއް',
        // Carbon::now()->addYears(2)->addMonths(3)->addDay()->addSecond()->diffForHumans(null, true, true, 4)
        'އަހަރު 2 މަސް 3 ދުވަހެއް ސިކުންތުކޮޅެއް',
        // Carbon::now()->addYears(3)->diffForHumans(null, null, false, 4)
        'ތެރޭގައި އަހަރު 3',
        // Carbon::now()->subMonths(5)->diffForHumans(null, null, true, 4)
        'ކުރިން މަސް 5',
        // Carbon::now()->subYears(2)->subMonths(3)->subDay()->subSecond()->diffForHumans(null, null, true, 4)
        'ކުރިން އަހަރު 2 މަސް 3 ދުވަހެއް ސިކުންތުކޮޅެއް',
        // Carbon::now()->addWeek()->addHours(10)->diffForHumans(null, true, false, 2)
        'ހަފްތާ 1 ގަޑިއިރު 10',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'ހަފްތާ 1 ދުވަސް 6',
        // Carbon::now()->addWeek()->addDays(6)->diffForHumans(null, true, false, 2)
        'ހަފްތާ 1 ދުވަސް 6',
        // Carbon::now()->addWeeks(2)->addHour()->diffForHumans(null, true, false, 2)
        'ހަފްތާ 2 ގަޑިއިރެއް',
        // CarbonInterval::days(2)->forHumans()
        'ދުވަސް 2',
        // CarbonInterval::create('P1DT3H')->forHumans(true)
        'ދުވަހެއް ގަޑިއިރު 3',
    ];
}
