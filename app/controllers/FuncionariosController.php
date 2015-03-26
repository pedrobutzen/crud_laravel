<?php

class FuncionariosController extends BaseController {

    protected $funcionario;

    public function __construct(Funcionario $funcionario) {
        parent::__construct();
        $this->funcionario = $funcionario;
    }

    public function index() {
        $sort = Input::get('sort') === null ? 'nome' : Input::get('sort');
        $order = Input::get('order') === 'desc' ? 'desc' : 'asc';

        $funcionarios = $this->funcionario->orderBy($sort, $order);

        $funcionarios = $funcionarios->paginate(5);

        $paginacao = $funcionarios->appends(array(
                    'sort' => Input::get('sort'),
                    'order' => Input::get('order'),
                ))->links();

        return View::make('funcionarios.index')
                        ->with(array(
                            'funcionarios' => $funcionarios,
                            'paginacao' => $paginacao,
                            'order_url' => 'order=' . (Input::get('order') == 'asc' || null ? 'desc' : 'asc')
        ));
    }

    public function create() {
        //
    }

    public function store() {
        //
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        //
    }

    public function update($id) {
        //
    }

    public function destroy($id) {
        //
    }

}
