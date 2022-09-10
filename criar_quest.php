<?php include_once("../connect/conexao.php"); ?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Criar Questões</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

  <link rel="icon" type="image/png" href="assets/img/favicon.png" /><!-- Está sendo utilizada como foto tema do sistema -->

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" /><!-- Está sendo utilizada em icones online  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" /><!-- Está sendo utilizada no layout(Essencial) -->
  <link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" /><!-- Está sendo utilizada na navegacao de paginas (cabeçario,intens,comentario)  -->

  <!-- CSS Just for demo purpose, don't include it in your project -->
</head>

<body>
  <div class="image-container set-full-height" style="background-image: url('assets/img/background-azul.jpg')">

  <?php include("menu_cdt.php"); ?><!---botão de voltar-->


      <!--   Big container   -->
      <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <!--      Wizard container        -->
                <div class="wizard-container">
                    <div class="card wizard-card" data-color="green" id="wizard">
                        <form action="" method="post" enctype="multipart/form-data">
                    <!--        You can switch " data-color="blue" "  with one of the next bright colors: "green", "orange", "red", "purple"             -->

                          <div class="wizard-header">
                              <h3 class="wizard-title">
                                Cadastro de Questões
                              </h3>
                  <h5>Cadastre questões de determinada area.</h5>
                          </div>
                <div class="wizard-navigation">
                  <ul>
                                  <li><a href="#cabecario" data-toggle="tab">Cabeçario</a></li>
                                  <li><a href="#itens" data-toggle="tab">itens</a></li>
                                  <li><a href="#comentario" data-toggle="tab">Comentário</a></li>
                              </ul>
                </div>


                            <div class="tab-content">
                            <div class="tab-pane" id="cabecario">
                                    <div class="row">
                                        <h4 class="info-text"> Digite aqui a questão.</h4>
                                        <div class="col-sm-6 col-sm-offset-1">
                                          <div class="form-group">
                                                <label>Campo de texto</label>

                                                <textarea class="form-control" name="enunciado" rows="6"></textarea>
                                            </div>


                   <label for="Cadfoto">Cadastrar foto:</label>
                  <input type="file" id="CadFoto" name="img[]">


                                        </div>



                                        <div class="col-sm-4">
                                          <div class="form-group">
                                                <label class="control-label">Exemplo</label>
                                                <p class="description">"Com a chegada da época das chuvas no Brasil, não há nada melhor do que levar as crianças para fora de casa e, com os devidos cuidados, aproveitar um delicioso e refrescante dia de chuva. Brincar na terra molhada, sentir as gotinhas na pele e, quem sabe, até ver a formação de um arco-íris: as possibilidades de se divertir são muitas. Com relação à proximidade da criança com a natureza, assinale a alternativa CORRETA."</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="itens">
                                  <div class="row">
                                    <div class="col-sm-12">
                                        <h4 class="info-text"> Digite os itens que a questão vai conter.</h4>
                                    </div>
                                      <div class="col-sm-6">
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">label_outline</i>
                          </span>
                          <div class="form-group label-floating">
                                                  <label class="control-label">Item A</label>
                                                  <input name="opc1" type="text" class="form-control">
                                              </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">label_outline</i>
                          </span>
                          <div class="form-group label-floating">
                                                  <label class="control-label">item B</label>
                                                  <input name="opc2" type="text" class="form-control">
                                              </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">label_outline</i>
                          </span>
                          <div class="form-group label-floating">
                                                  <label class="control-label">item C</label>
                                                  <input name="opc3" type="text" class="form-control">
                                              </div>
                        </div>
                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">label_outline</i>
                          </span>
                          <div class="form-group label-floating">
                                                  <label class="control-label">item D</label>
                                                  <input name="opc4" type="text" class="form-control">
                                              </div>
                        </div>

                        <div class="input-group">
                          <span class="input-group-addon">
                            <i class="material-icons">label_outline</i>
                          </span>
                          <div class="form-group label-floating">
                                                  <label class="control-label">item E</label>
                                                  <input name="opc5" type="text" class="form-control">
                                              </div>
                        </div>


                                      </div>
                                      <div class="col-sm-6">
                                          <div class="input-group">
                          <span class="input-group-addon">
                          <i class="material-icons">done</i>
                          </span>
                          <div class="form-group ">
                          <label class="control-label">Resposta Correta</label>
                         <select  class="form-control" name="respostaCorreta" >
                                                          <option  disabled="" selected=""></option>
                                                          <option value="A">Item A</option>
                                                          <option value="B">Item B</option>
                                                          <option value="C">Item C</option>
                                                          <option value="D">Item D</option>
                                                          <option value="E">Item E</option>
                            </select>
                        </div>
                        </div>




                                      </div>

                                       <div class="col-sm-6">
                                          <div class="input-group">
                          <span class="input-group-addon">
                          <i class="material-icons">done</i>
                          </span>
                          <div class="form-group ">
                          <label class="control-label">Quantidade de scores</label>
                         <select  class="form-control" name="scores" >
                                                          <option  disabled="" selected=""></option>
                                                          <option value="1">1 scores </option>
                                                          <option value="2">2 scores </option>
                                                          <option value="3">3 scores </option>
                                                          <option value="4">4 scores </option>

                            </select>
                        </div>
                        </div>




                                      </div>








                                  </div>
                                </div>
                                <div class="tab-pane" id="comentario">
                                    <h4 class="info-text">Comente aqui sobre a questão </h4>
                                     <div class="col-sm-12 ">
                                          <div class="form-group">
                                                <label>Campo de texto</label>
                                                <textarea class="ckeditor" id="edite1" name="rsp_comentada"></textarea>
                                            </div>
                                        </div>

                                </div>

                            </div>
                            <div class="wizard-footer">
                                <div class="pull-right">
                                      <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Próximo' />
                                      <input type='submit' class='btn btn-finish btn-fill btn-success btn-wd' name='Cquest' value='Finalizar' />
                                  </div>
                                  <div class="pull-left">
                                      <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Anterior' />

                                  </div>
                                  <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>


                 <?php
