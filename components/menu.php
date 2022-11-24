<secction id="goHere"></secction>
<div class="header_menu">
    <a class="menu_logo" href="/<?=getSubDir()?>/home/">
        <img src="/<?=getSubDir()?>/immagini/misc/ilbanfotipo.png" alt="logo">
    </a>
    <div class="menu">
        <a href="/<?=getSubDir()?>/home/">Home</a>
        <a href="/<?=getSubDir()?>/news/">News</a>
        <a href="/<?=getSubDir()?>/redazione/">Chi Siamo</a>
        <?php
            if(isset($_SESSION['username'])) echo '<a class="tdn" href="logout">Logout</a>';
            else echo '<a class="tdn" href="login">Redattore</a>';
        ?>
    </div>

    <div class="menu_hamburger" onclick="openNav()">
        <!-- <span >&#9776;</span> -->
        <span></span><span></span><span></span>
    </div>
</div>


<script>
    function openNav() {
        let ham = document.getElementsByClassName('menu_hamburger')[0]

        ham.classList.toggle('active');

        let menu = document.getElementsByClassName('menu')[0]

        menu.classList.toggle('active');
    }
</script>