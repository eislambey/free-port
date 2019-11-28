<?php
declare (strict_types=1);

namespace Islambey\FreePort;

/**
 * @return int
 * @throws \RuntimeException
 */
function get(): int
{
    $socket = @\socket_create_listen(0);

    if ($socket === false) {
        $error = \socket_strerror(\socket_last_error());
        throw new \RuntimeException($error);
    }

    \socket_getsockname($socket, $_, $port);
    \socket_close($socket);

    return $port;
}
