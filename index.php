<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/contrato.css">
  <link rel="stylesheet" type="text/css" href="css/load.css">
  <title>Contrato de Adesão Trevo Filmes</title>
</head>
<body>
  <div id="modal" style="display: none;">
    <div id="header">
      <h2>Aviso</h2>
    </div>
    <p></p>
    <button type="button" id="ok">Ok</button>
  </div>
  <div id="mask" style="display: none;"></div>
  <div id="load" style="display: none;">
    <div class='uil-default-css' style='transform:scale(0.27);'><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(0deg) translate(0,-60px);transform:rotate(0deg) translate(0,-60px);border-radius:10px;position:absolute;'></div><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(30deg) translate(0,-60px);transform:rotate(30deg) translate(0,-60px);border-radius:10px;position:absolute;'></div><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(60deg) translate(0,-60px);transform:rotate(60deg) translate(0,-60px);border-radius:10px;position:absolute;'></div><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(90deg) translate(0,-60px);transform:rotate(90deg) translate(0,-60px);border-radius:10px;position:absolute;'></div><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(120deg) translate(0,-60px);transform:rotate(120deg) translate(0,-60px);border-radius:10px;position:absolute;'></div><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(150deg) translate(0,-60px);transform:rotate(150deg) translate(0,-60px);border-radius:10px;position:absolute;'></div><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(180deg) translate(0,-60px);transform:rotate(180deg) translate(0,-60px);border-radius:10px;position:absolute;'></div><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(210deg) translate(0,-60px);transform:rotate(210deg) translate(0,-60px);border-radius:10px;position:absolute;'></div><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(240deg) translate(0,-60px);transform:rotate(240deg) translate(0,-60px);border-radius:10px;position:absolute;'></div><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(270deg) translate(0,-60px);transform:rotate(270deg) translate(0,-60px);border-radius:10px;position:absolute;'></div><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(300deg) translate(0,-60px);transform:rotate(300deg) translate(0,-60px);border-radius:10px;position:absolute;'></div><div style='top:80px;left:93px;width:14px;height:40px;background:#00b2ff;-webkit-transform:rotate(330deg) translate(0,-60px);transform:rotate(330deg) translate(0,-60px);border-radius:10px;position:absolute;'></div></div>
  </div>
  <header>
    <div id="logo">
     <img src="img/logo-curvas_horizintal.png" style="width: 200px; height: 34px;">
   </div>
   <div class="green-line"></div>
   <p class=MsoNormal align=center style='margin:0cm;margin-bottom:.0001pt;
   text-align:center;text-indent:0cm;line-height:114%'><b style='mso-bidi-font-weight:
   normal'><span style='font-size:16.0pt;line-height:114%'><o:p>&nbsp;</o:p></span></b></p>

   <p class=MsoNormal align=center style='margin:0cm;margin-bottom:.0001pt;
   text-align:center;text-indent:0cm;line-height:114%'><b style='mso-bidi-font-weight:
   normal'><span style='font-size:16.0pt;line-height:114%'>Instrumento Particular
   de Contrato de Adesão de<o:p></o:p></span></b></p>
   <p class=MsoNormal align=center style='margin:0cm;margin-bottom:.0001pt;
   text-align:center;text-indent:0cm;line-height:114%'><b style='mso-bidi-font-weight:
   normal'><span style='font-size:16.0pt;line-height:114%'>Prestação de Serviço Profissionais
   de vídeo<o:p></o:p></span></b></p>
 </header>
 <section>
  <article id="contrato">
    <?php include("contrato.php"); ?>
  </article>
  <article id="form">
   <form target="_blank" method="POST" action="generate-pdf.php" enctype="multipart/form-data">
    <fieldset>
     <legend>Leia o contrato e preencha os dados:</legend>
     <label>Contratante:</label> <input class="input-width" type="text" ng-model="contratante" name="contratante" required="true"></input> <br>
     Identidade: <input type="number" name="id" required="true"></input>
     Expedida: <input type="text" name="expedida" required="true"></input> <br>
     <label>Endereço:</label> <input class="input-width" name="endereco" type="text" required="true"></input>
   </fieldset>

   <fieldset>
     <label>Nome aniversariante:</label> <input class="input-width" type="text" name="aniversariante" required="true"></input> <br>
     <label>Local/endereço da festa:</label> <input class="input-width" name="local-festa" type="text" required="true"></input> <br>
     Data da festa: <input type="date" title="dd/mm/AAAA" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" maxlength="10" name="data-festa" required="true"></input> <br>
     Horario: <input type="time" title="00:00" name="horario" required="required" maxlength="5" pattern="[0-9]{2}:[0-9]{2}$"></input>
     de <input type="time" name="de" title="00:00" required="treu" maxlength="5" pattern="[0-9]{2}:[0-9]{2}$"></input>
   </fieldset>

   <fieldset>
     <legend>Informações de pacote:</legend>
     <input type="radio" name="pacote" class="valores" value="1" checked> Pacote Bronze
     <input type="radio" name="pacote" class="valores" value="2"> Pacote Prata
     <input type="radio" name="pacote" class="valores" value="3"> Pacote Ouro

     <legend>Opcionais</legend>
     <input type="checkbox" class="valores" name="opcinal[]" value="DVD extra"> DVD extra
     <input type="checkbox" class="valores" name="opcinal[]" value="Bluray"> Bluray
     <input type="checkbox" class="valores" name="opcinal[]" value="Pen card"> Pen card
   </fieldset>

   <fieldset>
     <legend>Valor e pagamento:</legend>
     Total: R$<input type="price" readonly="readonly" value="690.00" name="total" required="true"></input> <br>
     <input type="radio" name="pagamento"  value="á vista 5% de desconto" checked> á vista 5% de desconto <span id="a_vista">R$: 655.5</span><br>
     <input type="radio" name="pagamento" value="2x (1º reserva da data; 2º no dia da festa)"> 2x (1º reserva da data; 2º no dia da festa) <br>
     <input type="radio" name="pagamento" value="3x (1º reserva data; 2º cheque no dia da festa; 3º cheque 30 dias)"> 3x (1º reserva data; 2º cheque no dia da festa; 3º cheque 30 dias)<br>
     <input type="radio" name="pagamento" value="Cartão"> Cartão<br>
   </fieldset>

   <fieldset>
     <legend>Disposições gerais e autorização de uso de imagem:</legend>
     <input type="radio" name="autorizacao" value="1" checked> autorizo <br>
     <input type="radio" name="autorizacao" value="2"> não autorizo <br>
     <p>
      a utilização de sua imagem pela CONTRATADA em seu potfólio (site, fan page, blog) <u>exclusivamente</u> para fins de divulgação de seu trabalho.
    </p>
    <br><br>
    <input type="checkbox" required="true" name="aceito" value="aceito">Li e estou ciente e de acordo com todas as cláusulas desse contrato. Este é um contrato de adesão após o pagamento atesta meu acordo.</input>
    <br>
  </fieldset>
  E-mail: <input type="email" required="true" name="email"></input>
  <button id="gerar-pdf" type="submit">Gerar e enviar contrato</button>
