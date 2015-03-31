<?php

class LoginController extends BaseController {

    protected $rules = array(
        'email' => 'required|email|max:128',
        'password' => 'required'
    );

    public function checkUser() {
        $dados_input = Input::all();

        $validation = Validator::make($dados_input, $this->rules);

        if ($validation->passes()) {
            $dados_usuario = array(
                'email' => $dados_input['email'],
                'password' => $dados_input['password']
            );

            if (Auth::attempt($dados_usuario)) {
                return Redirect::to('/');
            } else {
                return Redirect::back()
                                ->withInput()
                                ->with('message', 'E-mail ou senha incorretos.');
            }
        }
        return Redirect::back()
                        ->withInput()
                        ->withErrors($validation)
                        ->with('message', 'Preencha todos os campos corretamente.');
    }

}
