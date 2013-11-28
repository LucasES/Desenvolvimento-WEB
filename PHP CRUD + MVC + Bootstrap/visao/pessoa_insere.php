<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Cadastro Pessoa</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
          <style type="text/css" media="screen">
            body {
                background: #34495e;
            }
        </style>
    </head>
    <body>
        <h2 align="center" class="well">Cadastro de pessoas</h2>
        <form class="form-horizontal span3 offset5 well" action="index.php" method="POST" >
            <input type="hidden" name="controlador" value="pessoa" />
            <input type="hidden" name="acao" value="insere_processa" />
            <input type="hidden" name="id"  />
            <label for="nome" ><strong> Nome:</strong></label>
            <input id="nome" type="text" name="nome" placeholder="Lucas" required="" />
            <br/>
            <label for="fone"><strong>Telefone:</strong></label>
            <input id="fone" type="text" name="fone" placeholder="(85)-9988-5555" required="" />
            <br/>
            <label for="email"><strong>E-Mail:</strong></label>
            <input id="email" type="email" name="email" placeholder="lucas@mail.com" required=""/>
            <br/>
            <input type="hidden" name="form-enviado" value="1" />
            <input type="submit" class="btn btn-primary" value="Gravar" />
            <a href="index.php?controlador=pessoa&acao=lista" class="btn btn-primary" style="padding: 2px;width: 50px" >Voltar</a>
                    </form>

    </body>
</html>