<?php 
 
abstract class abstract_Calculate  
{  
    protected $param1;  
    protected $param2;  
 
    public function __construct($a, $b)  
    {  
        $this->param1 = $a;  
        $this->param2 = $b;  
    }  
}  
 
class Calculate extends abstract_Calculate  
{  
    public function __construct($a, $b)  
    {  
        parent::__construct($a, $b);  
    }  
 
    public function Plus()  
    {    
        return ($this->param1 + $this->param2);  
    }  
 
    public function Minus()  
    {    
        return ($this->param1 - $this->param2);  
    }  
 
    public function Multiply()  
    {    
        return ($this->param1 * $this->param2);  
    }  
 
    public function Divide()  
    {    
        if($this->param2 === 0)  
        {  
            return "Cannot divide by zero";  
        }   
        else  
        {  
            return ($this->param1 / $this->param2);  
        }  
    }  
 
    public function Factorial()  
    {   
        $factorial = 1;   
        for ($i = 1; $i <= $this->param1; $i++)  
        {   
            $factorial *= $i;   
        }   
        return $factorial;   
    }   
 
    public function Fibonacci()  
    {  
        $f = $this->param1;  
        $fib = [0, 1];  
        for ($i = 2; $i <= $f; $i++)  
        {  
            $fib[$i] = $fib[$i - 1] + $fib[$i - 2];  
        }  
        return $fib[$f];  
    }  
}