<?php 

class HelloWorldException extends Exception{}
class NetworkException extends Exception{}

function testException(){
    throw new NetworkException();
}

try{
    testException();
}catch(HelloWorldException $e){
    echo "HelloWorldException caught";
}catch(NetworkException $e){
    echo "NetworkException caught";
}
