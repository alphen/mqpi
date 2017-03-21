<?php
namespace Ampi;

interface ChannelInterface
{

    public function __construct(
        ConnectionInterface $connection, 
        $channelId = null, 
        $autoDecode = true
    );
    
    public function publish(
        $msg,
        $exchange = '',
        $routingKey = '',
        $mandatory = false,
        $immediate = false,
        $ticket = null
    );
    
    public function queue_declare(
        $queue = '',
        $passive = false,
        $durable = false,
        $exclusive = false,
        $autoDelete = true,
        $nowait = false,
        $arguments = null,
        $ticket = null
    );
        
}

?>