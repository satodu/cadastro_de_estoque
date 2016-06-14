<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use Validator;
use Auth;
use estoque\Categoria;
use estoque\Produto;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller {

    public function __construct()
  {
    $this->middleware('auth', ['only' => ['adiciona', 'remove', 'mostra']]);
  }
    public function lista(){
        $produtos = Produto::all();
        return view('produtos.listagem')->with('produtos', $produtos);
    }

    public function mostra($id){
        $produtos = Produto::find($id);
        if(empty($produtos)) {
            return "Esse produto não existe";
        }
        return view('produtos.detalhes')->with('p', $produtos);
    }

    public function novo(){
        return view('formulario')->with('categorias', Categoria::all());
    }

    public function adiciona(ProdutoRequest $request){
        $parms = $request->all();
        Produto::create($parms);
        return redirect()
        ->action('ProdutoController@lista')
        ->withInput(Request::only('nome'));
    }

    public function listajson(){
        $produtos = DB::select('select * from produtos');
        return $produtos;
    }

    public function remove($id){
        $produto = Produto::find($id);
        $produto->delete();
        return redirect()
        ->action('ProdutoController@lista');

    }

}