$usu = filter_input(INPUT_GET,'usu',FILTER_DEFAULT);
$m = filter_input(INPUT_GET,'m',FILTER_DEFAULT);
$e = filter_input(INPUT_GET,'e',FILTER_DEFAULT);
$cc = filter_input(INPUT_GET,'cc',FILTER_DEFAULT);
$nivel = filter_input(INPUT_GET,'nivel',FILTER_DEFAULT);
$materia = filter_input(INPUT_GET,'materia',FILTER_DEFAULT);
$etapa = filter_input(INPUT_GET,'etapa',FILTER_DEFAULT);
$cap = filter_input(INPUT_GET,'cap',FILTER_DEFAULT);
   if (isset($_POST['Cquest'])){
                //DECLARAÇÃO DE VARIAVEIS
    $tipo ="1";
     $status ="a";
                $enunciado = trim(strip_tags($_POST['enunciado']));
                $opc1 = trim(strip_tags($_POST['opc1']));
                $opc2 = trim(strip_tags($_POST['opc2']));
                $opc3 = trim(strip_tags($_POST['opc3']));
                $opc4 = trim(strip_tags($_POST['opc4']));
                $opc5 = trim(strip_tags($_POST['opc5']));
                $respostaCorreta = trim(strip_tags($_POST['respostaCorreta']));
                $comentario = trim(strip_tags($_POST['rsp_comentada']));
                 $scores = trim(strip_tags($_POST['scores']));

                 //INICIO DO UPLOAD


                  //INFO IMAGEM
             if (!empty($_FILES['img']['name'])) {
            $file     = $_FILES['img'];
            $numFile  = count(array_filter($file['name']));

            $folder   = 'img/questoes';//img

            //REQUISITOS
            $permite  = array('image/jpeg', 'image/png','image/jpg','image/gif');
            $maxSize  = 1024 * 1024 * 5;

            //MENSAGENS
            $msg    = array();
            $errorMsg = array(
              1 => 'O arquivo no upload é maior do que o limite definido em upload_max_filesize no php.ini.',
              2 => 'O arquivo ultrapassa o limite de tamanho em MAX_FILE_SIZE que foi especificado no formulário HTML',
              3 => 'o upload do arquivo foi feito parcialmente',
              4 => 'Não foi feito o upload do arquivo'
            );

            if($numFile <= 0){
              // echo '<div class="alert alert-danger">
              //       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              //       Selecione uma fotos para o contato!
              //     </div>';
            }
            else if($numFile >=2){
              echo '<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    Seu limite e de uma foto apenas.
                  </div>';
            }else{
              for($i = 0; $i < $numFile; $i++){
                $name   = $file['name'][$i];
                $type = $file['type'][$i];
                $size = $file['size'][$i];
                $error  = $file['error'][$i];
                $tmp  = $file['tmp_name'][$i];

                $extensao = @end(explode('.', $name));
                $novoNome = rand().".$extensao";

                if($error != 0)
                  $msg[] = "<b>$name :</b> ".$errorMsg[$error];
                else if(!in_array($type, $permite))
                  $msg[] = "<b>$name :</b> Erro imagem não suportada!";
                else if($size > $maxSize)
                  $msg[] = "<b>$name :</b> Erro imagem ultrapassa o limite de 2MB";
                else{

                  if(move_uploaded_file($tmp, $folder.'/'.$novoNome)){





                 }else
                    $msg[] = "<b>$name :</b> Desculpe! Ocorreu um erro dados não enviados...";

                }

                foreach($msg as $pop)
                echo '';

              }
            }

          }else{
            $novoNome = $foto;
          }
     //Inserindo dados
           $insert = "INSERT INTO tb_questoes
            (enunciado_quest, opc1_quest, opc2_quest, opc3_quest, opc4_quest, opc5_quest,respostaCorreta_quest, comentario_quest,disciplina_quest,etapa_quest,capitulo_quest,nivel_quest,tipo_quest,status_quest,professor_quest,foto_quest,score_quest)
              VALUES (:enunciado, :opc1, :opc2, :opc3, :opc4, :opc5,:respostaCorreta, :comentario,:disciplina,:etapa,:capitulo,:nivel,:tipo,:status,:usu,:foto,:scores)";

                try {
                    //PROTEÇÃO CONTRA SQLINJECT
                    $resultado = $conexao->prepare($insert);
                    $resultado->bindParam(':enunciado', $enunciado, PDO::PARAM_STR);
                    $resultado->bindParam(':opc1', $opc1, PDO::PARAM_STR);
                    $resultado->bindParam(':opc2', $opc2, PDO::PARAM_STR);
                    $resultado->bindParam(':opc3', $opc3, PDO::PARAM_STR);
                    $resultado->bindParam(':opc4', $opc4, PDO::PARAM_STR);
                    $resultado->bindParam(':opc5', $opc5, PDO::PARAM_STR);
                    $resultado->bindParam(':respostaCorreta', $respostaCorreta, PDO::PARAM_STR);
                    $resultado->bindParam(':comentario', $comentario, PDO::PARAM_STR);
                    $resultado->bindParam(':disciplina', $materia, PDO::PARAM_STR);
                    $resultado->bindParam(':etapa', $etapa, PDO::PARAM_STR);
                    $resultado->bindParam(':capitulo', $cap, PDO::PARAM_STR);
                    $resultado->bindParam(':nivel', $nivel, PDO::PARAM_STR);
                    $resultado->bindParam(':tipo', $tipo, PDO::PARAM_STR);
                    $resultado->bindParam(':status', $status, PDO::PARAM_STR);
                    $resultado->bindParam(':usu', $usu, PDO::PARAM_STR);
                    $resultado->bindParam(':foto',$novoNome,PDO::PARAM_STR);//img
                     $resultado->bindParam(':scores', $scores, PDO::PARAM_STR);
                    $resultado->execute();
                    //CONTAR QUANTIDADE DE REGISTROS.
                   $contar = $resultado->rowCount();
                   if ($contar > 0) {
                        echo "<center><div class='alert alert-success' role='alert'>
                           Enviado com sucesso !!!</div></center>";
                        echo "<script>setTimeout(function(){document.location='pg5.php?materia=$materia&etapa=$etapa&cap=$cap&nivel=$nivel&m=$m&e=$e&cc=$cc'},2)</script>"; }

                  } catch (PDOException $e) {
                    echo $e;
                       }


            //FIM DO uploard
            // Query SQL (comando de inserção no banco de dados);
            // os dois pontos significa atalho ;
                }


            ?>
            </div> <!-- wizard container -->
            </div>
        </div> <!-- row -->

        <footer class="footer">
            <div class="container-fluid">

                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">CEJAP</a> EQUIPE: Adriano, Emanuel, Mellyssa e Wilson.
                </p>
            </div>
        </footer>
    </div> <!--  big container -->



</body>
  <!--   Core JS Files   -->
  <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script><!-- Está sendo utilizada na navegacao de paginas (cabeçario,intens,comentario) Essencial  -->
  <script src="assets/js/bootstrap.min.js" type="text/javascript"></script><!-- Está sendo utilizada na navegacao de paginas (cabeçario,intens,comentario) Essencial  -->
  <script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script><!-- Está sendo utilizada na navegacao de paginas (cabeçario,intens,comentario) Essencial  -->


  <!--  Plugin for the Wizard -->
  <script src="assets/js/material-bootstrap-wizard.js"></script><!-- Está sendo utilizada na navegacao de paginas (cabeçario,intens,comentario) Essencial  -->

  <!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
  <script src="assets/js/jquery.validate.min.js"></script><!-- Está sendo utilizada na navegacao de paginas (cabeçario,intens,comentario) Essencial  -->
  <script src="assets/ckeditor/ckeditor.js" type="text/javascript"></script><!-- Está sendo utilizada na função do  comentario  Essencial  -->
</html>
