<?php

namespace andrisyahputra\Belajar;

class Customer
{
    public function __construct(private string $nama)
    {
    }
    public function sayHello(string $nama): string
    {
        return "Hello $nama, Perkanalkan nama saya adalah $this->nama";
    }
}
