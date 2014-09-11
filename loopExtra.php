<div class="container bgExtra clearfix left">
        <?php foreach ($extra as $key => $loop) { ?>

        <div class="extra clearfix" id="<?php echo $loop['page']; ?>">
            <h1 id="jacarepagua"><?php echo $loop['title'] ?></h1>
                <hr/><br />
                <div class="container">
                    <div class="info">
                        <img src="<?php echo $imagesDir.$loop['logoSrc'] ?>" class="logoImg"/>
                        <p class='sizeExtra'><?php echo $loop['tamanho'] ?></p>
                        <p class='desc'><?php echo $loop['desc'] ?></p>
                    </div>
                    <?php include('sliderExtra.php'); ?>
                </div>
                    <h2>NÃO PERCA ESSA GRANDE CHANCE E CADASTRE-SE ABAIXO.</h2>
                <div class="areaCadastro">
                    <div class="areaForm">
                        <form action="" method='post'  id='form-<?php echo $key ?>'>
                            <input type="hidden" name='CodEmpreendimento' value='<?php echo $panel['emailProdID'] ?>'/>
                            <input type="text" name='Assunto' style="display:none" value='Info'/>
                                <span class='normal nome'><input type="text" name='Nome' class='validate[required,custom[onlyLetterSp],maxSize[100]]' placeholder='Nome'/></span>
                                <span class='normal email'><input type="text" name='Email' class='validate[required,custom[email],maxSize[100]]' placeholder='Email'/></span>
                                <span class='normal fone'><input type="text" name='Tel' maxlength='9' minlength='8' class='validate[required,custom[onlyNumberSp],maxSize[9],minSize[8]]' placeholder='Telefone'/></span>
                            <input type="submit" name='enviar' value='' class="btn" onclick="_gaq.push(['_trackEvent', 'principais', 'cliqueMensagem', String('<?php echo $loop['page'] ?>'), parseInt('<?php echo $loop['emailProdID'] ?>')]);curName = '<?php echo $loop['page'] ?>'; curID = '<?php echo $loop['emailProdID'] ?>';">
                        </form>
                    </div>
                </div>
        </div>

        <?php } ?>
</div>
