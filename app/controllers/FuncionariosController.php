<?php

class FuncionariosController extends BaseController {

    protected $funcionario;

    public function __construct(Funcionario $funcionario) {
        parent::__construct();
        $this->funcionario = $funcionario;
    }

    public function index() {
        $hahah = '';
        $filter_multiple = Input::has('col') ? Input::get('col') : 'nome';

        if ($filter_multiple !== 'nome') {
            $filter_multiple = Input::get('col');
            foreach (Input::get('col') as $selected_id) {
                $hahah .= ' ' . $selected_id;
            }
        }

        $sort = Input::get('sort') === NULL ? 'nome' : Input::get('sort');
        $order = Input::get('order') === NULL ? 'asc' : Input::get('order');
        $filtro = NULL;

        $funcionarios = $this->funcionario->orderBy($sort, $order);

        if (Input::has('filtro')) {
            $funcionarios = $funcionarios->where('nome', 'LIKE', "%" . Input::get('filtro') . "%");
            $filtro = '&filtro=' . Input::get('filtro');
        }

        $funcionarios = $funcionarios->paginate(20);

        $paginacao = $funcionarios->appends(array(
                    'sort' => Input::get('sort'),
                    'order' => Input::get('order'),
                ))->links();

        return View::make('funcionarios.index')
                        ->with(array(
                            'filtro' => $hahah,
                            'filter_multiple' => $filter_multiple,
                            'funcionarios' => $funcionarios,
                            'paginacao' => $paginacao,
                            'order_url' => 'order=' . (Input::get('order') == 'asc' || NULL ? 'desc' : 'asc') . $filtro
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
