<?php
/* Carrega a classe DOMPdf */
require_once("dompdf/dompdf_config.inc.php");

/* Cria a instância */
$dompdf = new DOMPDF();

/* Carrega seu HTML */
$dompdf->load_html('
<style>

        table img {
           width: 50%;
        }
    </style>

    <table style="width:100%">
    <tr>
        <td><img src="../../images/logo.png" alt=""></td>
        <td style="text-align:right"><span> <b>Endereço:</b> Rua das flores nº 999</span><br>
        <span> <b>Telefone:</b> (11)0000-0000</span><br>
        <span> <b>Celular:</b> (11)0000-0000</span></td>
    </tr>
</table>
<section style="clear: both;">
    <hr>
</section>
<h3 style="text-align: center;">LAUDO DE VISTORIA</h3>
<p>O presente laudo é o resultado da vistoria realizada em ___/___/______, no imóvel localizado no seguinte endereço , Bairro , Cidade , cujas
    condições atuais encontram-se detalhadamentes descritas a seguir.</p>
<p>Este instrumento é parte integrante do contrato de locação firmado entre as partes e deve ser o mesmo anexado. </p>

<h4>DAS CONDIÇÕES DO IMÓVEL</h4>

<hr>

<h5>aqui vai ser gerado pelo sistema</h5>

<h3>  DA APROVAÇÃO DAS PARTES</h3>
<p> Ao assinarem este termo, as partes concordam integralmente com o que é nele relatado.</p>
<p>Após entrega das chaves, caso seja verificada qualquer irregularidade que não esteja devidamente explícita neste laudo, o <b>LOCADOR</b> deve ser
imediatamente comunicado.</p>
<p>Doravante, o <b>LOCATÁRIO</b> se responsabiliza pela conservação integral do imóvel.</p>
<p>Findo o contrato de locação, o <b>LOCATÁRIO</b> se compromente a restituir o imóvel a seu proprietário nas mesmas condições aqui descritas. </p>

<br><br><br><br>
<p style="text-align: center;"> ______________________________________,____/____/________</p>
<p style="text-align: center;">(Local e Data de assinatura)</p>
<p style="text-align: center;">_______________________________________</p>
<p style="text-align: center;">LOCADOR</p>
<p style="text-align: center;">_______________________________________</p>
<p style="text-align: center;">LOCATÁRIO</p>


');

/* Renderiza */
$dompdf->render();

/* Exibe */
$dompdf->stream(
    "saida.pdf", /* Nome do arquivo de saída */
    array(
        "Attachment" => false /* Para download, altere para true */
    )
);
