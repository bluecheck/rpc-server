<?php

declare(strict_types=1);

namespace Sajya\Server\Facades;

use Closure;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Facade;
use Sajya\Server\Binding;
use Sajya\Server\Exceptions\RpcException;
use Throwable;

/**
 * Class RPC
 *
 * @method static void  bind(string $key, string|callable $binder)
 * @method static void  model(string $key, string $class, Closure|null $callback = null)
 * @method static array bindResolve(string $procedure, Collection $params)
 *
 * @method static void exception(string $exceptionClass, callable $resolver)
 * @method static RpcException|null exceptionResolve(Throwable $exception)
 *
 * @see \Sajya\Server\Binding
 */
class RPC extends Facade
{
    /**
     * Initiate a mock expectation on the facade.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return Binding::class;
    }
}