</form>
</article>
</section>
<footer>
	<div class="green-line"></div>
	<p>trevofilmes.com.br | contato@trevofilmes.com.br</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript">
   $(document).ready(function(){
    // submit formulario
    $("form").submit(function(e){
      $("form > button").attr("disabled", true);
      e.preventDefault();
      $.ajax({
        url: "gerar-pdf.php",
        type: "POST",
        dataType: "HTML",
        beforeSend: function(){
         $("body").css("overflow", "hidden");
         $("#mask").show();
         $("#load").show();
         load("#load");
       },
       data: $("form").serialize(),
       success: function(data){
        $("#load").hide();
        open_modal("#modal", data);
        $("#ok").click(function(){
          $("#modal").hide();
          $("#mask").hide();
          $("body").css("overflow", "auto");
          $("form > button").attr("disabled", false);
        });
      },
      error: function(data){
        $("#load").hide();
        open_modal("#modal", "Ocorreu algum erro de conexão ;( Tente novamente");
        $("#ok").click(function(){
          $("#modal").hide();
          $("#mask").hide();
          $("body").css("overflow", "auto");
          $("form > button").attr("disabled", false);
        });
        console.log(data);
      }
    });
    });
    // largura dos input
    function input_width(form){
      $("input").each(function(){
        var label = $(this).prev().width();
        var formulario = $(form).width();
        var width = formulario - (label + 25)+"px";
        $(this).css("max-width", width);
      });
    }

    input_width("form");
    


    // calcular valor total a partir dos pacotes
    var valor = 0;
    var valor2 = 690.00;

    $(".valores").change(function(){

      if($(this).val() == 1){
        valor2 = 690.00;
      }else if($(this).val() == 2){
        valor2 = 980.00;
      }else if($(this).val() == 3){
        valor2 = 1200.00;        }

        if($(this).attr("type") == "checkbox"){
          if($(this).is(":checked")){
            if($(this).val() == "DVD extra"){
              valor = valor + 30.00;
            }else if($(this).val() == "Bluray"){
              valor = valor + 50.00;
            }else if($(this).val() == "Pen card"){
              valor = valor + 60.00;
            }
          }else{
            if($(this).val() == "DVD extra"){
              valor = valor - 30.00;
            }else if($(this).val() == "Bluray"){
              valor = valor - 50.00;
            }else if($(this).val() == "Pen card"){
              valor = valor - 60.00;
            }
          }
        }
        $("input[name='total']").val(valor2 + valor);
        var vista = (valor2 + valor) - (((valor2 + valor) * 5) / 100);
        $("#a_vista").html("R$: "+vista);
      });

    // centralizar load e criar marcara de fundo
    function load(load){
      var left = ($(document).width() /2) - ( $(load).width() / 2 );
      var top = ($(document).height() / 1.5) - ( $(load).height() / 2 );
      $(load).css({'top':top,'left':left});
      var alturaTela = $(document).height();
      var larguraTela = $(window).width();

        //colocando o fundo preto
        $('#mask').css({'width':larguraTela,'height':alturaTela});
        $('#mask').fadeIn(1000); 
        $('#mask').fadeTo("slow",0.8);
      }

      // abir, centralizar modal e adicionar texto
      function open_modal(modal, datas){
        var leftModal = ($(document).width() /2) - ( $(modal).width() / 2 );
        var topModal = ($(document).height() / 1.5) - ( $(modal).height() / 2 );
        $(modal).css({'top':topModal,'left':leftModal});
        $(modal + "> p").html(datas);
        $(modal).show();
      }
    });
  </script>
</body>
</html>
