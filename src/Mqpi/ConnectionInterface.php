<?php
namespace Mqpi;

interface ConnectionInterface{
    
    public function reconnect();
    
    public function channel($channelId = null);
    
    public function close($replyCode = 0, $replyText = '', $methodSig = array(0, 0));
    
    public function isConnected();
    
    public function write($data);
    
}
?>