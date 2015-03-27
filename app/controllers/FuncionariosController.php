<?php

class FuncionariosController extends BaseController {

    protected $funcionario;
    protected $rules = array(
        'nome' => 'required',
        'email' => 'required|email',
        'setor' => 'required',
        'cargo' => 'required'
    );

    public function __construct(Funcionario $funcionario) {
        parent::__construct();
        $this->funcionario = $funcionario;
    }

    public function index() {

        $sort = Input::get('sort') === NULL ? 'nome' : Input::get('sort');
        $order = Input::get('order') === NULL ? 'asc' : Input::get('order');
        $filtro_url = $field_filtro_url = NULL;

        $filter_multiple = Input::has('col') ? Input::get('col') : array('nome');

        $funcionarios = $this->funcionario->orderBy($sort, $order);

        if (Input::has('filtro')) {
            $funcionarios = $funcionarios->where($filter_multiple[0], 'LIKE', "%" . Input::get('filtro') . "%");
            $field_filtro_url = '&col=' . $filter_multiple[0];
            if (count($filter_multiple) > 1) {
                for ($i = 1; $i < count($filter_multiple); $i++) {
                    $funcionarios = $funcionarios->orWhere($filter_multiple[$i], 'LIKE', "%" . Input::get('filtro') . "%");
                    $field_filtro_url .= '&col=' . $filter_multiple[$i];
                }
            }

            $filtro_url = '&filtro=' . Input::get('filtro');
        }

        $funcionarios = $funcionarios->paginate(5);

        $paginacao = $funcionarios->appends(array(
                    'sort' => Input::get('sort'),
                    'order' => Input::get('order'),
                    'filtro' => Input::get('filtro'),
                    'col' => Input::get('col')
                ))->links();

        return View::make('funcionarios.index')
                        ->with(array(
                            'filtro' => Input::get('filtro'),
                            'filter_multiple' => $filter_multiple,
                            'funcionarios' => $funcionarios,
                            'paginacao' => $paginacao,
                            'url' => 'order=' . (Input::get('order') == 'asc' || NULL ? 'desc' : 'asc') . $filtro_url . $field_filtro_url
        ));
    }

    public function create() {
        return View::make('funcionarios.create');
    }

    public function store() {
        $dados_input = Input::all();
        $validation = Validator::make($dados_input, $this->rules);

        if ($validation->passes()) {
            Funcionario::create($dados_input);
            return Redirect::to('funcionarios')->with('message', 'Registro criado com sucesso!');
        }
        return Redirect::back()
                        ->withInput()
                        ->withErrors($validation)
                        ->with('message', 'Erro! Preencha todos os campos corretamente.');
    }

    public function show($id) {
        //
    }

    public function edit($id) {
        $funcionario = Funcionario::find($id);

        return View::make('funcionarios.edit')
                        ->with('funcionario', $funcionario);
    }

    public function update($id) {
        $dados_input = Input::all();
        $dados_input['id'] = $id;
        $validation = Validator::make($dados_input, $this->rules);

        if ($validation->passes()) {
            Funcionario::find($id)->update($dados_input);
            return Redirect::to('funcionarios')->with('message', 'Registro alterado com sucesso!');
        }
        return Redirect::back()
                        ->withInput()
                        ->withErrors($validation)
                        ->with('message', 'Preencha todos os campos corretamente.');
    }

    public function destroy($id) {
        try {
            Funcionario::find($id)->delete();
            return Redirect::to('funcionarios');
        } catch (Exception $e) {
            var_dump($e);
        }
    }

}
