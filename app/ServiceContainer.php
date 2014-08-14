<?php

class Container
{
  protected $service1 = null;
  protected $service2 = null;

  public function getService1()
  {
    if (null !== $this->service1) {
      return $this->service1;
    }

    $this->service1 = new Service1($this->getService2());

    return $this->service1;
  }

  public function getService2()
  {
    if (null !== $this->service2) {
      return $this->service2;
    }

    $this->service2 = new Service2();

    return $this->service2;
  }
}