<?php

interface PizzaInterface
{
    /**
     * @return float
     */
    public function getCost(): float;

    /**
     * @return array
     */
    public function getIngredients(): array;

    /**
     * @return string
     */
    public function getTitle(): string;
}

class ChickenGrill implements PizzaInterface
{
//public float $cost = 194;
//public array $ingredients =
//[
//'Сирний соус',
//'куряче стегно',
//'смажені печериці',
//'чері',
//'цибуля фрі',
//'сир Моцарелла',
//'Пармезан'
//];
//public string $title = 'ChickenGrill';

    public function getCost(): float
    {
        return 194;
        //return $this->cost;
    }

    public function getIngredients(): array
    {
        return [
            'Сирний соус',
            'куряче стегно',
            'смажені печериці',
            'чері',
            'цибуля фрі',
            'сир Моцарелла',
            'Пармезан'
        ];
        //return $this->ingredients;
    }

    public function getTitle(): string
    {
        return 'ChickenGrill';
        //return $this->title;
    }
}

class Mexican implements PizzaInterface
{
//public float $cost = 175;
//public array $ingredients =
//[
//'Вершково-сирний соус',
//'куряче стегно',
//'сир Моцарелла',
//'сальса з ананасу та кукурудзи',
//'Гуакамолє',
//'чіпси Начос',
//'зелений перець чілі',
//'кінза'
//];
//public string $title = 'Mexican';

    function getCost(): float
    {
        return 175;
        //return $this->cost;
    }

    public function getIngredients(): array
    {
        return [
            'Вершково-сирний соус',
            'куряче стегно',
            'сир Моцарелла',
            'сальса з ананасу та кукурудзи',
            'Гуакамолє',
            'чіпси Начос',
            'зелений перець чілі',
            'кінза'
        ];
        //return $this->ingredients;
    }

    public function getTitle(): string
    {
        return 'Mexican';
        //return $this->title;
    }

}

class Munich implements PizzaInterface
{
//public float $cost = 285;
//public array $ingredients =
//[
//'з мюнхенськими і баварськими ковбасками',
//'пепероні',
//'чері',
//'солоними огірками',
//'цибулею',
//'гострим перцем чилі',
//'сир Моцарелла',
//'емменталь',
//'соус пілатті'
//];
//public string $title = 'Munich';
    public function getCost(): float
    {
        return 285;
        //return $this->cost;
    }

    public function getIngredients(): array
    {
        return [
            'з мюнхенськими і баварськими ковбасками',
            'пепероні',
            'чері',
            'солоними огірками',
            'цибулею',
            'гострим перцем чилі',
            'сир Моцарелла',
            'емменталь',
            'соус пілатті'
        ];
        //return $this->ingredients;
    }

    public function getTitle(): string
    {
        return 'Munich';
        //return $this->title;
    }
}

class PizzaCalculator
{
    public $title;
    public $cost;
    public $ingredients = [];

    public function add(PizzaInterface $pizza)
    {
        $this->title = $this->title . ' ' . $pizza->getTitle();
        return $this->title;
    }

    public function ingredients(PizzaInterface $pizza)
    {
        $this->ingredients = array_unique(array_merge($this->ingredients, $pizza->getIngredients()));
        return $this->ingredients;
    }

    public function price(PizzaInterface $pizza)
    {
        $this->cost = $this->cost + $pizza->getCost();
        return $this->cost;
    }
}

$mex = new Mexican();
$m = new Munich();
$g = new ChickenGrill();
$test = new PizzaCalculator();


$test1 = $test->add($m);
$test1 = $test->add($mex);
$test1 = $test->add($mex);
$test3 = $test->price($m);
$test3 = $test->price($mex);
$test3 = $test->price($mex);
$test2 = $test->ingredients($m);
$test2 = $test->ingredients($mex);
$test2 = $test->ingredients($mex);

dd($test1, $test2, $test3);