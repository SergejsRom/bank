<?php
//KLASES daro vienas


class Bebras {
    public $tail = 'long'; //skaiciavimai neleidziami prie $nnn

    private $age = 23;

    private $name, $children;

    public function __construct(string $n, array $c) {
        echo '<br> magic construct <br>';
        $this->whatIsYourAge();
        $this->age = rand(10,300);
        $this->whatIsYourAge();
        $this->name = $n;
        $this->$children = $c;

    }

    public function __destruct() {
        echo '<br> magic visi mire <br>';
    }


    public function whatIsYourAge() { //getter
        echo '<br>'.(++$this->age).'<br>';

    }
    //public function changeAge(int $age) { //setter
    public function changeAge(array $age) {
    
        if ($age[0] > 25) {
            return;
        }
        //$this->age = $age;
        $this->age = $age[0];
    }
    public function __get($what) {
        if(in_array($what, ['age', 'name'])) {
            return $age;
        }
       // echo '<br>magic GET '.$what. '<br>';
       // return 'nieko nera';
       return $this->$what;
    
    }

    public function __set($where, $what) {
        echo '<br>magic SET '.$where.' '.$what.'<br>';
    }
}

