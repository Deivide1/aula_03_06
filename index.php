<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="ISO-8859-1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>
        <script src="Js/jquery-1.11.3.js" type="text/javascript"></script>
        <script src="Js/bootstrap.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" id="input-nome" class="form-control" placeholder="Nome">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Endereço</label>
                            <div class="col-sm-10">
                                <input type="Text" id="input-endereco" class="form-control" placeholder="Endereço">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">sexo</label>
                            <div class="col-sm-10">
                                <label class="radio-inline">
                                    <input name="sexo" type="radio" value="m"> Masculino 
                                </label>
                                <label class="radio-inline">
                                    <input name="sexo" type="radio" value="f"> Feminino
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked=> Ativo
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" id="btn-enviar" class="btn btn-success">Inserir</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <script>
        $('#btn-enviar').click(function(){
          if($('#input-nome').val()==''){
              alert("Preencha Nome");
          }
          if($('#input-endereco').val()==''){
              alert("Preencha Endereço");
          }
        })
        </script>

    </body>
</html>

