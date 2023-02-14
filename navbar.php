<header class="menu-principal">
    <main>
        <div class="header-1">
            <div class="logo">
                <img src="./img/iconelogo.png" alt="">
            </div>
            <div class="redes-sociais" style="margin-top: 16px;">
                <ul>
                    <li><a href="https://www.facebook.com/"><img alt="Facebook" title="Facebook"
                                src="./img/facebook.png"></a></li>
                    <li><a href="https://www.instagram.com/"><img alt="Instagram" title="Instagram"
                                src="./img/instagram.png"></a></li>
                    <li><a href="https://web.whatsapp.com/"><img alt="WhatsApp" title="WhatsApp"
                                src="./img/whatsapp.png"></a></li>
                    <li><a href="https://www.linkedin.com/"><img alt="Linkedin" title="Linkedin"
                                src="./img/linkedin.png"></a></li>
                </ul>
            </div>
        </div>
    </main>
</header>
<main class=" col-100 menu-urls">
    <div class="header-2">
        <div class="menu">
            <ul style="margin-top: 16px;">
                <li class="<?=($m == 'home' ? 'active' : ''); ?>"><a href="?m=home">Home</a></li>
                <li class="<?=($m == 'loja' ? 'active' : ''); ?>"><a href="?m=loja">Loja</a></li>
                <li class="<?=($m == 'depoimentos' ? 'active' : ''); ?>"><a href="?m=depoimentos">depoimentos</a></li>
                <li class="<?=($m == 'blog' ? 'active' : ''); ?>"><a href="?m=blog">Blog</a></li>
                <li class="<?=($m == 'contato' ? 'active' : ''); ?>"><a href="?m=contato">Contato</a></li>
            </ul>
        </div>
        <div class="busca">
            <input placeholder="Pesquisar aqui" type="text">
        </div>
    </div>
</main>