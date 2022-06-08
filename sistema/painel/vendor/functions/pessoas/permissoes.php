<?php

// echo "<pre>";
// print_r($_POST);
//  echo "</pre>";





 function cadastroPermissoes()
{
    try {
        require_once './../../../../conexao.php';
        if(isset($_POST)){
  
            $homePermissoes  = $_POST['homePermissoes']; 
            $cadastroCargosPermissoes  = $_POST['cadastroCargosPermissoes'];
            $cadastroTiposImoveisPermissoes  = $_POST['cadastroTiposImoveisPermissoes'];
            $cadastroCidadesPermissoes  = $_POST['cadastroCidadesPermissoes']; 
            $cadastroBairrosPermissoes  = $_POST['cadastroBairrosPermissoes'];
            $cadastroContasBancariasPermissoes  = $_POST['cadastroContasBancariasPermissoes'];
            $cadastroFrequenciaPermissoes  = $_POST['cadastroFrequenciaPermissoes'];
            $cadastroAcessosPermissoes  = $_POST['cadastroAcessosPermissoes'];
            $imoveisCadastradosPermissoes  = $_POST['imoveisCadastradosPermissoes'];
            $imoveisVendaPermissoes  = $_POST['imoveisVendaPermissoes'];
            $imoveisLocacaoPermissoes  = $_POST['imoveisLocacaoPermissoes'];
            $imoveisVendidosPermissoes  = $_POST['imoveisVendidosPermissoes'];
            $imoveisAlugadosPermissoes  = $_POST['imoveisAlugadosPermissoes'];
            $imoveisInativosPermissoes  = $_POST['imoveisInativosPermissoes'];
            $cadastroFuncionarioPermissoes  = $_POST['cadastroFuncionarioPermissoes'];
            $cadastroProprietariosPermissoes  = $_POST['cadastroProprietariosPermissoes'];
            $cadastroCompradoresPermissoes  = $_POST['cadastroCompradoresPermissoes'];
            $cadastroLocatariosPermissoes  = $_POST['cadastroLocatariosPermissoes'];
            $gestaoUsuariosPermissoes  = $_POST['gestaoUsuariosPermissoes'];
            $agendaPermissoes  = $_POST['agendaPermissoes'];
            $tarefasPermissoes  = $_POST['tarefasPermissoes'];
            $contasAPagarPermissoes  = $_POST['contasAPagarPermissoes'];
            $contasAReceberPermissoes  = $_POST['contasAReceberPermissoes']; 
            $extratoCaixaMovimentacoesPermissoes  = $_POST['extratoCaixaMovimentacoesPermissoes'];
            $comissoesPermissoes  = $_POST['comissoesPermissoes'];
            $listaVendasFinanceiroPermissoes  = $_POST['listaVendasFinanceiroPermissoes'];
            $listaAlugueisFinanceiroPermissoes  = $_POST['listaAlugueisFinanceiroPermissoes']; 
            $relatorioMovimentacoesPermissoes  = $_POST['relatorioMovimentacoesPermissoes'];
            $relatorioComissoesPermissoes  = $_POST['relatorioComissoesPermissoes'];
            $relatorioVendasPermissoes  = $_POST['relatorioVendasPermissoes'];
            $relatorioAlugueisPermissoes  = $_POST['relatorioAlugueisPermissoes'];
            $relatorioContasAPagarPermissoes  = $_POST['relatorioContasAPagarPermissoes'];
            $relatorioContasAReceberPermissoes  = $_POST['relatorioContasAReceberPermissoes'];
            $reciboPagamentoPermissoes  = $_POST['reciboPagamentoPermissoes'];
            $propostaCompraPermissoes  = $_POST['propostaCompraPermissoes'];
            $propostaLocacaoPermissoes  = $_POST['propostaLocacaoPermissoes'];
            $laudoVistoriaPermissoes  = $_POST['laudoVistoriaPermissoes'];
            $vendasJuridicoPermissoes  = $_POST['vendasJuridicoPermissoes']; 
            $alugueisJuridicoPermissoes  = $_POST['alugueisJuridicoPermissoes'];
            $configuracaoPermissoes  = $_POST['configuracaoPermissoes'];
           $funcionarioId = $_POST['idUsuario'];
           
           
        
            }
                try {

                   


                    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $pdo->prepare("insert into permissoes (
                        homePermissoes,
                        cadastroCargosPermissoes,
                        cadastroTiposImoveisPermissoes,
                        cadastroCidadesPermissoes,
                        cadastroBairrosPermissoes,
                        cadastroContasBancariasPermissoes,
                        cadastroFrequenciaPermissoes,
                        cadastroAcessosPermissoes,
                        imoveisCadastradosPermissoes,
                        imoveisVendaPermissoes,
                        imoveisLocacaoPermissoes,
                        imoveisVendidosPermissoes,
                        imoveisAlugadosPermissoes,
                        imoveisInativosPermissoes,
                        cadastroFuncionarioPermissoes,
                        cadastroProprietariosPermissoes,
                        cadastroCompradoresPermissoes,
                        cadastroLocatariosPermissoes,
                        gestaoUsuariosPermissoes,
                        agendaPermissoes,
                        tarefasPermissoes,
                        contasAPagarPermissoes,
                        contasAReceberPermissoes,
                        extratoCaixaMovimentacoesPermissoes,
                        comissoesPermissoes,
                        listaVendasFinanceiroPermissoes,
                        listaAlugueisFinanceiroPermissoes,
                        relatorioMovimentacoesPermissoes,
                        relatorioComissoesPermissoes,
                        relatorioVendasPermissoes,
                        relatorioAlugueisPermissoes,
                        relatorioContasAPagarPermissoes,
                        relatorioContasAReceberPermissoes,
                        reciboPagamentoPermissoes,
                        propostaCompraPermissoes,
                        propostaLocacaoPermissoes,
                        laudoVistoriaPermissoes,
                        vendasJuridicoPermissoes,
                        alugueisJuridicoPermissoes,
                        configuracaoPermissoes,
                        funcionarioId
                    
                    ) values (
                        
                        :homePermissoes,
                        :cadastroCargosPermissoes,
                        :cadastroTiposImoveisPermissoes,
                        :cadastroCidadesPermissoes,
                        :cadastroBairrosPermissoes,
                        :cadastroContasBancariasPermissoes,
                        :cadastroFrequenciaPermissoes,
                        :cadastroAcessosPermissoes,
                        :imoveisCadastradosPermissoes,
                        :imoveisVendaPermissoes,
                        :imoveisLocacaoPermissoes,
                        :imoveisVendidosPermissoes,
                        :imoveisAlugadosPermissoes,
                        :imoveisInativosPermissoes,
                        :cadastroFuncionarioPermissoes,
                        :cadastroProprietariosPermissoes,
                        :cadastroCompradoresPermissoes,
                        :cadastroLocatariosPermissoes,
                        :gestaoUsuariosPermissoes,
                        :agendaPermissoes,
                        :tarefasPermissoes,
                        :contasAPagarPermissoes,
                        :contasAReceberPermissoes,
                        :extratoCaixaMovimentacoesPermissoes,
                        :comissoesPermissoes,
                        :listaVendasFinanceiroPermissoes,
                        :listaAlugueisFinanceiroPermissoes,
                        :relatorioMovimentacoesPermissoes,
                        :relatorioComissoesPermissoes,
                        :relatorioVendasPermissoes,
                        :relatorioAlugueisPermissoes,
                        :relatorioContasAPagarPermissoes,
                        :relatorioContasAReceberPermissoes,
                        :reciboPagamentoPermissoes,
                        :propostaCompraPermissoes,
                        :propostaLocacaoPermissoes,
                        :laudoVistoriaPermissoes,
                        :vendasJuridicoPermissoes,
                        :alugueisJuridicoPermissoes,
                        :configuracaoPermissoes,
                        :funcionarioId
                        )");
                    $stmt->execute(array(

                        ':homePermissoes' => $homePermissoes,                       ':cadastroCargosPermissoes' => $cadastroCargosPermissoes,                       ':cadastroTiposImoveisPermissoes' => $cadastroTiposImoveisPermissoes,                       ':cadastroCidadesPermissoes'  => $cadastroCidadesPermissoes,                      
                        ':cadastroBairrosPermissoes'  => $cadastroBairrosPermissoes,                      ':cadastroContasBancariasPermissoes' => $cadastroContasBancariasPermissoes,                       ':cadastroFrequenciaPermissoes'=> $cadastroFrequenciaPermissoes,                        ':cadastroAcessosPermissoes' => $cadastroAcessosPermissoes,                       ':imoveisCadastradosPermissoes' => $imoveisCadastradosPermissoes,                      
                        ':imoveisVendaPermissoes'  => 
                        $imoveisVendaPermissoes,                      
                        ':imoveisLocacaoPermissoes'  => $imoveisLocacaoPermissoes,                      ':imoveisVendidosPermissoes' => $imoveisVendidosPermissoes,                       
                        ':imoveisAlugadosPermissoes' => $imoveisAlugadosPermissoes,                       
                        ':imoveisInativosPermissoes'  => $imoveisInativosPermissoes,                      ':cadastroFuncionarioPermissoes'  => $cadastroFuncionarioPermissoes,                      ':cadastroProprietariosPermissoes' => $cadastroProprietariosPermissoes,                       ':cadastroCompradoresPermissoes' => $cadastroCompradoresPermissoes,                       ':cadastroLocatariosPermissoes'  => $cadastroLocatariosPermissoes,                      ':gestaoUsuariosPermissoes'    => $gestaoUsuariosPermissoes,                    ':agendaPermissoes'=> $agendaPermissoes,                        ':tarefasPermissoes' => $tarefasPermissoes,                       ':contasAPagarPermissoes'  => $contasAPagarPermissoes,                      ':contasAReceberPermissoes' => $contasAReceberPermissoes,                       ':extratoCaixaMovimentacoesPermissoes' => $extratoCaixaMovimentacoesPermissoes,                       ':comissoesPermissoes'=> $comissoesPermissoes,                        ':listaVendasFinanceiroPermissoes' => $listaVendasFinanceiroPermissoes,                       ':listaAlugueisFinanceiroPermissoes' => $listaAlugueisFinanceiroPermissoes,                       ':relatorioMovimentacoesPermissoes'=> $relatorioMovimentacoesPermissoes,                        ':relatorioComissoesPermissoes'=> $relatorioComissoesPermissoes,                        ':relatorioVendasPermissoes'  => $relatorioVendasPermissoes,                      
                        ':relatorioAlugueisPermissoes' => $relatorioAlugueisPermissoes,                       ':relatorioContasAPagarPermissoes' => $relatorioContasAPagarPermissoes,                       ':relatorioContasAReceberPermissoes' => $relatorioContasAReceberPermissoes,                       ':reciboPagamentoPermissoes'    => $reciboPagamentoPermissoes,                    
                        ':propostaCompraPermissoes' => $propostaCompraPermissoes,                       
                        ':propostaLocacaoPermissoes'=> $propostaLocacaoPermissoes,
                        ':laudoVistoriaPermissoes' => $laudoVistoriaPermissoes,
                        ':vendasJuridicoPermissoes'  => $vendasJuridicoPermissoes,
                       ' :alugueisJuridicoPermissoes' => $alugueisJuridicoPermissoes,  
                        ':configuracaoPermissoes'  => $configuracaoPermissoes,  
                        ':funcionarioId' => $funcionarioId    
                    ));
                    // header('Location:../../../index.php?pagina=tipos-imoveis');
                } catch (PDOException $e) {
                    echo $e->getMessage();
                }

                $pdo = null;
            }

   
    catch (PDOException $e) {
        echo 'erro ' . $e->getMessage();
    }
}

if (isset($_POST['idUsuario'])) {
    cadastroPermissoes();
} else {
    echo 'eroo 1';
}

?>

