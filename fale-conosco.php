<?php include 'components/header.php'; ?>

      <section class="topo">
         <img src="assets/images/fale-conosco.png" alt="Laranjas - COEX" />
         
         <div class="container">
            <h1 class="titulo-interno">Fale Conosco</h1>

            <ol class="breadcrumb">
               <li><a href="#">Início</a></li>
               <li class="active">Fale Conosco</li>
            </ol>
            <div class="borda"></div>
         </div><!-- .container -->
      </section><!-- .topo -->

      <section class="fale-conosco">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                  <form>
                     <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control" value="" />
                     </div><!-- .form-group -->

                     <div class="form-group">
                        <label>Assunto</label>
                        <input type="text" name="assunto" id="assunto" class="form-control" value="" />
                     </div><!-- .form-group -->
                     
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group">
                              <label>E-mail</label>
                              <input type="text" name="email" id="email" class="form-control" value="" />
                           </div><!-- .form-group -->
                        </div><!-- .md-6 -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                           <div class="form-group">
                              <label>Telefone</label>
                              <input type="text" name="telefone" id="telefone" class="form-control" value="" />
                           </div><!-- .form-group -->
                        </div><!-- .md-6 -->
                     </div><!-- .row -->

                     <div class="form-group">
                        <label>Mensagem</label>
                        <textarea name="mensagem" id="mensagem" class="form-control"></textarea>
                     </div><!-- .form-group -->

                     <input type="submit" class="botao pull-right" value="Enviar" />
                  </form>
               </div><!-- .md-9 -->
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                  <div class="sidebar">
                     <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Endereço</h3>
                     <p>Rod. BR 110 KM 47 | Caixa Postal: 137 -  Campos da UFERSA, Mossoró/RN</p>

                     <h3><i class="fa fa-mobile" aria-hidden="true"></i> Telefone</h3>
                     <p>(84) 3312-6939</p>

                     <h3><i class="fa fa-envelope-o" aria-hidden="true"></i> E-MAIL</h3>
                     <p>coex@mikrocenter.com.br </p>
                  </div><!-- .sidebar -->
               </div><!-- .md-3 -->
            </div><!-- .row -->
         </div><!-- .container -->

         <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.3759163216296!2d-37.32719164925405!3d-5.203469196205804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4f68d935476eb06e!2sUFERSA!5e0!3m2!1spt-BR!2sbr!4v1496945407358" width="100%" height="430" frameborder="0" style="border:0" allowfullscreen></iframe>
         </div><!-- .mapa -->
      </section><!-- .fale-conosco -->

<?php include 'components/footer.php'; ?>   