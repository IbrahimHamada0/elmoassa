<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Clint;
class Form extends Component
{

    public $name;
    public $phone;

    public $age;
    public $country;
    public $qualification;
    public $message;
    public $email;
    public $course;

    public function render()
    {
        return view('livewire.form');
    }
    
    public function send(){

       $this->validate([
            'name' => 'required',
            'phone' => 'required|numeric',
            'age' => 'required|numeric',
            'country' => 'required',
            'qualification' => 'required',
            'course' => 'required',

        ]);
    
        $message = new Clint;
        $message->name =  $this->name; 
        $message-> phone = $this->phone;


        if(!$this->email){
            $message-> email='none';
        }else {
        $message-> email = $this->email;
        }      


  
        if(!$this->message){
            $message-> message='none';
        }else {
        $message-> message = $this->message;
        }

        $message-> country = $this->country;
        $message-> qualification =$this->qualification;
        $message-> age = $this->age;
        $message-> course = $this->course;
     
        $message->save(); 

    session()->flash('Success', 'Success');
    

    }
}
