<?php
include_once("../conexao/conexao.php");
require_once("navBar.html")
?>
<title>CADASTRO CLIENTE</title>


<div class="container" style="margin-top: 30px;margin-bottom: 0px;">
    <form action="regClienteBanco.php" method="POST"  name="cadCliente" id="cadCliente">
        <div class="jumbotron" style="width: 300px; margin: 0 auto;">
            <h1  class="title-impact text-center">CADASTRO CLIENTE</h1>
            <div style="width: 150px; margin: 0 auto">
                <label for="" style="margin-left: 60px;">Nome</label>
                <input type="text" placeholder="digite o nome" name="nome">
                <label for="" style="margin-left: 60px;" >CPF</label>
                <input type="text" placeholder="digite o CPF" name="cpf">
                <label for="" style="margin-left: 60px;" >Sexo</label>

                <select name="sexo" id="cEst" style="width: 185px" >
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                    <option value="ND" selected>Nao definido</option>
                </select>

                <div style="width:200px;display:inline;">
                    <div style="margin: 0px auto; width:50px; margin-top: 15px;">
                        <button type="submit" class="btn btn-info fa fa-thumbs-up" title="Cadastrar"></button>
                        <button type="button" class="btn btn-danger fa fa-window-close" title="Cancelar"
                            style="margin-top:15px;" onclick="javascript:location.href='listClientes.php'"></button>
                    </div>
                </div>
            </div>
        </div>



    </form>

</div>

</body>

</html>