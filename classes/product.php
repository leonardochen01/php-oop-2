<?php
class Product{

  protected $title; //PROPRIETA'
  protected $image;
  protected $price;

  public function __construct($title, $image, $price) //COSTRUTTORE
  {
    $this->title = $title;
    $this->image = $image;
    $this->price = $price;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function getPrice()
  {
    return $this->price;
  }
}