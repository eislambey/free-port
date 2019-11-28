<?php

use PHPUnit\Framework\TestCase;

use Islambey\FreePort;

class FreePortTest extends TestCase
{
    const MIN_PORT = 1024;
    const MAX_PORT = 65535;

    public function testFreePort()
    {
        $port = FreePort\get();

        $this->assertTrue($port >= self::MIN_PORT && $port <= self::MAX_PORT);
    }

    public function testCreateSocketWithFreePort()
    {
        $freePort = FreePort\get();

        $socket = socket_create_listen($freePort);
        socket_getsockname($socket, $_, $socketPort);

        $this->assertIsResource($socket);
        $this->assertSame($freePort, $socketPort);

        socket_close($socket);
    }
}
