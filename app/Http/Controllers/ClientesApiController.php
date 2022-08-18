<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\clientes;


class ClientesApiController extends Controller
{
       public function get_clientes01(){
        $consulta = clientes::all();
        return response() -> json($consulta, 200);
        }


    public function get_clientes02(){
        return clientes::all();
    }

    public function get_clientes03(){
        $consulta = \DB::select("SELECT * FROM clientes");
        return response() -> json($consulta, 200);

    }

public function get_clientes07(){
   $consulta = \DB::select("
            SELECT clientes.id , clientes.nombre_cliente,clientes.telefono_cliente ,clientes.correo_cliente,clientes.edad_cliente,clientes.direccion_cliente,clientes.estado_cliente,clientes.municipio_cliente,clientes.codigopostal_cliente,clientes.forma_pago FROM clientes");
    return response() -> json ($consulta, 200);
}



    // ------------------Consulta especifica -----------------------

    public function get_clientes04(clientes $id){
        return response() -> json($id, 200);
        
    }

    public function get_clientes05($id){
        $consulta = \DB::select("SELECT * FROM clientes WHERE id =".$id);
        return response() -> json($consulta, 200);

    }
    public function get_clientes06($id){
        return clientes::find($id);
    }

    // ----------------------------Alta Alumno -----------------------------------

    public function post_clientes01(Request $resquest){
        $alta = clientes::create($resquest->all());
        return response()->json($alta, 201);
    }

    //-------------------modificacion alumno ------------
    public function put_clientes01(Request $resquest, clientes $id){
        $id -> update($resquest->all());
        return response()-> json($id, 200);

    }
    //----------------------Borrar Alumno---------
    public function del_clientes01(clientes $id){
        $id -> delete();
        return response() -> json(null, 204);
    }

}
