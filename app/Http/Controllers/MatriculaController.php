<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests;
use App\Matricula;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;

class MatriculaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getListarcursos(){
		DB::beginTransaction();
		try {
				
				$resultado = DB::select('call sp_listar_curso()');
				DB::commit();
				$array = $resultado;				
				$json["resultado"] = $resultado;	
				$json["state"] = true;
				return json_encode($json);   	 					
		
			} catch (\Exception $e) {
	    			DB::rollback();
		    		$json["state"] = false; 
		    		return json_encode($json);
     
		}
	}

	public function getListargrados(){
		DB::beginTransaction();
		try {
				
				$resultado = DB::select('call sp_listar_grado()');
				DB::commit();
				$array = $resultado;				
				$json["resultado"] = $resultado;	
				$json["state"] = true;
				return json_encode($json);   	 					
		
			} catch (\Exception $e) {
	    			DB::rollback();
		    		$json["state"] = false; 
		    		return json_encode($json);
     
		}
	}
	public function getListarestadocivil(){
		DB::beginTransaction();
		try {
				
				$resultado = DB::select('call sp_listar_estadocivil()');
				DB::commit();
				$array = $resultado;				
				$json["resultado"] = $resultado;	
				$json["state"] = true;
				return json_encode($json);   	 					
		
			} catch (\Exception $e) {
	    			DB::rollback();
		    		$json["state"] = false; 
		    		return json_encode($json);
     
		}
	}
	public function getListarocupacion(){
		DB::beginTransaction();
		try {
				
				$resultado = DB::select('call sp_listar_ocupaciones()');
				DB::commit();
				$array = $resultado;				
				$json["resultado"] = $resultado;	
				$json["state"] = true;
				return json_encode($json);   	 					
		
			} catch (\Exception $e) {
	    			DB::rollback();
		    		$json["state"] = false; 
		    		return json_encode($json);
     
		}
	}

	public function getBuscaralumno(){
				DB::beginTransaction();
		try {
			$nombres = Input::get("term");

				$resultado = DB::select('call sp_buscar_alumnos(?)',array($nombres));
				DB::commit();	

$variable ="[";


	for ($i=0; $i<=count($resultado) -1 ; $i++) 
	{ 
		$nombre_completo = $resultado[$i]->nombre.' '.$resultado[$i]->apellido;
		$codigo = $resultado[$i]->idusuario;
		$variable .= '
			{
				"label" : "'.$nombre_completo.'",
				"value" : 
					{
						"codigo" : "'.$codigo.'",
						"nombre" : "'.$nombre_completo.'"
					}
			}

		';
		if($i< count($resultado) -1){
			$variable .=',';
		}

	}

	$variable .="]";

	echo $variable ;

	
	

	

	



					
				
				//$json["label"] = $resultado->nombre;
				
				//return json_encode("[".$resultado2."]");
   	 					
		
			} catch (\Exception $e) {
	    			DB::rollback();
		    		//$json["state"] = false; 
		    		//return json_encode($json);
     
		}

	}




}
