<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeachController extends Controller
{
    protected $words = [
            'Act' => 'Акт',
            'Bay' => 'Залив',
            'City' => 'Город',
            'Day' => 'День',
            'Eat' => 'Еда',
            'Fan' => 'Поклонник',
            'Gas' => 'Газ',
            'Hay' => 'Сено',
            'Ice' => 'Лед',
            'Key' => 'Ключ',
            'Lip' => 'Губа',
            'My' => 'Мой',
            'No' => 'Нет',
            'Old' => 'Старый',
            'Pen' => 'Ручка',
            'Queen' => 'Королева',
            'Rain' => 'Дождь',
            'Snow' => 'Снег',
            'Text' => 'Текст',
            'Use' => 'Использовать',
            'Very' => 'Очень',
            'Jew' => 'Иудей',
            'Wait' => 'Подождите',
            'X-ray' => 'Рентген',
            'Yes' => 'Да',
            'Zoo' => 'Зоопарк'            
        ];
    
    public function home()
    {
         return view('home');
    }
    
    public function abc()
    {
         return view('abc');
    }
    
    public function words()
    {
         return view('words');
    }
    
    public function translate()
    {
        
        $questions = [];
        $keys = array_rand($this->words, 10);
        $num = 1;
        foreach ($keys as $key) {
            $val = $this->words[$key];
            unset($this->words[$key]);
            $wrong_key = array_rand($this->words, 3);
            $this->words[$key] = $val;
            $variant = array_merge(
                    [$this->words[$key]],
                    array_map(function($key) {
                            return  $this->words[$key];
                        }, $wrong_key)
                    );
            shuffle($variant);
            $questions[] = [
                'number' => $num,
                'word' => $key,
                'variant' => $variant
            ];
            $num++;
        }
        return view('translate', [
             'questions' => $questions,
        ]);
    }
    
    public function check(Request $request)
    {
        $points = 0;
        foreach ($request->all() as $key => $answer) {
            if ($key != '_token' and $answer == $this->words[$key]) {
                $points++;        
            }
        }
         return response(['points' => $points], 200);
    }
}
