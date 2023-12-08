<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use Illuminate\Http\Request;
use function PHPUnit\Framework\assertEquals;
use function PHPUnit\Framework\assertFalse;
use function PHPUnit\Framework\assertTrue;

class LabaController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function documentation()
    {
        return view('documentation');
    }

    public function contracts()
    {
        return view('contracts');
    }

    public function instruments()
    {
        return view('instruments');
    }

    public function visits()
    {
        $visits = Visit::all();
        return view('visits', compact('visits'));
    }

    public function create_visit(){
        return view('create_visit');
    }

    public function mb_ucfirst($str)
    {
        return mb_strtoupper(mb_substr($str, 0, 1)) . mb_substr($str, 1);
    }

    public function store_visit()
    {
        $data = request()->validate([
            'name' => '',
            'surname' => '',
            'time_in' => '',
            'time_out' => '',
            'subject' => '',
        ]);

        try {
            $data['name'] = $this->mb_ucfirst($data['name']);
            $data['surname'] = $this->mb_ucfirst($data['surname']);
            $data['subject'] = $this->mb_ucfirst($data['subject']);
        } catch (Exception $e){
            echo 'Error';
        }

    
        // Перевірка, що ім'я і прізвище містять тільки букви та пробіли
        assert(preg_match('/^[\p{Cyrillic} ]+$/u', $data['name']), 'Ім\'я може містити тільки букви та пробіли української мови');
        assert(preg_match('/^[\p{Cyrillic} ]+$/u', $data['surname']), 'Прізвище може містити тільки букви та пробіли української мови');

        $time_in = explode(':',$data['time_in']);
        $time_out = explode(':',$data['time_in']);
        assert(strtotime($data['time_in']),'Неправильно введено час входу (приклад = 10:30)');
        assertEquals(count($time_in),2,'Неправильно введено час входу (приклад = 10:30), потрібно ввести без секунд');
        assertEquals(strlen($time_in[0]),2,'Неправильно введено час входу, якщо годин менше 10, то ввести з 0 (02,03)');
        assertEquals(strlen($time_in[1]),2,'Неправильно введено час входу, якщо хвилин менше 10, то ввести з 0 (02,03)');
        assert(strtotime($data['time_out']),'Неправильно введено час виходу (приклад = 10:30)');
        assertEquals(count($time_out),2,'Неправильно введено час виходу (приклад = 10:30), потрібно ввести без секунд');
        assertEquals(strlen($time_out[0]),2,'Неправильно введено час виходу, якщо годин менше 10, то ввести з 0 (02,03)');
        assertEquals(strlen($time_out[1]),2,'Неправильно введено час виходу, якщо хвилин менше 10, то ввести з 0 (02,03)');
        assert(strtotime($data['time_in']) < strtotime($data['time_out']), 'Час входу повинен бути раніше за час виходу');
        assert(in_array($data['subject'],['Хімія','Фізика','Біологія']), 'Предмет може бути Хімія, Фізика, Біологія' );

        Visit::create($data);
        $visits = Visit::all();
        return view('visits', compact('visits'));
    }

}
