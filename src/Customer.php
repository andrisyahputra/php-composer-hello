<?php

namespace andrisyahputra\Belajar;

class Customer
{
    public function __construct(private string $nama = "andrimc")
    {
    }
    public function sayHello(string $nama = "andrimc"): string
    {
        return "Hello $nama, Perkanalkan nama saya adalah $this->nama";
    }
}
