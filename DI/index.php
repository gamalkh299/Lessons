<?php

/**
 * DI & DI Containers
 * 1- What is DI?
 * 2- Why DI is important?
 * 3- How to implement DI through constructor , setter and property injection?
 * 4- What is DI Container?
 * 5- How to implement DI Container?
 *
 */


//Inversion of Control

class Product
{


    public function __construct(public string $name ,public float $price , public int $quantity, public string $tax)
    {

    }

    public function getTotalPrice(): float
    {
        return $this->price * $this->quantity;
    }

    public function getTax(): float
    {
        return $this->getTotalPrice() * $this->tax;
    }

}


class OrderThroughConstructor
{
    //DI through constructor
    public function __construct(public Product $product)
    {

    }
    public function getTotalPrice(): float
    {
        return $this->product->getTotalPrice() + $this->product->getTax();
    }

}

//$product = new Product('Laptop', 1000, 2, 0.16);
//$order = new OrderThroughConstructor($product);
//
//var_dump($order, $order->getTotalPrice());



//DI through setter
class Order
{

    public function getTotalPrice(Product $product): float
    {
        return $product->getTotalPrice() + $product->getTax();
    }

}

//$product = new Product('Laptop', 1000, 2, 0.16);
//$order = new Order();
//$order->getTotalPrice($product);
//
//var_dump($order);


//DI through property
class OrderThroughProperty
{
    public Product $product;

    public function createProduct()
    {
        return $this->product = new Product('Laptop', 1000, 2, 0.16);

    }

    public function getTotalPrice(): float
    {
        return $this->product->getTotalPrice() + $this->product->getTax();
    }



}
//$order = new OrderThroughProperty();
//$order->createProduct();
//var_dump($order, $order->getTotalPrice());




//DI Container
class Container
{
    private array $instances = [];

    public function set(string $key, object $value)
    {
        $this->instances[$key] = $value;
    }

    public function get(string $key): object
    {
        return $this->instances[$key];
    }

}

$container = new Container();
$container->set('product', new Product('Laptop', 1000, 2, 0.16));
$container->set('order', new OrderThroughConstructor($container->get('product')));

var_dump($container->get('order'), $container->get('order')->getTotalPrice());

