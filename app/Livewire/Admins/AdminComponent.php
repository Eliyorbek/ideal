<?php

namespace App\Livewire\Admins;

use App\Livewire\MyComponent;
use App\Models\Course;
use App\Models\User;
use Livewire\WithPagination;

class AdminComponent extends MyComponent
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $title = 'Course Categories',$subtitle = 'Home' , $id,$name,$create=0;
    public $search;
    public $thead = [
        0=>'id',
        1=>'name',
        2=>'action',
    ];

    public function saveAdmin(){
        $user = Course::create([
            'name' => $this->name,
            ]);
        $this->close();
        $this->render();
    }

    public function updateWindow($id){
        $this->updateOpen();
        $course = Course::find($id);
       $this->name= $course->name;
        $this->id = $course->id;

    }
    public function updateSave($id){
        $course = Course::find($id);
        $course->update([
            'name'=>$this->name,
        ]);
        $this->close();
        $this->render();
    }
    public function deleteUser($id){
        Course::destroy($id);
        $this->render();
    }
    public function render()
    {
        if($this->search != null){
            $users = Course::where('name','like','%'.$this->search.'%')->paginate(10);
            return view('livewire.admins.admin-component' , compact('users'));
        }else{
            $users = Course::paginate(10);
            return view('livewire.admins.admin-component' , compact('users'));
        }

    }
}
