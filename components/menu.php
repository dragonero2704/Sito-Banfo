<secction id="goHere"></secction>
<div class="header_menu">
    <a class="menu_logo" href="./home">
        <img src="./immagini/misc/ilbanfotipo.png" alt="logo">
    </a>
    <div class="menu">
        <a href="./home">Home</a>
        <a href="./news">News</a>
        <a href="./redazione">Chi Siamo</a>
        <?php
        if (isset($_SESSION['username'])) echo '<a class="tdn" href="./logout">Logout</a>';
        else echo '<a class="tdn" href="./login">Redattore</a>';
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


    // menu.addEventListener('')
    window.onscroll = (ev) => {
        let menu = document.getElementsByClassName("header_menu")[0];

        let scrollTop = window.pageYOffset ?? document.body.scrollTop
        // console.log(scrollTop)
        let screenH = window.visualViewport.height
        if (scrollTop >= screenH) {
            menu.classList.add("active")
        } else {
            menu.classList.remove("active")
        }
    }
</script>