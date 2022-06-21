<!-- Modal -->
<style type="text/css">
    .modal-header {    
        border-bottom: 1px solid #e21d2461;  
    }
    .modal-title {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 0px;
        padding-bottom: 0px;
        position: relative;
        color: #182135;
    }
    .modal label {
        display: inline-block;
        margin-bottom: .2rem;
    }
    
    .btn-modal {
        background: #050d18;
        border: 0;
        padding: 10px 24px;
        color: #fff;
        transition: 0.4s;
        border-radius: 4px;
    }
    .btn-modal:hover {
        background: #e21d24;
    }
    
    @media (max-width: 768px) {	
        .modal {	    
            top: 70px;
        }
    
        .modal-title {
            font-size: 23px;
        }
    }
    
    @media (min-width: 576px){
      .modal-dialog {
          max-width: 621px;
          margin: 1.75rem auto;
      }
    }
    
    .eapps-form-fieldset {  
        margin-bottom: 20px!important;    
        padding: 0!important;
    }
    .eapps-form-element-wrapper {   
        padding: 0 10px!important;
        margin-bottom: 0!important;    
    }
    .eapps-form-actions-button{
      text-align: center;
    }
    
    .ExemploModalCentralizado{
      top: 80px;
        padding-right: 0;
    }
    
    .eapps-form-spots{
      padding-left: 1rem!important;
      padding-right: 1rem!important;
    }
    </style>
    <div class="modal fade" id="modal-orcamento" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header py-2">
        <h5 class="modal-title w-100 text-center" id="TituloModalCentralizado" style="color:#182135;"><i class="icofont-tasks"></i> Solicitar Orçamento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="background: #fff;">
        <form method="POST" class="php-email-form pt-0 px-3 px-lg-5" action="envia-orcamento.php" id="form-confirm-othuki-02" name="form-confirm-othuki-02">            
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="name">Seu Nome</label>
                        <input type="text" name="nome-orcamento" class="form-control" id="nome-orcamento"  />
                        
                      </div>
                      <div class="form-group col-md-6">
                        <label for="name">Seu E-mail</label>
                        <input type="email" class="form-control" name="email" id="email" />
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="name">Telefone</label>
                      <input type="text" class="form-control" name="telefone" id="telefone" />                      
                    </div>
                    <div class="form-group">
                      <label for="name">Serviço</label>
                      <select name="servico" id="servico" class="form-control">
                        <option value="Manutenção">Manutenção</option>
                        <option value="Automação">Automação</option>
                        <option value="Quadro de Comando">Quadro de Comando</option>
                        <option value="Instalação">Instalação</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Mensagem</label>
                      <textarea class="form-control" name="mensagem" id="mensagem" rows="5"></textarea>
                      
                    </div>
                    <div class="mb-3">
                      <div class="g-recaptcha" data-sitekey="6Le9CnsaAAAAAP26IBDAVfiGc3k9wS89bjt4EB2I"></div>
                    </div>
                    <div class="text-center"><button type="submit">Solicitar</button></div>
        </form> 
      </div>
      
    </div>
  </div>
</div>
    
    <div class="modal fade" id="modalMissao" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header py-2">
            <h5 class="modal-title w-100 text-center py-2" id="TituloModalCentralizado"><i class="icofont-rocket circle-icon icofont-1x"></i> NOSSA MISSÃO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body p-4">
            <p class="text-justify">Ser um parceiro forte e confiável para nossos clientes, garantindo o fornecimento de serviços com qualidade técnica e preços competitivos no mercado.</p>
    
            <button type="button" class="btn-modal" data-dismiss="modal">Fechar</button>              
          </div>
          
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="modalVisao" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header py-2">
            <h5 class="modal-title w-100 text-center py-2" id="TituloModalCentralizado"><i class="icofont-eye-alt circle-icon icofont-1x"></i> NOSSA VISÃO</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body p-4">
            <p class="text-justify">Ser reconhecida pelo mercado como uma das empresas mais competentes no setor de serviços relacionados a manutenção preventiva e corretiva de grupos geradores.</p>
    
            <button type="button" class="btn-modal" data-dismiss="modal">Fechar</button>              
          </div>
          
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="modalValores" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header py-2">
            <h5 class="modal-title w-100 text-center py-2" id="TituloModalCentralizado"><i class="icofont-heart-alt circle-icon icofont-1x"></i> </i> NOSSOS VALORES</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body p-4">
            <p class="text-justify">Acreditamos que uma empresa é formada por pessoas capacitadas e treinadas e que elas
    são as responsáveis pelo sucesso do negócio com resultados satisfatórios para nossos clientes.</p>
    
            <button type="button" class="btn-modal" data-dismiss="modal">Fechar</button>              
          </div>
          
        </div>
      </div>
    </div>
    
    <div class="modal fade" id="modalQualidade" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header py-2">
            <h5 class="modal-title w-100 text-center py-2" id="TituloModalCentralizado"><i class="icofont-badge circle-icon icofont-1x"></i> </i> QUALIDADE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body p-4">
            <p class="text-justify">Investimos em mão de obra qualificada, treinamentos, estrutura e ferramentas para otimização dos serviços de campo. Trabalhamos com peças originais, seguimos o plano de manutenção, considerando a política dos fabricantes dos equipamentos. Nossa filosofia é surpreender nosso cliente e superar a expectativa em relação aos serviços prestados.</p>
    
            <button type="button" class="btn-modal" data-dismiss="modal">Fechar</button>              
          </div>
          
        </div>
      </div>
    </div>
    
    
    <div class="modal fade" id="modalParceria" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header py-2">
            <h5 class="modal-title w-100 text-center py-2" id="TituloModalCentralizado"><i class="icofont-like circle-icon icofont-1x"></i> </i> PARCERIA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body p-4">
            <p class="text-justify">Buscamos estabelecer uma relação com nossos clientes, procurando entender sua necessidade, para propor uma melhor solução. Valorizamos a opinião dos nossos clientes em relação aos serviços prestados, e principalmente onde podemos melhorar. Nossa proposta é Excelência em Manutenção e trabalhamos incessantemente para mantermos esta proposta junto aos nossos parceiros.</p>
    
            <button type="button" class="btn-modal" data-dismiss="modal">Fechar</button>              
          </div>
          
        </div>
      </div>
    </div>
    
    
    <div class="modal fade" id="modalZap" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header py-2">
            <h5 class="modal-title w-100 text-center py-2" id="TituloModalCentralizado">          
               WhatsApp</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body p-4">
            <div class="row d-flex justify-content-center">
              
              <a href="https://api.whatsapp.com/send?phone=552120518733&text=Olá,%20como%20podemos%20ajudar?" target="_blank"><img src="assets/img/bt-zap-rj.png" width="200px"></a>
              
    
            </div>
                            
          </div>
          
        </div>
      </div>
    </div>











