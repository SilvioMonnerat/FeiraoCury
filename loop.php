                <div class="container panels clearfix left">
                    <?php foreach ($panels as $key => $panel) { ?>
                    <div class="panel clearfix" id="<?php echo $panel['page']; ?>">
                        <h1 id="jacarepagua"><?php echo $panel['title'] ?></h1>
                        <hr/><br />
                        <div class="container">
                            <div class="info">
                                <img src="<?php echo $imagesDir.$panel['logoSrc'] ?>" class="logoImg"/>
                                <p class='size'><?php echo $panel['tamanho'] ?></p>
                                <p class='desc'><?php echo $panel['desc'] ?></p>
                            </div>
                            <?php include('slider.php'); ?>
                            <h2>Não fique com dúvidas, escolha uma das formas de contato abaixo:</h2>
                        </div>
                        <div class="container">
                            <div class="col1">
                                <div class="box1">
                                    <a href="javascript:void(0)" id="ctl00_ucContato_lnkAtendimento" class="atendimentoOnline btn " onclick="window.open('http://cury.hypnobox.com.br/atendimento/index.php?id_produto=<?php echo $panel['prodID']; ?>&amp;referencia=FeiraoCuryRj','atendimentoonline','width=480, height=650');_gaq.push(['_trackEvent', 'principais', 'cliqueChat', String('<?php echo $panel['page'] ?>'), parseInt('<?php echo $panel['prodID'] ?>')]);"></a>
                                </div><!-- end of .box1 -->
                                <div class="box2">
                                    <a href="javascript:void(0)"  onclick="_gaq.push(['_trackEvent', 'principais', 'cliqueLigamos', String('<?php echo $panel['page'] ?>'), parseInt('<?php echo $panel['prodID'] ?>')]);" class="btn"></a>
                                        <div class="ligamos-voce-agora ocultar">
                                            <div class="formulario">
                                                <form action="" method="post" id="frmTeLigamos-<?php echo $key ?>" class="frmTeLigamos" onsubmit="return false" id='ligamos-<?php echo $key ?>'>
                                                    <p class="esconde" style="padding: 0 0 10px 0">Para celulares de São Paulo não se esqueça de colocar o número 9 antes do número de  telefone.</p>
                                                    <span class="coluna etiqueta" style=" font-family: Arial, 'PT Sans'; font-size:12px;">Telefone:</span>
                                                    <span class="coluna valor">
                                                        <input type="text" maxlength="2" style="width:30px;color:#FFF" id="txtDddTelefone" name="txtDddTelefone" class="only-number validate[required]">
                                                        <input type="text" maxlength="9" style="color:#FFF" id="txtTelefone" name="txtTelefone" class="only-number validate[required,minSize[8]]">
                                                        <input type="hidden" id="acao" name="acao" value="feirao" >
                                                    </span>
                                                    <span class="ligue-me"><a href="javascript:void(0)" onclick="curName = '<?php echo $panel['page'] ?>'; curID = '<?php echo $panel['prodID'] ?>;'">Ligue-me agora</a></span>
                                                    <span class="aguarde" style="color:yellow; display:none">Aguarde, carregando...</span>
                                                    <p class="esconde">Horário de atendimento:<br>Segunda a Sexta, das 9 as 21hs;<br>Sábados, das 10 às 21hs;<br>Domingos e feriados, das 11<br>às 20hs.</p>
                                                    <span class="sucesso" style="display:none">
                                                    <br>
                                                    <h2 style="color:yellow; font-family: arial; font-size: 14px; margin: 7px 0; font-weight: 600; text-align: center;">NÚMERO ENVIADO COM SUCESSO</h2>
                                                    <p>Em instantes seu telefone irá tocar e um de nossos corretores estará na linha para atendê-lo.</p>
                                                    </span>
                                                </form>
                                            </div>
                                        <div style="display:none"></div>
                                    </div>
                                </div><!-- end of .box2 -->        
                            </div><!-- end of .col1 -->
                            <div class="col2">
                                <div class="box3">
                                    <form action="" method='post'  id='form-<?php echo $key ?>'>
                                        <input type="hidden" name='CodEmpreendimento' value='<?php echo $panel['emailProdID'] ?>'/>
                                        <div class='c1'><textarea name='Mensagem' class='messagem validate[required,minSize[10]]' placeholder='Mensagem' ></textarea></div>
                                        <div class='c2'>
                                        	<input type="text" name='Assunto' style="display:none" value='Info'/>
                                            <span class='normal nome'><input type="text" name='Nome' class='validate[required,custom[onlyLetterSp],maxSize[100]]' placeholder='Nome'/></span>
                                            <span class='normal email'><input type="text" name='Email' class='validate[required,custom[email],maxSize[100]]' placeholder='Email'/></span>
                                            <span class='normal fone'><input type="text" name='DDD' maxlength='2' minlength='2' class='ddd validate[required,custom[onlyNumberSp],maxSize[2],minSize[2]]' placeholder='DDD'/><input type="text" name='Tel' maxlength='9' minlength='8' class='fone validate[required,custom[onlyNumberSp],maxSize[9],minSize[8]]' placeholder='Telefone'/></span>
                                        </div>
                                        <input type="submit" name='enviar' value='' class="btn" onclick="_gaq.push(['_trackEvent', 'principais', 'cliqueMensagem', String('<?php echo $panel['page'] ?>'), parseInt('<?php echo $panel['emailProdID'] ?>')]);curName = '<?php echo $panel['page'] ?>'; curID = '<?php echo $panel['emailProdID'] ?>';">
                                    </form>
                                    <script>
                                    $(document).ready(function() {

                                        jQuery("#form-<?php echo $key ?>").validationEngine({
                                            ajaxFormValidation: false,
                                            ajaxSubmit: false,
                                        }).submit(function(){
                                            if(!$('#form-<?php echo $key ?>').data().jqv.isError){
                                                $.ajax({
                                                    type: 'post',
                                                    url: '../_service/PopAtendimentoEmail.aspx',
                                                    dataType: 'text',
                                                    data: jQuery("#form-<?php echo $key ?>").serialize(),
                                                     beforeSend: function() {
                                                        log('sendind this data to ../_service/PopAtendimentoEmail.aspx', jQuery("#form-<?php echo $key ?>").serialize());
                                                     },
                                                    error: function(data, transport) {
                                                        /*window.console.log('data, transport');
                                                        window.console.log(data, transport);*/
														alert("Erro ao enviar Mensagem!");
                                                    },
                                                    success: function(r) {
														log(r);
                                                        if(r == 'sucesso') {
                                                           alert("Sua mensagem foi enviada para nossa equipe com sucesso!");
                                                           _gaq.push(['_trackEvent', 'principais', 'cliqueMensagemSUCESSO', String('<?php echo $panel['page'] ?>'), parseInt('<?php echo $panel['emailProdID'] ?>')]);
                                                        } else {
                                                            alert("Erro ao enviar Mensagem!");
                                                        }
                                                    }
                                                });
                                            }
                                            return false;
                                        });
                                        $('#frmTeLigamos-<?php echo $key ?>').validationEngine({                                            
                                            ajaxFormValidation: false,
                                            ajaxSubmit: false,
                                        }).submit(function(){
                                            if(!$('#frmTeLigamos-<?php echo $key ?>').data().jqv.isError){

                                                $("#frmTeLigamos-<?php echo $key ?> span.aguarde").show();
                                                var telefone = $('#frmTeLigamos-<?php echo $key ?> input[name="txtTelefone"][value!=""]').val();
                                                var ddd = $('#frmTeLigamos-<?php echo $key ?> input[name="txtDddTelefone"][value!=""]').val();
                                                $('#frmTeLigamos-<?php echo $key ?> .etiqueta, #frmTeLigamos-<?php echo $key ?> .valor, #frmTeLigamos-<?php echo $key ?> .ligue-me').hide()
                                                //console.log(telefone.length);
                                                if (telefone.length == 9)
                                                    var string = '(' + ddd + ')' + telefone.substr(0, 5) + '-' + telefone.substr(5);                
                                                else if  (telefone.length == 8)
                                                    var string = '(' + ddd + ')' + telefone.substr(0, 4) + '-' + telefone.substr(4);                
                                                $('#frmTeLigamos-<?php echo $key ?> input[name="txtTelefone"][value!=""]').val(string);
                                                log(string);

                                                $.ajax({
                                                    type: 'post',
                                                    url: '../_service/LigamosParaVoce.aspx',
                                                    dataType: 'text',
                                                    data: jQuery("#frmTeLigamos-<?php echo $key ?>").serialize(),
                                                    beforeSend: function() {
                                                        log('sendind this data to ../_service/LigamosParaVoce.aspx', jQuery("#frmTeLigamos-<?php echo $key ?>").serialize());
                                                        
                                                    },
                                                    error: function(data, transport) {
                                                        /*window.console.log('data, transport');
                                                        window.console.log(data, transport);*/
														alert("Erro ao enviar seu Telefone!");
                                                        $("#frmTeLigamos-<?php echo $key ?> span.aguarde").hide();
                                                        $('#frmTeLigamos-<?php echo $key ?> .etiqueta, #frmTeLigamos-<?php echo $key ?> .valor, #frmTeLigamos-<?php echo $key ?> .ligue-me').show()
                                                    },
                                                    success: function(r) {
                                                            log("msg", r);
                                                        if(r == 'true') {
                                                            log("success");
                                                            $("#frmTeLigamos-<?php echo $key ?> .esconde").hide();
                                                            $('#frmTeLigamos-<?php echo $key ?> input').hide();
                                                            $('#frmTeLigamos-<?php echo $key ?> .ligue-me').hide();
                                                            $('.ligamos-voce-agora .etiqueta').hide();
                                                            $("#frmTeLigamos-<?php echo $key ?> .aguarde").hide();
                                                            $("#frmTeLigamos-<?php echo $key ?> .sucesso").show();                                                            
                                                            _gaq.push(['_trackEvent', 'principais', 'cliqueLigamosSUCESSO', String('<?php echo $panel['page'] ?>'), parseInt('<?php echo $panel['prodID'] ?>')]);
                                                            
                                                        }else {
                                                            alert("Erro ao enviar seu Telefone!");
                                                        }
                                                        
                                                    }
                                                });
                                            }
                                            return false;
                                        });

                                        $('#frmTeLigamos-<?php echo $key ?> a').bind("click", function () {
                                                log("click #frmTeLigamos-<?php echo $key ?>");
                                            $(this).parents('#frmTeLigamos-<?php echo $key ?>').trigger('submit');
                                        });
                                        //window.console.log('#form-<?php echo $key ?>');
                                    });
                                    </script>
                                </div><!-- end of .box3 -->
                            </div><!-- end of .col2 -->
                        </div><!-- end of .container -->
                        <div class="container sub-footer clearfix">
                            <div class="endereco"><strong>Visite NOSSA LOJA: </strong><span><?php echo $panel['endereco'] ?></span></div>
                            <a class="gmap btn fancybox" href="#inline<?php echo $key ?>" onclick="_gaq.push(['_trackEvent', 'secundarios', 'cliqueMapa', String('<?php echo $panel['page'] ?>'), parseInt('<?php echo $panel['prodID'] ?>')]);"></a>
                            <!-- <div class="link btn"><a href="<?php echo $panel['link']; ?>" target="_blank"></a></div> -->
                            <a class="link btn" href="<?php echo $panel['link']; ?>" target="_blank" onclick="_gaq.push(['_trackEvent', 'secundarios', 'cliqueMaisInfoNoSite', String('<?php echo $panel['page'] ?>'), parseInt('<?php echo $panel['prodID'] ?>')]);"></a> 
                                                       
                            <div id="inline<?php echo $key ?>" class='maps' style="width:550px;display: none;">
                                <p><img src="<?php echo $imagesDir.$panel['logoSrc'] ?>" class="logoImg"/><span><?php echo $panel['endereco'] ?></span></p>
                                <iframe width="550" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $panel['mapa'] ?>&output=embed"></iframe>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>