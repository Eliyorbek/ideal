<?php

namespace App\Livewire;

use App\Models\Course;
use App\Models\CourseRegister;
use Livewire\Component;

class Fans extends Component
{
    public $title = 'Fanlar';

    public function deleteUser($id){
        CourseRegister::destroy($id);
    }
    public function render()
    {
        $matem = CourseRegister::whereHas('course', function($query){
            $query->where('name', 'matematika');
        })->where('status' , 'yozildi')->get();
        
        $ona = CourseRegister::whereHas('course', function($query){
            $query->where('name', 'ona tili');
        })->where('status' , 'yozildi')->get();

        $fizika = CourseRegister::whereHas('course', function($query){
            $query->where('name', 'fizika');
        })->where('status' , 'yozildi')->get();

        $geografiya = CourseRegister::whereHas('course', function($query){
            $query->where('name', 'geografiya');
        })->where('status' , 'yozildi')->get();

        $tarix = CourseRegister::whereHas('course', function($query){
            $query->where('name', 'tarix');
        })->where('status' , 'yozildi')->get();

        $biologiya = CourseRegister::whereHas('course', function($query){
            $query->where('name', 'boilogiya');
        })->where('status' , 'yozildi')->get();

        $kimyo = CourseRegister::whereHas('course', function($query){
            $query->where('name', 'kimyo');
        })->where('status' , 'yozildi')->get();

        $huquq = CourseRegister::whereHas('course', function($query){
            $query->where('name', 'huquq');
        })->where('status' , 'yozildi')->get();

        $english = CourseRegister::whereHas('course', function($query){
            $query->where('name', 'ingliz tili');
        })->where('status' , 'yozildi')->get();
        $rus = CourseRegister::whereHas('course', function($query){
            $query->where('name', 'rus tili');
        })->where('status' , 'yozildi')->get();
        $arab = CourseRegister::whereHas('course', function($query){
            $query->where('name', 'arab tili');
        })->where('status' , 'yozildi')->get();
        return view('livewire.fans' , compact('matem' , 'ona' ,'fizika','geografiya','tarix','biologiya',
    'kimyo' , 'huquq','english','rus' , 'arab'));
    }
}
