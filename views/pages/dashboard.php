<main>
   <i class="fas fa-bars" id="menu-btn" onclick="menudisplayer()"></i>
    <header>
        <?php
    include 'views/includes/header.php';
    ?>
    </header>
    <div class="content flex-s-a" onclick="destroymenu2()">
        <a class="content-box box-6 box-p-12" href="#">
            <figure>
                <img src="views/img/home/services/service1.jpg" alt="" class="dblock w100p">
            </figure>
            <br>
            <p class="tac tbold">Students.</p>
        </a>
        <a class="content-box box-6 box-p-12" href="#">
            <figure>
                <img src="views/img/home/services/service2.jpg" alt="" class="dblock w100p">
            </figure>
            <br>
            <p class="tac tbold">Rooms.</p>
        </a>
        <a class="content-box box-6 box-p-12" href="#">
            <figure>
                <img src="views/img/home/services/service3.jpg" alt="" class="dblock w100p">
            </figure>
            <br>
            <p class="tac tbold">Instructors.</p>
        </a>
        <a class="content-box box-6 box-p-12" href="#">
            <figure>
                <img src="views/img/home/services/service4.jpg" alt="" class="dblock w100p">
            </figure>
            <br>
            <p class="tac tbold">Courses.</p>
        </a>
    </div>
</main>
<footer>
    <?php
    include 'views/includes/footer.php';
    ?>
</footer>
