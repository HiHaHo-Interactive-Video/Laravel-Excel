<?php

use Orchestra\Testbench\TestCase as TestBenchTestCase;

class TestCase extends TestBenchTestCase
{

    public function setUp()
    {
        if (! $this->app) {
            $this->refreshApplication();
        }
    }

    public function testExcelClass()
    {
        $excel = $this->app->make('Maatwebsite\Excel\Excel');
        $this->assertInstanceOf('Maatwebsite\Excel\Excel', $excel);
    }


    protected function getPackageProviders($app)
    {
        return array('Maatwebsite\Excel\ExcelServiceProvider');
    }


    protected function getPackagePath()
    {
        return realpath(implode(DIRECTORY_SEPARATOR, [
            __DIR__,
            '..',
            'src',
            'Maatwebsite',
            'Excel'
        ]));
    }
}
