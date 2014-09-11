<?php include ("config.php"); ?>
<?php include('configExtra.php'); ?>
<!doctype html>
<?php 
    $title       = "Feirão de Imóveis Cury"; 
    $image       = "http://cury.net/feiraorj/images/meta.png";
    $description = "Escolha um dos nossos apartamentos, com descontos de até R$ 10.000,00, fora o subsídio do governo pelo programa Minha Casa Minha Vida. Não perca mais tempo e realize o sonho da casa nova.";
?>
<html>
    <head>
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:image" content="<?php echo $image; ?>"/>
        <meta property="og:description" content="<?php echo $description; ?>" />

        <meta charset='utf-8'>
        <meta name='description' content="<?php echo $description; ?>">
        <meta name='viewport' content="width=device-width, initial-scale=1">
        <title><?php echo $title; ?></title>
        <link rel='stylesheet' href="css/style.css">
        <link rel='author' href="humans.txt">
        <link href='css/flexslider.css' rel='stylesheet' type='text/css'>
        <link href='css/jquery.fancybox.css' rel='stylesheet' type='text/css'>
        <!-- Fonts do google fonts api -->
        <link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=PT+Sans+Caption' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'> 

        <script type="text/javascript">
          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-39086401-1']);
          _gaq.push(['_trackPageview']);
          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();
        </script>    

        <!-- <script src="js/jquery-1.9.0.min.js"></script> -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        

        <script type="text/javascript">
            //global vars
            var curName = '';
            var curID = '';
            var menuPosition = 0;

            $(function() {
                var topo = $('.bg-menu').offset();
                menuPosition = topo.top;

                $(window).scroll(function(){
                    var offset = 83;
                    var topo = $('.bg-menu').offset(); // altura do topo
                    var scrollTop = $(window).scrollTop(); // qto foi rolado a barra
                        if(scrollTop > menuPosition+offset){
                            $('.bg-menu').css({'position' : 'fixed', 'margin-top' : - menuPosition-offset});
                            $('#gotoTop').removeClass('ocultar');
                        }else{
                            $('.bg-menu').css({'position' : 'relative', 'margin-top' : 30});
                            $('#gotoTop').addClass('ocultar');
                         }               
                    });
            });
        </script>

    </head>
    <body id='top'>
        <!-- Header -->
            <?php include('header.php') ?>
        <!-- END Header -->
        <div class="wrapper clearfix">
                    
        <!-- Loop -->
            <?php include('loop.php') ?>
        <!-- END Loop -->
        </div>

        <!-- Footer -->
            <?php include('footer.php') ?>
        <!-- END Footer -->

        <!-- Scripts -->
        <script src="js/browserDetect.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/jquery.easing.js"></script>
        <script src="js/jquery.mousewheel.js"></script>
        <script src="js/jquery.flexslider-min.js"></script>
        <script src="js/jquery.validationEngine.js"></script>
        <script src="js/jquery.validationEngine-pt.js"></script>
        <script src="js/jquery.jqtransform.js"></script>
        <!--<script src="js/fernando-scripts.js"></script>-->
        <script src="js/jquery.fancybox.js"></script>
        <script src="js/jquery.smoothScroll.js"></script>
        <script src="js/main.js"></script>
        
        <script type="text/javascript">
            $(window).load(function() {
              $('.flexslider').flexslider({
                animation: "slide",
                controlNav: false
              });
            });
        </script>

        <script type="text/javascript">
            var intervalHook = null;
            function vitrineAnimation() {
                if ($('.vitrine .ui-tabs-selected').next('li').find('a').length > 0)
                    var next = $('.vitrine .ui-tabs-selected').next('li').find('a');
                else
                    var next = $('.vitrine li:first a');
                
                next.click();
            }
            $(document).ready(function () {
                
                // Animação da vitrine
                if ($('.vitrine').length > 0){
                    intervalHook = setInterval(vitrineAnimation, 10000);
                }
                
                $('.hrefAba').click( function() {
                    clearInterval(intervalHook);
                    intervalHook = setInterval(vitrineAnimation, 10000);
                });
                
              $(".only-number").keydown(function(event) {
                    // Allow: backspace, delete, tab, escape, and enter
                    if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
                         // Allow: Ctrl+A
                        (event.keyCode == 65 && event.ctrlKey === true) || 
                         // Allow: home, end, left, right
                        (event.keyCode >= 35 && event.keyCode <= 39)) {
                             // let it happen, don't do anything
                             return;
                    }
                    else {
                        // Ensure that it is a number and stop the keypress
                        if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                            event.preventDefault(); 
                        }   
                    }
                });     
                //$('.frmTeLigamos').bind("submit", function () { });
                /*$('.frmTeLigamos').validationEngine({
                    promptPosition: "topLeft",
                    ajaxSubmit: true,
                    ajaxSubmitFile: "../_service/LigamosParaVoce.aspx",
                    //ajaxFormValidation: true,
                    //ajaxFormValidationMethod: 'post',
                    //dataType: 'JSON',

                    beforeSuccess: function () {
                        log("beforeSuccess");
                        $(".frmTeLigamos span.aguarde").show();
                        var telefone = $('input[name="txtTelefone"][value!=""]').val();
                        var ddd = $('input[name="txtDddTelefone"][value!=""]').val();
                        $('.frmTeLigamos .etiqueta, .frmTeLigamos .valor, .frmTeLigamos .ligue-me').hide()
                        //console.log(telefone.length);
                        if (telefone.length == 9)
                            var string = '(' + ddd + ')' + telefone.substr(0, 5) + '-' + telefone.substr(5);                
                        else if  (telefone.length == 8)
                            var string = '(' + ddd + ')' + telefone.substr(0, 4) + '-' + telefone.substr(4);                
                        $('input[name="txtTelefone"][value!=""]').val(string);
                    },
                    success: function () {
                        log("success");
                        $(".esconde").hide();
                        $('.frmTeLigamos input').hide();
                        $('.ligue-me').hide();
                        $('.ligamos-voce-agora .etiqueta').hide();
                        $(".aguarde").hide();
                        $(".sucesso").show();
                        _gaq.push(['_trackEvent', 'principais', 'cliqueLigamosSUCESSO', String(curName), parseInt(curID)]);
                    }
                });*/

                
            });
        </script>
        
        <script type="text/javascript">
            
        // This method is called right before the ajax form validation request
        // it is typically used to setup some visuals ("Please wait...");
        // you may return a false to stop the request 
        /*function beforeCall(form, options){
            if (window.console) 
            //console.log("Right before the AJAX form validation call");
            return true;
        }
            
        // Called once the server replies to the ajax form validation request
        function ajaxValidationCallbackForm(form, valid){
            //if (window.console) 
            log('callback frmTeForm');
                
            if (status === true) {
                alert("Sua mensagem foi enviada para nossa equipe com sucesso!");
                // uncomment these lines to submit the form to form.action
                // form.validationEngine('detach');
                // form.submit();
                // or you may use AJAX again to submit the data
               _gaq.push(['_trackEvent', 'principais', 'cliqueMensagemSUCESSO', String(curName), parseInt(curID)]);
            }
        }
        // Called once the server replies to the ajax form validation request
        function ajaxValidationCallbackLigamos(status, form, json, options){
            //if (window.console) 
            log('callback frmTeLigamos');
                
            if (status === true) {
                alert("Sua mensagem foi enviada para nossa equipe com sucesso!");
                // uncomment these lines to submit the form to form.action
                // form.validationEngine('detach');
                // form.submit();
                // or you may use AJAX again to submit the data
               _gaq.push(['_trackEvent', 'principais', 'cliqueLigamosSUCESSO', String(curName), parseInt(curID)]);
            }
        }*/

            $(document).ready(function() {
                $('.bg-menu a, #gotoTop a').smoothScroll();

                $('.fancybox').fancybox();
                window.console.log('ready');

                /*jQuery(".box3 form").validationEngine({
                    ajaxFormValidation: true,
                    ajaxFormValidationMethod: 'POST',
                    dataType: 'JSON',
                    onAjaxFormComplete: ajaxValidationCallback
                });*/
            });


