<?php

use SilverStripe\Dev\SapphireTest;

class SitePageTest extends SapphireTest
{
    /**
     * Defines the fixture file to use for this test class
     * @var string
     */
    protected static $fixture_file = 'site/tests/fixturesSitePage.yml';

    /**
     * Test generation of the URLSegment values.
     *
     * Makes sure to:
     *  - Turn things into lowercase-hyphen-format
     *  - Generates from Title by default, unless URLSegment is explicitly set
     *  - Resolves duplicates by appending a number
     */
    public function testURLGeneration()
    {
        $expectedURLs = [
            'page1' => 'page-one',
            'page2' => 'page-two'
        ];

        foreach ($expectedURLs as $fixture => $urlSegment) {
            $obj = $this->objFromFixture('SitePage', $fixture);
            $this->assertEquals($urlSegment, $obj->URLSegment);
        }
    }
}
