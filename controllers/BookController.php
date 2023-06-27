<?php
require_once 'Controller.php';
require_once 'models/Book.php';
require_once 'models/Genre.php';
class BookController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['user', 'funcionario','admin']);
    }
    public function index()
    {
        $books = book::all();

        $this->renderView('book','index', ['books'=>$books]);

        //mostrar a vista index passando os dados por parâmetro
    }

    public function show($id)
    {
        $book = book::find($id);
        if (is_null($book)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('book','show', ['book'=>$book]);
        }
    }
    public function create()
    {
        $genres = Genre::all();
        $this->renderView('book','create', ['genres'=>$genres]);
        //mostrar a vista create
    }

    public function store()
    {
        $genres = Genre::all();
        $book = new book($this->getHTTPPost());

        if($book->is_valid()){
            $book->save();
            //redirecionar para o index
            $this->redirectToRoute('book','index');
        } else {
            $this->renderView('book','create', ['book'=>$book, 'genres'=>$genres] );
            //mostrar vista create passando o modelo como parâmetro
        }
    }
    public function edit($id)
    {
        $genres = Genre::all();
        $book = book::find($id);
        if (is_null($book)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('book', 'edit', ['book'=>$book, 'genres' => $genres]);
            //mostrar a vista edit passando os dados por parâmetro
        }
    }
    public function update($id)
    {
        $book = book::find($id);
        $book->update_attributes($this-> getHTTPPost());
        if($book->is_valid()){
            $book->save();
            $this->redirectToRoute('book','index');
            //redirecionar para o index
        } else {
            $this->renderView('book', 'edit', ['book'=>$book]);
            //mostrar vista edit passando o modelo como parâmetro
        }
    }
    public function delete($id)
    {
        $book = book::find($id);
        $book->delete();
        //redirecionar para o index
        $this->redirectToRoute('book','index');
    }

}