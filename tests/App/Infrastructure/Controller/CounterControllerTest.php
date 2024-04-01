<?php

namespace App\Tests\App\Infrastructure\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CounterControllerTest extends WebTestCase
{
    public function testCreate(): void
    {
        $client = static::createClient();
        $crawler = $client->request('POST', '/api/v1/counters');

        $this->assertResponseIsSuccessful();
        $this->assertJsonStringEqualsJsonString(
            '{"value": 0}',
            $client->getResponse()->getContent()
        );
    }

    public function testIncrease(): void
    {
        $client = static::createClient();
        $crawler = $client->request(
            'PATCH',
            '/api/v1/counters/6d8d2e69-5320-4926-8af1-aeb48b529fe2/increase',
            server: ['headers' => ['Content-Type' => 'json']],
            content: '{"value": 5}'
        );

        $this->assertResponseIsSuccessful();
        $this->assertJsonStringEqualsJsonString(
            '{"value": 6}',
            $client->getResponse()->getContent()
        );
    }
}
