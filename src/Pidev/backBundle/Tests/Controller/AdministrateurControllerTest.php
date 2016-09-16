<?php

namespace Pidev\backBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AdministrateurControllerTest extends WebTestCase
{
    public function testAjout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ajout');
    }

    public function testUpdat()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updat');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/delete');
    }

    public function testListe()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Liste');
    }

    public function testRecherche()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/recherche');
    }

}
