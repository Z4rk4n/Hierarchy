<?php

namespace App\Service;

use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\Attribute\When;

/**
 * Usefull bro trust me.
 */
#[When(env: 'dev')]
class SnoopDogg
{

    public function __construct(
        private LoggerInterface $logger
    ) {}

    // just put "SmokeWeedEveryDay" in logs ( am high )
    public function say() 
    {
        $this->logger->info("Smoke Weed Everyday !");
    }

}