<?php

namespace GoogleApi\Tests;

use Illuminate\Support\Facades\Cache;
use GoogleApi\Services\PlaceApi\PlaceApi;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class PlaceApiServiceTest extends OrchestraTestCase
{
    public static $defaultConfig;

    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();
        self::$defaultConfig = [
            'GOOGLE_API_KEY' => 'AIzaSyCawr1ml3N2T32mzAJnDNqwbHSSGWEZUSw'
        ];
    }

    public function tearDown() : void
    {
        Cache::flush();
    }

    public function testPlaceDetail()
    {
        $service = new PlaceApi([
            'GOOGLE_API_KEY' => 'AIzaSyCawr1ml3N2T32mzAJnDNqwbHSSGWEZUSw'
        ]);
        $service->getPlaceDetail('ChIJAQ-y5OEpdTER0Aob1jFvhS0');
    }
}