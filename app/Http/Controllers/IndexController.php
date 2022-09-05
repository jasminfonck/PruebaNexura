<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmpleadoRol;
use App\Models\Empleado;
use App\Models\Area;
use App\Models\Role;
use Redirect;
use Log;
class IndexController extends Controller
{
    public function index(){
        $data = Empleado::all();
        $areas = Area::all();
        $roles = Role::all();
        return view('index',compact('data','areas','roles'));
    }

    public function guardar(Request $request){
        try{
        $boletin = 0;
        if($request->boletin == 'ON'){
            $boletin = 1;
        }
        $empleado = Empleado::create(["nombre" => $request->nombre,
                        "email"=> $request->email,
                        "sexo" => $request->sexo,
                        "area_id" => $request->area,
                        "boletin" => $boletin,
                        "descripcion" => $request->descripcion]);
        foreach($request->role as $role){
            EmpleadoRol::create(["empleado_id" => $empleado->id,
            "rol_id" => $role]);
        }
        

        return redirect()->route('index')->withSuccess('Empleado Creado');
        }catch (\Exception $e) {
            Log::info("Error");
            return back()->withError("Error Code");  
        }
    }

    public function eliminar(Request $request){
        if($request->ajax()){
            $rol = EmpleadoRol::where("empleado_id",$request->id)->delete();
            $data = Empleado::find($request->id)->delete();
            return json_encode(["type" => "success","result" => "TRUE", "msj" => "Registro eliminado correctamente"]);
        }
    }

    public function editar(Request $request){
        if($request->ajax()){
            $data = Empleado::where("id",$request->id)->first();
            $areas = Area::all();
            $roles = Role::all();
            return json_encode(["type" => "success","result" => "TRUE", "msj" => "Registro eliminado correctamente","data" => $data]);
        }
    }
}

