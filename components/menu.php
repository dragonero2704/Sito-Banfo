<secction id="goHere"></secction>
<div class="header_menu">
    <a class="menu_logo" href="home.php">
        <img src="../immagini/misc/ilbanfotipo.png" alt="logo">
    </a>
    <div class="menu">
        <a href="home.php">Home</a>
        <a href="nuoviarticoli.php">News</a>
        <a href="redazione.php">Chi Siamo</a>

        <a class="tdn" href="login.php">Redattore</a>

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