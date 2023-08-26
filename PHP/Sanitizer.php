<?php

class Sanitizer
{
    function sanitize(...$args) : bool{
        foreach ($args as $item){
            if(!empty(trim($item))){
                continue;
            }else{
                return false;
            }
        }
        return true;
    }
}