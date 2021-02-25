<?php

namespace shubh\helloworld;

class World Extends Hello {

    protected $worldPro = "World";

    public function WorldMet() {
        $a = $this->HelloMet() . " " . $this->worldPro;
        return $a;
    }

}
