<?php

namespace App\Http\Controllers;

use App\Models\Admins;
use Illuminate\Http\Request;


class AdminController extends Controller
{

    protected $admins;
 
    public function __construct(Admins $admins) {
    
    $this->admins = $admins;

    }
    
    public function index()
    
    {

        $admins = Admins::all();
        return view('painel-admin.index.index', compact('index','admins'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        
        return view('painel-admin.index.create');
    
    }


    public function store(Request $request)
   
    {
        
        $this->validate($request, [
            'id_admin' => 'required',
            'nome_admin' => 'required',
            'idade' => 'required|numeric',
            'usuario_admin' => 'required',
        ]);

        $input = $request->all();

        Admins::create($input);

        return redirect()->route('painel-admin.index.index');

    }

    
    public function show($id)
    
    {
        
        $admin = Admins::findorFail($id);

        return view('painel-admin.index.show',compact('admins','admins'));
    }

    
    public function edit($id)
    
    {
        $admin = Admins::find($id);

        return view('painel-admin.index.edit');
    }

   
    public function update(Request $request, $id)
        
    {

        $admin = Student::findOrFail($id);

        $this->validate($request, [
            'id_admin' => 'required',
            'nome_admin' => 'required',
            'idade' => 'required|numeric',
            'usuario_admin' => 'required',
        ]);

        $input = $request->all();

        $admin->fill($input)->save();

        return redirect()->route('painel-admin.index');
        
    }
    

   
    public function destroy($id)
    
    {
        $admin = Admins::findOrFail($id);

        $admin->delete();
        
        return redirect()->route('painel-admin.index');
    }

}
