

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario </title>
    <link rel="icon" sizes="any" type="image/svg+xml" href="./logoce.svg">
    <link rel="stylesheet" href="../style/tabela.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <link href='icons.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
</head>
<body>
  <pre>
  <?php
  if(isset($_POST['nome'])){
    $nome=addslashes($_POST['nome']);
    $tipoFatura=addslashes($_POST['tipoFatura']);
    $cliente=addslashes($_POST['cliente']);
    $formaPagamento=addslashes($_POST['formaPagamento']);
    $localcobranca=addslashes($_POST['localcobranca']);
    $vendaFrete=addslashes($_POST['vendaFrete']);
    $tipoFrete=addslashes($_POST['tipoFrete']);
    $numeroOrcamento=addslashes($_POST['numeroOrcamento']);
    $valoVenda=addslashes($_POST['valoVenda']);
    $formaPgo=addslashes($_POST['formaPgo']);
    $parcelas=addslashes($_POST['parcelas']);
    $entregaRetira=addslashes($_POST['entregaRetira']);
    $freteConta=addslashes($_POST['freteConta']);
    $vF=addslashes($_POST['vF']);
    $entregaEndereco=addslashes($_POST['entregaEndereco']);
    $entrega=addslashes($_POST['entrega']);
    $obs=addslashes($_POST['obs']);
    print_r($nome);
    echo"</br>";
    print_r($cliente);
    echo"</br>";
    print_r($tipoFatura);
    echo"</br>";
    print_r($formaPagamento);
    echo"</br>";
    print_r($localcobranca);
    echo"</br>";
    print_r($vendaFrete);
    echo"</br>";
    print_r($tipoFrete);
    echo"</br>";
    print_r($parcelas);
    echo"</br>";
    print_r($numeroOrcamento);
    echo"</br>";
    print_r($valoVenda);
    echo"</br>";
    print_r($formaPgo);
    echo"</br>";
    print_r($entregaRetira);
    echo"</br>";
    print_r($freteConta);
    echo"</br>";
    print_r($vF);
    echo"</br>";
    print_r($entregaEndereco);
    echo"</br>";
    print_r($entrega);
    echo"</br>";
    print_r($obs);
    echo"</br>";

  }

 
  
  ?>
   </pre>
    <form action="" method="post">
    <div id="center">
   
        <h1>Solicitação de Faturamento</h1>
        <div id="item-grid">
            <div id="item1">
                <div id="collun1">
                    <div id="item1" style="width: 265px; border-radius: 5px;">
                        <label for="nome" >Vendedor</label><br>
                          <select name="nome" id="vendedor">
                              <option value="" selected disabled hidden>Vendedor</option>
                                  <option value=" " selected="selected"> </option>
                                  <option value="BETO">BETO</option>
                                  <option value="FELIPE">FELIPE</option>
                                  <option value="ALINE">ALINE</option>
                                  <option value="CRISTIAN">CRISTIAN</option>
                                  <option value="FAGUNDES">FAGUNDES</option>
                                  <option value="MARCIA">MARCIA</option>
                                  <option value="WAGNER">WAGNER</option>
                                  <option value="GELSON">GELSON</option>
                                  <option value="LUIS">LUIS</option>
                                  <option value="FERNANDO">FERNANDO</option>
                                  <option value="EDUARDO">EDUARDO</option>
                                  <option value="PV SANANDUVA">PV SANANDUVA</option>
                                  <option value="FAGUNDES">EDUARDO</option>
                                  <option value="FAVRETTO">FAVRETTO</option>
                                  <option value="FERNANDA">FERNANDA</option>
                                  <option value="GASPAR">GASPAR</option>
                                  <option value="GILIARD">GILIARD</option>
                                  <option value="GILMAR">GILMAR</option>
                                  <option value="JONATHAS">JONATHAS</option>
                                  <option value="KOZAK">KOZAK</option>
                                  <option value="LEONARDO">LEONARDO</option>
                                  <option value="SABINO">SABINO</option>
                                  <option value="ANDRE BARBOSA">ANDRE BARBOSA</option>
                          </select><br><br>
                      </div>
                      <!--======nome do clinte===========-->
                      <label for="cliente">Cliente</label><br>
                      <input name="cliente" value="cliente" id="cliente" placeholder="Digite o nome do Cliente..."><br><br>
                      <!--======tipo de fatura===========-->                 
                      <div id="tipofaturamento">
                      <label>Tipo de Faturamento </label><br>
                      <input type="radio" name="tipoFatura"  onclick="check(this, ['#localcobranca', '#entregaretira', '#valorFrete', '#entregaEndereco', '#dataAgendada', '#pgtoavista', '#bandeiracartao', '#localcobranca', '#vendafrete', '#tipofrete', '#entregaAgendada'])" id="html" name="tipoFaturamento" value="normal">
                      <label id="option">Normal</label><br>
                      <input type="radio" nema="tipoFatura"  onclick="check(this, ['#localcobranca', '#entregaretira'])" id="css" name="tipoFaturamento" value="entrega_futura">
                      <label id="option">Para Entrega Futura</label><br>
                      <input type="radio" name="tipoFatura" onclick="check(this, ['#localcobranca', '#formapgto'])" id="javascript" name="tipoFaturamento" value="remessa_materiais">
                      <label id="option">Remessa de Materiais</label>
                      <br>
                      <input type="radio" name="tipoFatura" onclick="check(this, ['#localcobranca', '#formapgto'])" id="javascript" name="tipoFaturamento" value="Bonificado">
                      <label id="option">Bonificado</label>
                      <br><br>
                    </div>
  
                    
                    <!--===========forma de pagamento=============-->
                    <div id="pgtoavista" style="display: none; z-index: -999">
                      <label>Forma de pagamento (Á vista)</label><br>
                      <input type="radio" id="html" name="formaPagamento" value="Depósito">
                      <label id="option">Depósito</label><br>
                      <input type="radio" id="html" name="formaPagamento" value="PIX">
                      <label id="option">PIX</label><br>
                      <input type="radio" id="html" name="formaPagamento" value="Dinheiro">
                      <label id="option">Dinheiro</label><br>
                      <input type="radio" id="html" name="formaPagamento" value="Pago com crédito">
                      <label id="option">Pago com crédito</label>
                    </div>
                    <!--===========PAGAMENTO COM CARTÃO=============-->
                    <div id="bandeiracartao" style="display: none; z-index: -999">
                      <label >Bandeira</label><br>
                      <input type="radio" name="bandeira" value="Visa">
                    </div>
                      <!--===========LOCAL DE COBRAÇA =============-->
                    <br><div id="localcobranca">
                      <label>Local de Cobrança </label><br>
                      <input type="radio" id="html" name="localcobranca" value="Cobrar no Local">
                      <label id="option">Cobrar no Local (Endereço de Entrega)</label><br>
                      <input type="radio" id="html" name="localcobranca" value="Cobrar na empresa">
                      <label id="option">Cobrar na Empresa (Cemear)</label><br>
                      <input type="radio" id="html" name="localcobranca" value="Pago na sala de vendas">
                      <label id="option">Pago na sala de vendas (Showroom)</label><br>
                    </div>  
  
                   
  
  <div id="vendafrete" style="display: none; z-index: -999">

  <!--============VENDA COM FRETE=============-->
    <br><label>Venda com Frete ?</label><br>
    <input type="radio" value="Nao" onclick="check(this, ['#valorFrete', '#tipofrete'])" name="vendaFrete">
    <label id="option">Não</label><br>
    
    <input type="radio" onclick="check(this, ['#valorFrete', '#tipofrete'])" value="Sim" id="html" name="vendaFrete">
    <label id="option">Sim</label>
  </div>
  <!--=============TIPO DE FRETE==========-->
  <div id="tipofrete" style="display: none; z-index: -999">
    <br><label>Tipo de frete</label><br>
    <input type="radio" name="tipoFrete" value="Destacado">
    <label id="option">Destacado</label><br>
    <input type="radio" id="html" name="tipoFrete" value="Diluído">
    <label id="option">Diluído</label><br>
  </div>
   <!--=============DATA DE ENTREGA==========-->
  <div id="entregaAgendada" style="display: none; z-index: -999">
    <label>Agendamento para</label><br>
    <input type="date" id="entregaAgendadaInput" >
  </div>
  
                </div>    
            </div>

