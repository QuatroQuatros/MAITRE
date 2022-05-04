@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<img src="/img/bem.jpg" style="width: 100%; object-fit: cover;" alt="">
    <section id="book-a-table" class="book-a-table">
        <div class="container">

            <form action="/login" method="post" role="form" class="php-email-form">
                @csrf

                @if ($errors->any())
                <span class="error">
                    <p>Email ou senha invalidos</p>
                </span>
                    
                @endif
                <div class="col">
                    <div class="col-lg-5 col-md-7 form-group  mt-5 mt-md-3">
                        <input type="email" class="form-control" name="email" id="email" placeholder="E-mail"
                            style="height: 60px;" data-rule="email" value='{{old('email')}}'
                            data-msg="Por favor, coloque um e-mail válido" require="@Email @Required">
                        <div class="validate"></div>
                    </div>

                    <div class="col-lg-5 col-md-7 form-group mt-5 mt-md-3">
                        <input type="password" class="form-control" name="password" id="senha" placeholder="Senha"
                            style="height: 60px;" require="@Password @Required">
                        <div class="validate"></div>
                    </div>
                </div>
                <center>
                    <ul class="confirmacoes">
                        <li>
                            <div>
                                <input type="checkbox">
                            </div>
                            <label>Mantenha-me conectado.</label>
                        </li>
                    </ul>
                </center>
                <div class="text-center"><button type="submit">Entrar!</button></div>
                <div class="info-p">
                    <br>
                    <p>Ainda não possui uma conta?<a href="/register"> Cadastre-se</a></p>
                </div>
            </form>

        </div>
    </section>

@endsection