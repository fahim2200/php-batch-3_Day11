<?php


namespace App\classes;


class Example
{
    public $student = [];

    public function index()
    {
//        $this->student = [10, 20, 'BITM', 10.20, true, false];
////        echo $this->student[3];
//        foreach ($this->student as $index => $item)
//        {
//            echo 'index no '. $index. 'value- '. $item. '<br/>';
//        }
        $this->student = [
            0 => [
                'name' => 'Jahid',
                'email' => 'jahid@gmail.com',
                'mobile'     => [
                    'mobile1' =>'2554555',
                    'mobile2' => '4465544',
                ],
            ],
            1 => [
                'name' => 'Fahim',
                'email' => 'fahim@gmail.com',
                'mobile'     => [
                    'mobile1' =>'2554555',
                    'mobile2' => '4465544',
                ],

            ],
        2=> 'BITM',
        3=> [
            'name'     => 'Shahabuddin',
            'email'    => 'shabuddin@gmail.com',
            'mobile'     => [
                'mobile1' =>'2554555',
                'mobile2' => '4465544',
    ],
            ]
            ];
        echo '<pre>';
//        print_r($this->student);
//        var_dump($this->student);





//          echo $this->student[1]['mobile'];




//        foreach ($this->student as $key => $item) {
//            echo $item['name'] . ' ' . $item['email'] . ' ' . $item['mobile'] . '<br/>';
//        }
//
//        foreach ($this->student as $item)
//        {
//            if (is_array($item))
//            {
//                foreach ($item as $value) {
//                    if (is_array($value)) {
//                        foreach ($value as $v_value) {
//                            echo $v_value.' ';
//                        }
//                    }else{
//                        echo $value. ' ';
//                    }
//                }
//
//
//            }
//            else{
//                echo $item;
//            }
//            echo '<br/>';
//        }




    }
}

