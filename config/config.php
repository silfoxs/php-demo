<?php
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

return [
    // ...

    Psr\Log\LoggerInterface::class => DI\factory(function () {
        $logger = new Logger('silfox');

        $fileHandler = new StreamHandler('./logs/test.log', Logger::INFO);
        $fileHandler->setFormatter(new LineFormatter());
        $logger->pushHandler($fileHandler);

        return $logger;
    }),
];