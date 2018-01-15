<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Tests\Expected\Resource;

trait DefaultResourceTrait
{
    /**
     * @param \Jane\OpenApi\Tests\Expected\Model\TestGetBody $body
     * @param string                                         $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function getTest(\Jane\OpenApi\Tests\Expected\Model\TestGetBody $body, string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Jane\OpenApi\Tests\Expected\Endpoint\GetTest($body);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }

    /**
     * @param \Jane\OpenApi\Tests\Expected\Model\TestPostBody $body
     * @param string                                          $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Psr\Http\Message\ResponseInterface
     */
    public function test(\Jane\OpenApi\Tests\Expected\Model\TestPostBody $body, string $fetch = self::FETCH_OBJECT)
    {
        $endpoint = new \Jane\OpenApi\Tests\Expected\Endpoint\Test($body);

        return $this->executePsr7Endpoint($endpoint, $fetch);
    }
}
