<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use App\User;
use App\Mensajeria;
use App\CampoContacto;
use App\Dato;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class inbloodTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::find(2);
        $this->be($user);
        $request = new Request();
        $request->replace([
            'id' => '1'
        ]);

        $nombre = $request->nombre;
        $id = Role::where('name', '=', $nombre)->first()->id;
        $role = Role::find($id);
        
        dd($role->id);

        $this->assertTrue(true);
    }
}
