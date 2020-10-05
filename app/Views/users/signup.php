<div class="col-xl-4 col-md-6 mx-auto p-5">
    <div class="card">
        <div class="card-body">
            <h2>Cadastre-se</h2>
            <small>Preencha o formulário e efetue o seu cadastro =)</small>
            <form action="<?php echo URL; ?>users/signup" method="POST" name="signup" class="mt-4">
                <div class="form-group">
                    <label for="name">Nome: <sup class="text-danger">*</sup></label>
                    <input type="text" 
                    class="form-control" 
                    id="name" autocomplete="off"
                     required />
                </div>
                <div class="form-group">
                    <label for="email">Email: <sup class="text-danger">*</sup></label>
                    <input type="email" 
                    class="form-control" 
                    id="email" autocomplete="off"
                     required />
                </div>
                <div class="form-group">
                    <label for="password">Senha: <sup class="text-danger">*</sup></label>
                    <input type="password" class="form-control" id="password" required />
                </div>
                <div class="form-group">
                    <label for="confirm">Confirmar senha: <sup class="text-danger">*</sup></label>
                    <input type="password" class="form-control" id="confirm" required />
                </div>
                <div class="row">
                    <div class="col">
                        <input type="submit" value="Cadastrar" class="btn btn-success btn-block">
                    </div>
                    <div>
                        <a  href="#">Você tem uma conta? Faça o login.</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>