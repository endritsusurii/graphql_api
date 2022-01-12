<?php

namespace App\GraphQL\Mutations;

class createKlientet

{
    public function create($root, array $args)
    {
        return \App\Klientet::create($args);
    }
}
