<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    // crea y elimina el usuario de la BD
    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    
    public function testBasicExample()
    {
        $name = 'Duilio Palacios';

        $user = factory(\App\User::class)->create([

        'name' => $name]);

        $this->actingAs($user,'api');

        $this->visit('api/user')
             ->see('Duilio Palacios');
    }
}
