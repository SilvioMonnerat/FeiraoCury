<div class="container clearfix">
    <header id='header'>
        <div class="img-header">
            Escolha um dos nossos apartamentos, com descontos de até R$ 10.000,00, fora o subsídio do governo pelo programa Minha Casa Minha Vida. Não perca mais tempo e realize 
                o sonho da casa nova. enquanto durarem os estoques!
        </div><!-- end of .img-header -->
        <div class="bg-menu">
            <ul>
                <?php 
                foreach ($panels as $k => $panel) {
                     $li = '';
                     $li .= "<a href='#{$panel['page']}' onclick=\"_gaq.push(['_trackEvent', 'terciarios', 'cliqueMenu', String('{$panel['page']}'), parseInt('{$panel['prodID']}')]);\"><li><div class='menu-img'><img src='images/img-{$panel['page']}.png'></div><p>{$panel['nome']}</p><div class='link-menu'>{$panel['title']}</div></li></a>\n\r";
                        echo $li;
                 } ?>                           
            </ul>
            <div id='gotoTop' class='ocultar'><a href="#top"><img src="images/arrow-top.png" alt=""></a></div>
        </div>  
    </header><!-- end of header -->
</div>