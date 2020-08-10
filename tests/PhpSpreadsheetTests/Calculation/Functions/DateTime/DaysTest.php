<?php

namespace PhpOffice\PhpSpreadsheetTests\Calculation\Functions\DateTime;

use PhpOffice\PhpSpreadsheet\Calculation\DateTime;
use PhpOffice\PhpSpreadsheet\Calculation\Functions;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PHPUnit\Framework\TestCase;

class DaysTest extends TestCase
{
    protected function setUp(): void
    {
        Functions::setCompatibilityMode(Functions::COMPATIBILITY_EXCEL);
        Functions::setReturnDateType(Functions::RETURNDATE_EXCEL);
        Date::setExcelCalendar(Date::CALENDAR_WINDOWS_1900);
    }

    /**
     * @dataProvider providerDAYS
     *
     * @param mixed $expectedResult
     * @param mixed $endDate
     * @param mixed $startDate
     */
    public function testDAYS($expectedResult, $endDate, $startDate): void
    {
        $result = DateTime::DAYS($endDate, $startDate);
        self::assertEqualsWithDelta($expectedResult, $result, 1E-8);
    }

    public function providerDAYS()
    {
        return require 'tests/data/Calculation/DateTime/DAYS.php';
    }
}
