<?php
require_once 'Controller.php';
require_once 'models/Book.php';
class ChapterController extends Controller
{
    public function index($id){
        $book = book::find($id);
        $this->renderView('chapter', 'index', ['book' =>
            $book]);
    }
    public function create($id){
        $book = book::find($id);
        $this->renderView('chapter','create', ['id'=>$book->id]);
    }
    public function store()
    {
        $chapter = new Chapter($this->getHTTPPost());
        if ($chapter->is_valid()) {
            $chapter->save();
            $this->redirectToRoute('chapter', 'index', ['id' => $chapter->book_id]);
        } else {
            $this->renderView('chapter', 'create', ['chapter' => $chapter]);
        }
    }
    public function edit($id){
            $chapter = chapter::find($id);
            $this->renderView('chapter','edit', ['chapter' => $chapter]);
        }

    public function update($id)  {
        $chapter = chapter::find($id);
        $chapter->update_attributes($this->getHTTPPost());
        if($chapter->is_valid()){
            $chapter->save();
            $this->redirectToRoute('chapter','index', ['id'=>$chapter->book_id]);
        } else{
            $this->renderView('chapter','create',['chapter'=>$chapter]);
        }
    }
}