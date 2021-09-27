<?php

    class idGenerator{
        public function generateID($type): string{
            if($type == 1){
                return $this->id = uniqid();
            } elseif($type == 2) {
                return $this->id = bin2hex(random_bytes(20));
            } elseif($type == 3) {
                return $this->id = md5(uniqid(rand(), true));
            } else {
                return $this->id = uniqid();
            }
        }
    }
?>