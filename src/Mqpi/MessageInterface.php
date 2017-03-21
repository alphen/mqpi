<?php 
namespace Mqpi;

interface MessageInterface{
 
    public function __construct($body = '', $properties = array());
    public function setBody($body);
    public function getBody();
    
}

?>