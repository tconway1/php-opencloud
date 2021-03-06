<?php declare(strict_types=1);

namespace Rackspace\Test\CDN\v1\Models;

use OpenCloud\Test\TestCase;
use Rackspace\CDN\v1\Api;
use Rackspace\CDN\v1\Models\Service;

class ServiceTest extends TestCase
{
    private $service;

    public function setUp()
    {
        parent::setUp();

        $this->rootFixturesDir = dirname(__DIR__);

        $this->service = new Service($this->client->reveal(), new Api());
    }

    public function test_it_creates()
    {
    }

    public function test_it_updates()
    {
    }

    public function test_it_lists()
    {
    }

    public function test_it_deletes()
    {
    }

    public function test_it_retrieves()
    {
    }
}