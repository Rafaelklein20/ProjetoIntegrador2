<?php
include 'navbar.php'
    ?>

<div class="row divc" id="contatti">
    <div class="container mt-5">
        <div class="row" style="height:450px;">
            <div class="col-md-6 maps" style="margin-top:20px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11880.492291371422!2d12.4922309!3d41.8902102!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x28f1c82e908503c4!2sColosseo!5e0!3m2!1sit!2sit!4v1524815927977"
                    frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-6" style="margin-top:20px;">
                <form class="form-horizontal" method="post" action="">
                    <fieldset>
                        <!-- Form Name -->
                        <legend>Digite para nós:</legend>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="assunto">Assunto:</label>
                            <div class="col-md-8">
                                <input id="assunto" name="assunto" type="text" placeholder="assunto"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textarea">Texto:</label>
                            <div class="col-md-8">
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1"
                                    rows="10"></textarea>
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="nome">Nome:</label>
                            <div class="col-md-8">
                                <input id="nome" name="nome" type="text" placeholder="nome"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="email">E-mail:</label>
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="email"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="telefone">Telefone:</label>
                            <div class="col-md-8">
                                <input id="telefone" name="telefone" type="text" placeholder="telefone"
                                    class="form-control input-md">
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="enviar"></label>
                            <div class="col-md-4">
                                <button id="enviar" name="enviar" class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
                <div class="text-white" style="margin-top:60px;">
                    <h2 class="text-uppercase mt-4 font-weight-bold">Onde estamos:</h2>
                    <i class="fas fa-globe mt-3"></i> Piazza del Colosseo, 1, 00184 Roma<br>
                    <i class="fas fa-globe mt-3"></i> (54) 99663-5442<br>
                    <i class="fas fa-globe mt-3"></i> aaboutiquestore@gmail.com<br>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php'
    ?>
</body>

</html>