<!--
---------------------------------------------------------------------
█████████████████████████████████████████████████████████████████████
█████████████████████████████████████████████████████████████████████
█████████████████████████████████████████████████████████████████████
█████████████████████████████████████████████████████████████████████          
---------------------------------------------------------------------
-->
          
            <div id="item1">
              <div id="collun2">
                <!---=====numero de orçamento====--->
                <label for="input">Numero de  Orçamento</label><br>
                <input id="orcamento" type="number" name="numeroOrcamento"  placeholder="Digite o número do orçamento...">
                  <br><br>
                <!--======= VALOR  VENDA========-->
                <label for="input">Valor da Venda (incluindo frete)</label><br>
                <input class="orcamento" name="valoVenda" placeholder="Digite o valor da venda" id="valordoPedido">
                <br><br>
              <!--========forma de pagam,-->
              <div id="formapgto">
                <label>Forma de Pagamento/Cobrança</label><br>
                <input type="radio"  onclick="check(this, ['#bandeiracartao', '#parcelas', '#freteConta'])" value="avista" id="html" name="formaPgo">
                <label id="option"><i class="gg-dollar" style="display: inline-block; margin-right: 8px; margin-left: 3px;"></i>Á vista</label><br>
                <input type="radio" onclick="check(this, [ '#valorFrete', '#localcobranca', '#entregaEndereco', '#dataAgendada', '#pgtoavista', '#bandeiracartao',  '#vendafrete', '#tipofrete', '#entregaAgendada', '#parcelas', '#freteConta'])" value="faturado" name="formaPgo">
                <label id="option"><i class="gg-file" style="display: inline-block; margin-right: 5px;" ></i>Faturado</label><br>  
                <input type="radio" onclick="check(this, ['#pgtoavista','#freteConta'])" value="cartao" name="formaPgo">
                <label id="option"><i class="gg-credit-card" style="display: inline-block; margin-right: 5px;"></i>Cartão</label><br>
              
                
                <input type="radio" onclick="check(this,  [ '#valorFrete', '#entregaEndereco', '#dataAgendada', '#pgtoavista', '#bandeiracartao',  '#vendafrete', '#tipofrete', '#entregaAgendada', '#localcobranca', '#parcelas', '#freteConta'])" value="semPgo" name="formaPgo">
                <label id="option"><i class="gg-block" style="display: inline-block; margin-right: 5px;"></i>Sem Pagamento</label><br>
              
                
                <input type="radio" onclick="check(this,  [ '#valorFrete', '#entregaEndereco', '#dataAgendada', '#pgtoavista', '#bandeiracartao', '#vendafrete', '#tipofrete', '#entregaAgendada', '#parcelas', '#freteConta'])" value="Deposito Programado" id="javascript" name="formaPgo">
                <label id="option"><i class="gg-sand-clock" style="display: inline-block; margin-right: 5px;"></i>Depósito Programado</label><br>
                
                <input type="radio" onclick="check(this,  ['#valorFrete', '#entregaEndereco', '#dataAgendada', '#pgtoavista', '#bandeiracartao', '#vendafrete', '#tipofrete', '#entregaAgendada', '#parcelas', '#freteConta'])" value="chequeprogramado" id="javascript" name="formaPgo">
                <label id="option"><i class="gg-inpicture" style="display: inline-block; margin-right: 5px;"></i>Cheque Programado</label><br>
                
                <input type="radio" onclick="check(this,  [ '#valorFrete', '#entregaEndereco', '#dataAgendada', '#pgtoavista', '#bandeiracartao', '#vendafrete', '#tipofrete', '#entregaAgendada', '#parcelas', '#freteConta'])" value="cartaovendas" id="javascript" name="formaPgo">
                <label id="option"><i class="gg-credit-card" style="display: inline-block; margin-right: 5px;" ></i>Cartão na sala de vendas</label><br><br>
              </div>
              
               <div id="parcelas" style="display: none; z-index: -999">
                <br>
                <!--pareceal -->
                <label>Número de parcelas:</label><br>
                <select type="number" id="Inputparcelas" name="parcelas">
                  <option>...</option>
                  <option>1x</option>
                  <option>2x</option>
                  <option>3x</option>
                  <option>4x</option>
                  <option>5x</option>
                  <option>6x</option>
                  <option>Outros</option>
                </select>
              </div>
              <br>
              
              <div id="entregaretira">
                <!--EWNTREGA OU RETIRADA NO LOJA-->
                <label>Entrega ou Retirada?</label><br>
                <input type="radio" onclick="check(this, ['#vendafrete', '#entregaEndereco','#freteConta'])" value="Entrega Imediata" name="entregaRetira">
                <label id="option">Entrega Imediata</label><br>
                
                <input type="radio" onclick="check(this, ['#valorFrete', '#entregaEndereco', '#dataAgendada', '#pgtoavista', '#bandeiracartao', '#vendafrete', '#tipofrete', '#entregaAgendada', '#freteConta'])" value="retirada" name="entregaRetira">
                <label id="option">Retirada</label><br>
                
                <input type="radio" onclick="check(this, ['#vendafrete', '#dataAgendada', '#entregaEndereco', '#freteConta'])" value="Entrega Agendada" name="entregaRetira">
                <label id="option">Entrega Agendada</label><br>
                
                <input type="radio" onclick="check(this, ['#vendafrete', '#entregaEndereco','#dataAgendada','#entregaAgendada'])" value="transportadora" name="entregaRetira">
                <label id="option">Transportadora</label>
              </div>
              
               <div id="freteConta" style="display: none; z-index: -999">
                <br>
                <!--FRETE POR CONTA-->
                <label>Frete por conta:</label><br>
                <input type="radio" id="html" name="freteConta" value="Cliente">
                <label id="option">Cliente</label><br>
                <input type="radio" id="html" name="freteConta" value="Cemear">
                <label id="option">Cemear</label><br>
              </div>
              
                <!--VF-->                 
              <div id="valorFrete" style="display: none; z-index: -999">
                <br><label for="vF">Valor do Frete</label><br>
                <input id="valorFreteInput" name="vF" class="valorfrete" ><br>
              </div>
              
              <div id="entregaEndereco" style="display: none; z-index: -999">
                <br> 
                <!--ENDERÇO ENTREGA -->
                <label>Entrega no Endereço do Cadastro</label><br>
                <input type="radio" id="html" name="entregaEndereco" value="Não">
                <label id="option">Não</label><br>
                <input type="radio" id="html" name="entregaEndereco" value="Sim">
                <label id="option">Sim</label><br>
              </div>
              
                 <div id="dataAgendada" style="display: none; z-index: -999">
                    <label>Foi agendado uma data?</label><br>
                    <input type="radio" value="naoAgendado" onclick="check(this, ['#entregaAgendada'])" id="html" name="entrega">
                    <label id="option">Não - Aguardar Vendedor</label><br>
                    <input type="radio" value="entregaAgendada" onclick="check(this, ['#entregaAgendada'])" id="html" name="entrega">
                    <label id="option" >Sim - Preencher agenda</label><br>
                  </div>
                </div>  
            </div>

          
          <div id="obs">
            <div class="a">
                <label id="obs">Observação</label><br>
                <input name="obs" id="obsinput">
              <button type="submit"> <p style="text-align: center;"><a onclick="enviar()" style="text-decoration: none; color:#145b88; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-left: 70%; padding: 15px; background: #058FED; border-radius: 5px;">ENVIAR</a></p></button>
               
            </div>
          </div>
        </div>
      </div> 
    </form>
    <script>
        function check(input, ocult) {
          for(let i = 0; i <= ocult.length -1; i++) {
          switch(input.value) {
            case "entrega_futura":
              document.querySelector("#formapgto").style.display = "block"
              document.querySelector("#formapgto").style.zIndex = "1"
              document.querySelector(ocult[i]).value = ""
              document.querySelector(ocult[i]).style.display = "none"
              document.querySelector(ocult[i]).style.zIndex = "-999"
              break

            case "Bonificado":
            case "remessa_materiais":
              document.querySelector("#entregaretira").style.display = "block"
              document.querySelector("#entregaretira").style.zIndex = "1"
              document.querySelector(ocult[i]).value = ""
              document.querySelector(ocult[i]).style.display = "none"
              document.querySelector(ocult[i]).style.zIndex = "-999"
              break
              
            case "normal":
              document.querySelector(ocult[i]).value = ""
              document.querySelector(ocult[i]).style.display = "none"
              document.querySelector(ocult[i]).style.zIndex = "-999"
              document.querySelector("#formapgto").style.display = "block"
              document.querySelector("#formapgto").style.zIndex = "1"
              
              document.querySelector("#localcobranca").style.display = "block"
              document.querySelector("#localcobranca").style.zIndex = "1"

              document.querySelector("#entregaretira").style.display = "block"
              document.querySelector("#entregaretira").style.zIndex = "1"
              break
              
            case "avista": 
              document.querySelector(ocult[i]).value = ""
              document.querySelector("#pgtoavista").style.display = "block"
              document.querySelector("#pgtoavista").style.zIndex = "1"
              document.querySelector(ocult[i]).value = null
              document.querySelector(ocult[i]).style.display = "none"
              document.querySelector(ocult[i]).style.zIndex = "-999"
              break

            
            case "cartao": 
              document.querySelector("#bandeiracartao").style.display = "block"
              document.querySelector("#bandeiracartao").style.zIndex = "1"
              document.querySelector("#parcelas").style.display = "block"
              document.querySelector("#parcelas").style.zIndex = "1"
              document.querySelector(ocult[i]).value = ""
              document.querySelector(ocult[i]).style.display = "none"
              document.querySelector(ocult[i]).style.zIndex = "-999"
              break
              
            case "defaultFPgo":
              document.querySelector(ocult[i]).value = ""
              document.querySelector("#pgtoavista").style.display = "none"
              document.querySelector("#pgtoavista").style.zIndex = "-999"
              break

            case "transportadora":
              document.querySelector(ocult[i]).value = ""
              document.querySelector(ocult[i]).style.display = "none"
              document.querySelector(ocult[i]).style.zIndex = "-999"
              document.querySelector("#freteConta").style.display = "block"
              document.querySelector("#freteConta").style.zIndex = "1"
            break
              
            case "Deposito Programado":
            case "faturado":
            case "Nao":
            case "depositoprogramado":
            case "chequeprogramado":
            case "cartaovendas":
            case "retirada":
            case "semPgo":
              document.querySelector(ocult[i]).value = ""
              document.querySelector(ocult[i]).style.display = "none"
              document.querySelector(ocult[i]).style.zIndex = "-999"
              break

            
            case "Entrega Imediata":
              document.querySelector(ocult[i]).style.display = "block"
              document.querySelector(ocult[i]).style.zIndex = "1"
              document.querySelector("#freteConta").style.display = "none"
              document.querySelector("#freteConta").style.zIndex = "-999"
              break
              
            case "Entrega Agendada":
              document.querySelector(ocult[i]).style.display = "block"
              document.querySelector(ocult[i]).style.zIndex = "1"
              document.querySelector("#freteConta").style.display = "none"
              document.querySelector("#freteConta").style.zIndex = "-999"
              break
              
            case "Sim": 
            case "entregaAgendada": 
              document.querySelector(ocult[i]).style.display = "block"
              document.querySelector(ocult[i]).style.zIndex = "1"
              break
              
            case "defaultREntrega":
              document.querySelector(ocult[i]).value = ""
              document.querySelector(ocult[i]).style.display = "none"
              document.querySelector(ocult[i]).style.zIndex = "-999"
              break
              
          }
        }
      }
    </script>
    <script>
        $(function() {
            $('.orcamento').maskMoney();
            $('.valorfrete').maskMoney();

          
        })
    </script>
    <script>
      let textInfo = "..."
      let obj={}
      function enviar() {
        let pegar = "<%= pegar %>"
        obj = {
          numeronf: "...",
          exped : pegar,       
          quemrecebeu: "...",
          vendedor:  document.querySelector("#vendedor").value,
          nropedido:
document.querySelector("#orcamento").value,
          cliente:  document.querySelector("#cliente").value,
          valordopedido:  document.querySelector('#valordoPedido').value,
          tipodefaturamento:  document.querySelector('input[name="tipoFaturamento"]:checked').value,
          formapgto:  document.querySelector('input[name="formaPgo"]:checked') == null ? textInfo : formaPagamentoVerificação(),
          vendafrete: document.querySelector('input[name="vendaFrete"]:checked') == null ? textInfo : document.querySelector('input[name="vendaFrete"]:checked').value,
          retiraentrega: document.querySelector('input[name="entregaretira"]:checked') == null ? textInfo : document.querySelector('input[name="entregaretira"]:checked').value,
          
          localdaentrega: document.querySelector('input[name="entregaEndereco"]:checked') == null ? textInfo : document.querySelector('input[name="entregaEndereco"]:checked').value,
          
          localdecobranca: document.querySelector('input[name="localcobranca"]:checked') == null ? textInfo : document.querySelector('input[name="localcobranca"]:checked').value,
          
          obs: document.querySelector("#obsinput").value == '' ? "nenhuma observação" : document.querySelector("#obsinput").value,
          fretedestacado: document.querySelector('input[name="tipofrete"]:checked') == null ? textInfo : document.querySelector('input[name="tipofrete"]:checked').value,
          valorfrete: document.querySelector('#valorFreteInput') == null ? textInfo : document.querySelector('#valorFreteInput').value,
          
          dataentrega: document.querySelector("#entregaAgendadaInput").value == null ? textInfo : document.querySelector("#entregaAgendadaInput").value,
          operadornf: "...",
          statusnf: "PENDENTE",
          obsfinanceiro: "...",
          
          freteconta: document.querySelector('input[name="freteConta"]:checked') == null ? textInfo : document.querySelector('input[name="freteConta"]:checked').value,
          
          parcelas: document.querySelector('#Inputparcelas') == null ? textInfo : document.querySelector('#Inputparcelas').value
          
          }
          
          
        
  
        fetch('https://projeto.andersonhenri15.repl.co/registrarBancoDados', {
    method: "POST",
    body: JSON.stringify(obj, null, 2),
    headers: {"Content-type": "text/plain; charset=UTF-8",
             "Sector": pegar}
  })
  .then(function(res){ return res.json() })
  .then(function(data){ 
    alert( data.msg ) 
    window.location.reload();

  })
      }

      
      function formaPagamentoVerificação() {
  switch(document.querySelector('input[name="formaPgo"]:checked').value) {
        case "avista":
      return document.querySelector('input[name="formaPagamento"]:checked').value
        break
        case "cartao":
          return document.querySelector('input[name="bandeira"]:checked').value
        break
        default:
          return document.querySelector('input[name="formaPgo"]:checked').value
        }
      }
    </script>
  </body>
</html>