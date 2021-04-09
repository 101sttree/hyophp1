<?php
    class FomrHelper
    {
        protected $values = array();
        //클래스 내부에서만 사용할 수 있는 배열 변수 $values 선언

        public function __construct($values = array())
        //생성자는 매개변수 $values를 받으며 기본값은 빈 배열이다.
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST')
            //폼의 method 즉 요청방식이 POST 일 경우 참을 반환
            {
                $this ->values = $_POST;
                //FomrHelper 의 프로퍼티인 $values의 값을 글로번
                //배열 변수인 $_POST로 할당
            }
            else
            {
                $this ->values = $values;
                //요청방식이 get일경우 생성자를 통해 받아온 값을 $values에 할당
            }
        }
//==========================================================================================
        public function input($type,$attributes = array(), $isMultiple = false)
        //필수 매개변수 $tyep와 선택 매개변수 $attributes,$isMultiple를 받는 함수
        {
            $attributes['type'] = $type;
            //매개변수 $attributes 의 type 원소의 값을 매개변수 $type 값으로 할당
            if (($type == 'radio') || ($type == 'checkbox'))
            //$type 값이 radio나 checkbox 일때
            {
                if ($this->isOptionSelected($attributes['name'] ?? null,
                                            $attributes['value'] ?? null))
                {
                    $attributes['checked'] = true;
                }
            }
            return $this->tag('input',$attributes,$isMultiple);
        }
//==========================================================================================
        public function select($options, $attributes = array())
        //$options 과 $attributes 를 매개변수로 받는다.
        {
            $multiple = $attributes['multiple'] ?? false;
            //$multiple 변수에 매개변수로 받아온 $attributes의
            //키가 multiple인 원소의 값을 할당하고 존재하지 않을경우 false값을 할당한다.
            return
                $this ->start('select', $attributes, $multiple);
                $this ->options($attributes['name'] ?? null, $options);
                $this ->end('select');
                //인수를 전달받은 함수 3개의 반환값을 리턴한다.
        }
//==========================================================================================
        public function textarea($attributes = array())
        {
            $name = $attributes['name'] ?? null;
            $value = $this->values[$name] ?? '';
            return $this->start('textarea', $attributes).htmlentities($value)
                .$this->end('textarea');
        }
//==========================================================================================
        public function tag($tag, $attributes = array(), $isMultiple = false)
        {
            return "<$tag {$this->attributes($attributes,$isMultiple)} />";
        }
        public function start($tag, $attributes = array(), $isMultiple = false)
        {
            $valueAttribute = (!(($tag == 'select') || ($tag == 'textarea')));
            $attrs = $this->attributes($attributes, $isMultiple, $valueAttribute);
            return "<$tag $attrs>";
        }
        public function end($tag)
        {
            return "</$tag>";
        }
//==========================================================================================
        protected function attributes($attributes, $isMultiple, $valueAttribute = true)
        {
            $tmp = array();
            if ($valueAttribute && isset($attributes['name'])
                && array_key_exists($attributes['value'], $this->values))
            {
                $attributes['value'] = $this->values[$attributes['name']];
            }
            foreach ($attributes as $k => $v)
            {
                if(is_bool($v))
                {
                    if($v)
                    {
                        $tmp[] = $this->encode($k);
                    }
                    else
                    {
                        $value = $this->encode($v);
                        if ($isMultiple && ($k == 'name'))
                        {
                            $value.='[]';
                        }
                        $tmp[] = "$k=\"$value\"";
                    }
                }
            }
            return implode(' ',$tmp);
        }
//==========================================================================================
        protected function options($name, $options)
        {
            $tmp = array();
            foreach($options as $k => $v)
            {
                $s = "<option value=\"{$this->encode($k)}\"";
                if($this->isOptionSelected($name,$k))
                {
                    $s .= 'selected';
                }
                $s .= ">{$this->encode($v)}</option>";
                $tmp[] = $s;
            }
            return implode('',$tmp);
        }
//==========================================================================================
        protected function isOptionSelected($name,$value)
        {
            if (!isset($this->values[$name]))
            {
                return false;
            }
            else if (is_array($this->values[$name]))
            {
                return in_array($value,$this->values[$name]);
            }
            else
            {
                return $value == $this->values[$name];
            }
        }
//==========================================================================================
        public function encode($s)
        {
            return htmlentities($s);
        }
    }
?>


