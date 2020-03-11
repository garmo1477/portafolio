<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        //$this->middleware('auth')->only('create','edit');
        //pedirá que iniciemos sesion para acceder a estas rutas
        $this->middleware('auth')->except('index','show');
    }
    public function index()
    {
        //utilizamos get para obtener todos los datos de la tabla projects y lo ordenamos por fecha creación descendiente $portfolio = Project::orderBy('created_at', 'DESC')->get();

        return view('projects.index', [
            'projects' => Project::latest('updated_at')->paginate()//para hacer paginación y q se muestr de 2 en 2 o el numero que queramos, si dejamos vacío sera 15 por defecto
        ]);
    }
    //ponemos el modelo Project como parametro de la función show, esto se conoce como Route Model Binding
   public function show(Project $project){
        return view ('projects.show ', [
            'project' => $project
        ]);
    }
    public function create(){
        return view('projects.create', [
            'project' => new Project
        ]);
    }
    public function store(SaveProjectRequest $request){
       //para guardar esos datos en la base de datos.
      /* Project::create([
            'title' => request('title'),
            'description' => request('description'),
            'url' => request('url')
        ]);*/

        //si tenemos variables que se llaman igual a los campos podemos hacerlo con all()
        /*$fields = request()->validate([
            'title' => 'required',
            'url' => 'required',
            'description' => 'required'
        ]);*/

        //Project::create(request()->only('title','url','description'));
        //validamos los campos y pasamos la variable con los mismos ya validados, la manera correcta de hacerlo
        Project::create( $request->validated() );
       return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con éxito');
    }

  public function edit(Project $project){
      return view('projects.edit', [
          'project' => $project
      ]);
   }
   public function update(Project $project, SaveProjectRequest $request){
      $project->update($request->validated());
      return redirect()->route('projects.show', $project)->with('status','Proyecto actualizado con éxito');
   }
   public function destroy(Project $project)
   {
    $project->delete();
    return redirect()->route('projects.index')->with('status', 'Proyecto eliminado con éxito');
   }
}
