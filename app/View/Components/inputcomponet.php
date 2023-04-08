<?php

namespace App\View\Components;

use Illuminate\View\Component;

class inputcomponet extends Component
{
  
    public $type;
    public $label;
    public $name;
    public $value;


    public function __construct($type, $label, $name,$value = "")
    {
        $this -> type  = $type;
        $this -> label = $label;
        $this -> name  = $name;
        $this -> value = $value;
    }

    public function render()
    {
        return view('components.inputcomponet');
    }
}
