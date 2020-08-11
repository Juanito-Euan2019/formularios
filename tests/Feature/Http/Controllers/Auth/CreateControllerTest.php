<?php

namespace Tests\Feature\Http\Controllers\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    //Agregar Usuario
    /**@test */
    public function test_create_post()
        {
        $response = $this->json("POST","empleados",[
            'Nombre'=>'Juan',
            'Correo'=>'Juan@gmail.com'

        ]);

        $this->assertDatabaseHas('empleados',[
            'Nombre'=>'Juan',
        ]);
        

        //$response->assertStatus(200);
        //$response->assertViewIs('EmpleadosController');
    }
    //Eliminar Usuario
    /**@test */
    public function test_delete_post()
    {
        $response = $this->json("POST","empleados",[
            'Nombre'=>'Juan',
            'Correo'=>'Juan@gmail.com'
        ]);
        
        $response = $this->delete("POST",['id'=>1]);

        $this->assertDatabaseMissing('empleados',[
            'id'=>1]);
    }

    public function test_edit_post(){
        $response = $this->json("POST","empleados",[
            'id'=>1,
            'Nombre'=>'Juan',
            'Correo'=>'Juan@gmail.com'
        ]);

        $this->assertDatabaseHas('Nombre',[
            'Nombre'=>'Juan@gmail.com'
        ]);
    }
}
