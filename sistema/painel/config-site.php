<div id="page-wrapper" style="min-height: 646px;">


    <div class="row">
    <h2 class="title1">Configurações do site</h2>
        <form>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="nome-site" class="control-label">Nome:</label>
                    <input type="text" class="form-control" id="nome-site">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="email-site" class="control-label">E-mail:</label>
                    <input type="text" class="form-control" id="email-site">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="telefone-site" class="control-label">Telefone fixo:</label>
                    <input type="text" class="form-control" id="telefone-site">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="whatsapp-site" class="control-label">Whatsapp</label>
                    <input type="text" class="form-control" id="whatsapp-site">
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nome Banco</label>
                        <input type="text" class="form-control" name="nome_banco_config" value="Bradesco">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Tipo Conta</label>
                        <select class="form-control" name="tipo_conta_config" id="tipo_conta_config" value="Corrente">
                            <option value="Corrente">Corrente</option>
                            <option value="Poupança">Poupança</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Agência</label>
                        <input type="text" class="form-control" name="agencia_config" id="agencia_config" value="0123">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Conta</label>
                        <input type="text" class="form-control" name="conta_config" id="conta_config" value="123459-8">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nome Beneficiário</label>
                        <input type="text" class="form-control" name="nome_beneficiario_config" id="nome_beneficiario_config" value="FREITAS IMOBILIÁRIA">
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Tipo Chave</label>
                        <select class="form-control" name="tipo_chave_pix_config" id="tipo_chave_pix_config" value="CNPJ">
                            <option value="CNPJ">CNPJ</option>
                            <option value="CPF">CPF</option>
                            <option value="E-mail">E-mail</option>
                            <option value="Telefone">Telefone</option>
                            <option value="Código">Código</option>

                        </select>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Chave Pix</label>
                        <input type="text" class="form-control" name="chave_pix_config" id="chave_pix_config" value="12.356.655/4455-58">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label>CRECI Imobiliária</label>
                        <input type="text" class="form-control" name="creci_config" value="MG-59455">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label>CNPJ Imobiliária</label>
                        <input type="text" class="form-control" name="cnpj_config" id="cnpj_config" value="12.356.655/4455-58" maxlength="18">
                    </div>
                </div>

            </div>


            <div class="row">



                <div class="col-md-9">
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" class="form-control" name="end_config" value="Rua X Número 1100 Bairro Centro - CEP 30512-980 - Belo Horizonte">
                    </div>
                </div>



                <div class="col-md-3">
                    <div class="form-group">
                        <label>Relatório PDF/HTML</label>
                        <select class="form-control" name="rel" required="">
                            <option selected="" value="pdf">PDF</option>
                            <option value="html">HTML</option>
                        </select>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Comissão Venda IMOB</label>
                        <input maxlength="5" type="text" class="form-control" name="comissao_venda_imob_config" value="6.00" placeholder="Ex: 4 ou 4.5">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label>Comissão Venda Corretor</label>
                        <input maxlength="5" type="text" class="form-control" name="comissao_venda_corretor_config" value="2.00" placeholder="Ex: 4 ou 4.5">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Comissão Aluguél IMOB</label>
                        <input maxlength="5" type="text" class="form-control" name="comissao_aluguel_imob_config" value="10.00" placeholder="Ex: 4 ou 4.5">
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="form-group">
                        <label>Comissão Aluguél Corretor</label>
                        <input maxlength="5" type="text" class="form-control" name="comissao_aluguel_corretor_config" value="6.00" placeholder="Comissão para Primeiro Aluguél">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="logo" onchange="carregarImgLogo();" id="foto-logo">
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="divImgLogo">
                        <img src="../imagens/logo.png" width="100px" id="target-logo">
                    </div>
                </div>



                <div class="col-md-4">
                    <div class="form-group">
                        <label>Favicon (ico)</label>
                        <input type="file" name="favicon" onchange="carregarImgFavicon();" id="foto-favicon">
                    </div>
                </div>
                <div class="col-md-2">
                    <div id="divImgFavicon">
                        <img src="../imagens/favicon.ico" width="20px" id="target-favicon">
                    </div>
                </div>





            </div>

            <div class="row">

                <div class="col-md-3">
                    <div class="form-group">
                        <label>Img Relatório (*jpg) 200x60</label>
                        <input type="file" name="imgRel" onchange="carregarImgRel();" id="foto-rel">
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="divImgRel">
                        <img src="../imagens/logo.jpg" width="100px" id="target-rel">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="form-group">
                        <label>QRCode <small>(*jpg) Min 200x200</small></label>
                        <input type="file" name="imgQRCode" onchange="carregarImgQRCode();" id="foto-QRCode">
                    </div>
                </div>
                <div class="col-md-2">
                    <div id="divImgQRCode">
                        <img src="../imagens/qrcodeexemplo.jpg" width="80px" id="target-QRCode">
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Assinatura Imagem <small>(*jpg) Min 240x70 <small>(sem sobras do lado)</small></small></label>
                        <input type="file" name="imgAssinatura" onchange="carregarImgAssinatura();" id="foto-assinatura">
                    </div>
                </div>
                <div class="col-md-2">
                    <div id="divImgAssinatura">
                        <img src="../imagens/modelo-assinatura.jpg" width="100%" id="target-assinatura">
                    </div>
                </div>
            </div>
            
            <button type="submit" class="btn btn-primary">Editar Dados</button>
        </form>
    </div>

</div>