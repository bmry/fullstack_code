<?php

namespace Snubes\CodeChallenge\CacheService;

abstract class AbstractCachingSystem
{
    protected $cache;

    public function connect(string $host, string $port): void
    {
        $this->cache->connect($host, $port);
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function get(string $key)
    {
        return $this->cache->get($key);
    }

    /**
     * @param string $key
     * @param string $value
     * @param string|null $isCompressed
     * @param string|null $ttl
     */
    abstract function set(string $key, string $value, string $isCompressed=null, string $ttl=null):void;


}