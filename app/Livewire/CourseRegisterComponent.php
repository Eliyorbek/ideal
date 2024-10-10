<?php

namespace App\Livewire;

use App\Models\CourseRegister;
use Livewire\Component;
use Livewire\WithPagination;
class CourseRegisterComponent extends MyComponent
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search;
    public $thead =[
        0=>'id',
        1=>'ism familya',
        2=>'kurs',
        3=>'Tel nomer',
        4=>'tahrirlash',
    ];
    public $title = 'Course Register';


    public function deleteUser($id){
       CourseRegister::destroy($id);
    }

    public function editStatus($id){
        CourseRegister::find($id)->update(
            ['status' => 'yozildi']
        );;
    }
    public function render()
    {
        if($this->search != null){
            $users = CourseRegister::where('name' , 'LIKE' , '%'.$this->search.'%')
            ->orWhereHas('course' , function($query){
                $query->where('name', 'LIKE' , '%'.$this->search.'%');
            })
            ->paginate(10);

        }else{
            $users = CourseRegister::where('status' , 'active')->paginate(10);

        }
        return view('livewire.course-register-component' , compact('users'));
    }
}
