<?php

namespace App\Livewire;

use Livewire\Component;

class MyComponent extends Component
{

    public $eye=0,$show=0,$open=0,$create=0,$update=0,$delete=0;

    public function close(){
        $this->show=0;
        $this->eye=0;
        $this->open= 0;
        $this->create= 0;
        $this->update= 0;
        $this->delete= 0;
    }
    public function createOpen(){
        $this->create = 1;
        $this->show=1;
    }

    public function updateOpen(){
        $this->show=1;
        $this->update=1;
    }

    public function deleteOpen(){
        $this->show=1;
        $this->delete=1;
    }
}