jQuery.fn.smoothScroll = function(){
    $(this).each(function(){
        var node = $(this);
        $(node).click(function(e){
            var anchor = $(this).attr('href');
            anchor = anchor.split("#");
            anchor = anchor[1];
            var t = 0;
            var found = false;
            var tName = 'a[name='+anchor+']';
            var tId = '#'+anchor;
            if (!!$(tName).length){
                t = $(tName).offset().top;
                if ($(tName).text() == ""){
                    t = $(tName).parent().offset().top;
                }
                found = true;
            } else if(!!$(tId).length){
                t = $(tId).offset().top;
                found = true;
            }
            if (found){
                $("body, html").animate({scrollTop: t}, 1000);
            }
            return false;
            //e.preventDefault();
        });
    });
    var lAnchor = location.hash;
    if (lAnchor.length > 0){
        lAnchor = lAnchor.split("#");
        lAnchor = lAnchor[1];
        if (lAnchor.length > 0){
            $("body, html").scrollTop(0);
            var lt = 0;
            var lfound = false;
            var ltName = 'a[name='+lAnchor+']';
            var ltId = '#'+lAnchor;
            if (!!$(ltName).length){
                lt = $(ltName).offset().top;
                if ($(ltName).text() == ""){
                    lt = $(ltName).parent().offset().top;
                }
                lfound = true;
            } else if(!!$(ltId).length){
                lt = $(ltId).offset().top;
                lfound = true;
            }
            if (lfound){
                $("body, html").animate({scrollTop: lt}, 1000);
            }           
            return false;
        }
    }
}
        </script>
        
    </body>
</html>


