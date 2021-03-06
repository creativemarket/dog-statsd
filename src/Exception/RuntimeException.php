<?php
/**
 * This file is part of graze/dog-statsd
 *
 * Copyright (c) 2016 Nature Delivered Ltd. <https://www.graze.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license https://github.com/graze/dog-statsd/blob/master/LICENSE.md
 * @link    https://github.com/graze/dog-statsd
 */

namespace Graze\DogStatsD\Exception;

use Exception;
use Graze\DogStatsD\Client;

class RuntimeException extends \RuntimeException
{
    /**
     * Client instance that threw the exception
     *
     * @var Client
     */
    protected $instance;

    /**
     * Create new instance
     *
     * @param Client         $instance Client instance that threw the exception
     * @param string|null    $message  Exception message
     * @param Exception|null $previous Previous Exception
     */
    public function __construct(Client $instance, $message = '', Exception $previous = null)
    {
        $this->instance = $instance;
        parent::__construct($message, 0, $previous);
    }

    /**
     * Get Client instance that threw the exception
     *
     * @return Client Client instance
     */
    public function getInstance()
    {
        return $this->instance;
    }
}
