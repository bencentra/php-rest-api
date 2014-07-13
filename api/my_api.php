<?php

require_once 'abstract_api.php';

class MyAPI extends API
{
    public function __construct($request, $origin) {
        parent::__construct($request);

        // Add authentication, model initialization, etc here
    }

    /*
     * Example of an Endpoint
     */
     protected function example() {
        switch ($this->verb) {
            case "get":
                if ($this->method == 'GET') {
                    return array("status" => "success", "endpoint" => $this->endpoint, "verb" => $this->verb, "args" => $this->args, "request" => $this->request);
                } 
                else {
                    return "Only accepts GET requests";
                }
                break;
            case "post":
                if ($this->method == 'POST') {
                    return array("status" => "success", "endpoint" => $this->endpoint, "verb" => $this->verb, "args" => $this->args, "request" => $this->request);
                } 
                else {
                    return "Only accepts POST requests";
                }
                break;
            case "delete":
                if ($this->method == 'PUT') {
                    return array("status" => "success", "endpoint" => $this->endpoint, "verb" => $this->verb, "args" => $this->args, "request" => $this->request);
                } 
                else {
                    return "Only accepts PUT requests";
                }
                break;
            case "put":
                if ($this->method == 'DELETE') {
                    return array("status" => "success", "endpoint" => $this->endpoint, "verb" => $this->verb, "args" => $this->args, "request" => $this->request);
                } 
                else {
                    return "Only accepts DELETE requests";
                }
                break;
            default:
                break;
        }
        
     }
 }

?>