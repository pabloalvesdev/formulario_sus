<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" maxlength="1" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="./components/img/icon.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="main.css">
    <title>Formulário Sus</title>
</head>
<body>
    <form action="process.php" method="POST">
        <div class="header">
            <img class="logo" src="./components/img/sus.png" alt="">
            <p class="slogan">Sistema Único de Saúde <br> Ministério da Saúde <br>  Secretaria de Estado da Saúde</p>       
        </div>
            <p class="subheader">COMPONENTE ESPECIALIZADO DA ASSITÊNCIA FARMACÊUTICA</p>
            <p class="subheader-2">LAUDO DE SOLICITAÇÃO, AVALIAÇÃO E AUTORIZAÇÃO DE MEDICAMENTO</p>
            <center><b>SOLICITAÇÃO DE MEDICAMENTO(S)</b></center>
            <div class="cont-row">
            <fieldset style="width: 58%; height: 40px"><legend style="margin-left: 10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 - Nome do paciente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</legend></fieldset>
            <fieldset style="width: 40%; height: 40px; padding-bottom: -2px">
            <legend style="width: 60px; margin-bottom: -8px !important;">2 - CNS</legend>
                <input maxlength="1" style="border: none; outline: none; text-align: center; border-right: 2px solid gray; width: 5.5%;height: 20px;" type="text">
                <input maxlength="1" style="border: none; outline: none; text-align: center; border-right: 2px solid gray; width: 5.5%; height: 20px;" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input class="field-cort" maxlength="1" type="text">
                <input style="border: none; outline: none; text-align: center; width: 5%; margin: 0px;" type="text">
            </fieldset>
            </div>
            <div class="cont-row">
            <fieldset style="width: 70%; height: 40px"><legend style="margin-left: 10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 - Nome do estabelecimento do médico solicitante&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</legend></fieldset>
            <fieldset style="width: 28%; height: 40px; padding-bottom: -2px">
            <legend style="width: 90px; margin-bottom: -8px !important;">&nbsp;&nbsp;&nbsp;4 - CNES</legend>
                <input maxlength="1" style="border: none; outline: none; text-align: center; border-right: 2px solid gray; width: 13%;height: 20px;" type="text">
                <input maxlength="1" style="border: none; outline: none; text-align: center; border-right: 2px solid gray; width: 13%; height: 20px;" type="text">
                <input class="field-cort-2" maxlength="1" type="text">
                <input class="field-cort-2" maxlength="1" type="text">
                <input class="field-cort-2" maxlength="1" type="text">
                <input class="field-cort-2" maxlength="1" type="text">
                <input maxlength="1" style="border: none; outline: none; text-align: center; width: 10%; margin: 0px; font-size: 25px" type="text">
            </fieldset>
        </div>
        <div class="table">
            <div class="table-header">
                <div class="title-header">
                    <strong>5 - Medicamento</strong>
                </div>
                <div class="crono">
                    <div style="border-bottom: 2px solid gray; width: 98.5%">
                        <center><strong>6 - Quantidade Solicitada</strong></center>
                    </div>
                    <div style="display: flex">
                        <div style="border-right: 2px solid gray; width: 33.3%; height: 110%"><center><strong>1º mês</strong></center></div>
                        <div style="border-right: 2px solid gray; width: 33.3%; height: 110%"><center><strong>2º mês</strong></center></div>
                        <div style="width: 33.3%"><center><strong>3º mês</strong></center></div>
                    </div>
                </div>
            </div>
            <div class="prescs">
                <div style="border-right: 2px solid gray; width: 3%; display: flex; justify-content: center; align-items: center">1</div>
                <div style="border-right: 2px solid gray; width: 66.7%;"></div>
                <div style="border-right: 2px solid gray; width: 9.9%;"></div>
                <div style="border-right: 2px solid gray; width: 9.8%;"></div>
            </div>
            <div class="prescs">
                <div style="border-right: 2px solid gray; width: 3%; display: flex; justify-content: center; align-items: center">2</div>
                <div style="border-right: 2px solid gray; width: 66.7%;"></div>
                <div style="border-right: 2px solid gray; width: 9.9%;"></div>
                <div style="border-right: 2px solid gray; width: 9.8%;"></div>
            </div>
            <div class="prescs">
                <div style="border-right: 2px solid gray; width: 3%; display: flex; justify-content: center; align-items: center">3</div>
                <div style="border-right: 2px solid gray; width: 66.7%;"></div>
                <div style="border-right: 2px solid gray; width: 9.9%;"></div>
                <div style="border-right: 2px solid gray; width: 9.8%;"></div>
            </div>
            <div class="prescs">
                <div style="border-right: 2px solid gray; width: 3%; display: flex; justify-content: center; align-items: center">4</div>
                <div style="border-right: 2px solid gray; width: 66.7%;"></div>
                <div style="border-right: 2px solid gray; width: 9.9%;"></div>
                <div style="border-right: 2px solid gray; width: 9.8%;"></div>
            </div>
            <div class="prescs" style="border: none !important">
                <div style="border-right: 2px solid gray; width: 3%; display: flex; justify-content: center; align-items: center">5</div>
                <div style="border-right: 2px solid gray; width: 66.7%;"></div>
                <div style="border-right: 2px solid gray; width: 9.9%;"></div>
                <div style="border-right: 2px solid gray; width: 9.8%;"></div>
            </div>
        </div>
        <center><b>JUSTIFICATIVA DO(S) MEDICAMENTO(S) SOLICITADO(S)</b></center>
        <fieldset style="width: 58%; height: 40px"><legend style="margin-left: 10px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 - Nome do paciente&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</legend></fieldset>
    </form>
</body>
</html>