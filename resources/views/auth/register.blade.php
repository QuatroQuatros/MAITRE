@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<img src="/img/cadastro.png" style="width: 100%;" alt="">

    <section id="contact" class="contact">

        <div class="container mt-5">
            <form action="/register" method="post" role="form" class="php-email-form">

                <div class="section-title">
                    <h2>Dados de <span>Acesso</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 form-group ">
                        <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}"
                            placeholder="Seu e-mail" data-rule="email"
                            data-msg="Por favor, coloque um e-mail válido" require="@Email @Required">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group ">
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha"
                            require="@Password @Required">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-5 form-group mt-3 mt-md-0">
                        <input type="password" class="form-control" name="senha" id="senha"
                            placeholder="Confirmar senha" require="@Password @Required">
                        <div class="validate"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                        <h5>Opções de cadastro</h5>
                        <select placeholder="opção de cadastro" class="form-control" id="select" name="select">
                            <option select value="divUsuario">Cadastro de cliente</option>
                            <option select value="divRestaurante">Cadastro de dono restaurante</option>
                        </select>
                        <div class="validate"></div>
                    </div>
                </div>

                <div id="pai">
                    <div class="row" id="divUsuario">
                        <div class="section-title">
                            <h2>Dados de <span>Pessoais</span></h2>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Nome completo" data-rule="minlen:3"
                                data-msg="Por favor, coloque um nome válido" require="@Required">
                            <div class="validate"></div>
                        </div>

                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="phone" id="phone"
                                placeholder="Seu telefone" data-rule="minlen:4" data-msg="Númereo inválido"
                                require="@Numeric">
                            <div class="validate"></div>
                        </div>
                        <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="Seu CPF "
                                require="@CPF">
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="res" id="divRestaurante">
                        <div class="section-title">
                            <h2>Dados <span>pessoais</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Nome completo" data-rule="minlen:3"
                                    data-msg="Por favor, coloque um nome válido" require="@Required">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="phone" id="phone"
                                    placeholder="Seu telefone" data-rule="minlen:4" data-msg="Númereo inválido"
                                    require="@Numeric">
                                <div class="validate"></div>
                            </div>
                            <?php ?>
                            <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                                <input type="text" class="form-control" name="cpf" id="cpf"
                                    placeholder="Seu CPF">
                                <div class="validate"></div>
                            </div>
                        </div>
                        <div class="section-title">
                            <h2>Dados do <span>Restaurante</span></h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <input type="text" name="nomeRestaurante" class="form-control"
                                    id="nomeRestaurante" placeholder="Nome do Seu Restaurante"
                                    data-rule="minlen:4">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <input type="text" name="cep" class="form-control" id="cep"
                                    placeholder="CEP do Restaurante">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <input type="text" class="form-control" name="bairro" id="bairro"
                                    placeholder="Bairro do Restaurante">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <input type="text" class="form-control" name="cidade" id="cidade"
                                    placeholder="Cidade do Restaurante">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <input type="text" class="form-control" name="rua" id="rua"
                                    placeholder="Endereço do Restaurante">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <input type="text" class="form-control" id="numeroRestaurante"
                                    name="numeroRestaurante" placeholder="Número do Restaurante">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <h7>telefone de contato do restaurante</h7>
                                <input type="text" class="form-control" name="telRestaurante"
                                    id="telRestaurante" placeholder="telefone do Restaurante">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <h7>Foto do Cardapio</h7>
                                <input type="file" class="form-control" name="cardapio" id="cardapio"
                                    placeholder="Insira seu cardápio">
                                <div class="validate"></div>
                            </div>
                            <div class="col-lg-4 col-md-6 form-group mt-3">
                                <h7>Foto do Restaurante</h7>
                                <input type="file" class="form-control" name="fotoRestaurante"
                                    id="fotoRestaurante" placeholder="Coloque a foto do seu Restaurante">
                                <div class="validate"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center" style="margin-top: 1em;"><button type="submit">Cadastrar-se</button>
                </div>
                <p>
                    Já possui uma conta?<a href="login.php"> Faça login</a></p>
            </form>
        </div>
    </section><!-- End Contact Section -->
@endsection