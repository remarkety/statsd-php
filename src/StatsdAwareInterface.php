<?php

namespace Domnikl\Statsd;

/**
 * Describes a StatsD-aware instance.
 */
interface StatsdAwareInterface
{
    /**
     * Sets a StatsD client instance on the object.
     */
    public function setStatsdClient(Client $client): void;
}
