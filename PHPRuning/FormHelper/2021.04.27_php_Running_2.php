<?php
    require 'FormHelper.php';

    $ops = array('+','-','*','/');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        list($errors, $input) = validate_form();
        if ($errors){
            show_form($errors);
        }else{
            process_form2($input);
            show_form();
        }
    }else{
        show_form();
    }

    function show_form($errors = array()){
        $defaults = array('num' => 2,
                          'op' => 2,
                          'num2' => 8);
        $form = new FormHelper($defaults);

        include 'math-form.php';
    }

    function validate_form(){
            $input = array();
            $errors = array();

            $input['op'] = $GLOBALS['ops'][$_POST['op']] ?? '';
            if (!in_array($input['op'],$GLOBALS['ops'])){
                $errors[] = '연산자를 선택하세요';
            }
            $input['num1'] = filter_input(INPUT_POST,'num1',FILTER_VALIDATE_FLOAT);
            if(is_null($input['num1']) || $input['num1'] === false){
                $errors[] = '첫 번째 수를 입력하세요';
            }
            $input['num2'] = filter_input(INPUT_POST,'num2',FILTER_VALIDATE_FLOAT);
            if(is_null($input['num2']) || $input['num2'] === false){
                $errors[] = '두 번째 수를 입력하세요';
            }
            if (($input['op'] == '/') && ($input['num2']===0)){
                $errors[] = '0으로 나눌 수 없습니다.';
            }
            return array($errors, $input);
        }

        function process_form2($input)
        {
            $result = 0;
            if($input['op'] == '+'){
                $result = $input['num1'] + $input['num2'];
            }
            if($input['op'] == '-'){
                $result = $input['num1'] - $input['num2'];
            }
            if($input['op'] == '*'){
                $result = $input['num1'] * $input['num2'];
            }
            if($input['op'] == '/'){
                $result = $input['num1'] / $input['num2'];
            }

            $message = "{$input['num1']}{$input['op']}{$input['num2']}=$result";

            print "<h3>$message</h3>";
        }





























