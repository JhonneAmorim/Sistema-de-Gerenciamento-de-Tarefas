@extends('layouts.main')

@section('title', 'Cadastra-se')

@section('content')

<section class='container col-sm-9'>
    <form action="{{ route('registrar') }}" method="POST">
        @csrf
        <div class="m-2 mt-5 d-flex justify-content-center">
            <div class="card w-50 formulario-cadastro">
                <h2 class="text-center font-weight-bold mt-2">Cadastro de Usuário</h2>
                <div class="col-sm-12">
                    <div class="m-2 row">

                        <div class="m-2 col-12">
                            <label class="font-weight-bold">Nome:</label>
                            <input class="text-box form-control" name="name" rows="1" placeholder="Nome" required>
                        </div>

                        <div class="m-2 col-12">
                            <label class="font-weight-bold">Senha:</label>
                            <input type="password" class="text-box form-control" name="password" rows="1" placeholder="senha" required>
                        </div>

                        <div class="m-2 col-12">
                            <label class="font-weight-bold">Email:</label>
                            <input type="email" class="text-box form-control" name="email" rows="1" placeholder="email" required>
                        </div>

                        <div class="m-2 col-12">
                            <div class="d-flex justify-content-center">
                                <button class="btn button-center btn-info shadow mt-2 mb-3" value=''>
                                    <strong>Cadastrar</strong> <span class="material-icons align-middle">save</span>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>
</section>

@endsection