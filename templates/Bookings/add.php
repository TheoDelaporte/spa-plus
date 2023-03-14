<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Réservation</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="./style.css">
    <style>
        *, *:before, *:after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
            background: #ededed;
        }

        input, button {
            border: none;
            outline: none;
            background: none;
            font-family: "Open Sans", Helvetica, Arial, sans-serif;
        }

        .tip {
            font-size: 20px;
            margin: 40px auto 50px;
            text-align: center;
        }

        .cont {
            overflow: hidden;
            position: relative;
            width: 900px;
            height: 80%;
            margin: 0 auto 100px;
            background: #fff;
        }

        .form {
            position: relative;
            width: 640px;
            height: 100%;
            transition: transform 1.2s ease-in-out;
            padding: 50px 30px 0;
        }

        .sub-cont {
            overflow: hidden;
            position: absolute;
            left: 640px;
            top: 0;
            width: 900px;
            height: 100%;
            padding-left: 260px;
            background: #fff;
            transition: transform 1.2s ease-in-out;
        }

        .cont.s--signup .sub-cont {
            transform: translate3d(-640px, 0, 0);
        }

        button {
            display: block;
            margin: 0 auto;
            width: 260px;
            height: 36px;
            border-radius: 30px;
            color: #fff;
            font-size: 15px;
            cursor: pointer;
        }

        .img {
            overflow: hidden;
            z-index: 2;
            position: absolute;
            left: 0;
            top: 0;
            width: 260px;
            height: 100%;
            padding-top: 360px;
        }

        .img:before {
            content: "";
            position: absolute;
            right: 0;
            top: 0;
            width: 900px;
            height: 100%;
            background-image: url("https://installateur-spa-besancon.fr/wp-content/uploads/2020/11/Installateur-Spa-Besancon-Installation-d%E2%80%99un-SPA-dans-un-espace-d%C3%A9tente-massage.jpg");
            background-size: cover;
            transition: transform 1.2s ease-in-out;
        }

        .img:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }

        .cont.s--signup .img:before {
            transform: translate3d(640px, 0, 0);
        }

        .img__text {
            z-index: 2;
            position: absolute;
            left: 0;
            top: 50px;
            width: 100%;
            padding: 0 20px;
            text-align: center;
            color: #fff;
            transition: transform 1.2s ease-in-out;
        }

        .img__text h2 {
            margin-bottom: 10px;
            font-weight: normal;
        }

        .img__text p {
            font-size: 14px;
            line-height: 1.5;
        }

        .cont.s--signup .img__text.m--up {
            transform: translateX(520px);
        }

        .img__text.m--in {
            transform: translateX(-520px);
        }

        .cont.s--signup .img__text.m--in {
            transform: translateX(0);
        }

        .img__btn {
            overflow: hidden;
            z-index: 2;
            position: relative;
            width: 100px;
            height: 36px;
            margin: 0 auto;
            background: transparent;
            color: #fff;
            text-transform: uppercase;
            font-size: 15px;
            cursor: pointer;
        }

        .img__btn:after {
            content: "";
            z-index: 2;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            border: 2px solid #fff;
            border-radius: 30px;
        }

        .img__btn span {
            position: absolute;
            left: 0;
            top: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            transition: transform 1.2s;
        }

        .img__btn span.m--in {
            transform: translateY(-72px);
        }

        .cont.s--signup .img__btn span.m--in {
            transform: translateY(0);
        }

        .cont.s--signup .img__btn span.m--up {
            transform: translateY(72px);
        }

        h2 {
            width: 100%;
            font-size: 26px;
            text-align: center;
        }

        label {
            display: block;
            width: 260px;
            margin: 25px auto 0;
            text-align: center;
        }

        label span {
            font-size: 12px;
            color: #cfcfcf;
            text-transform: uppercase;
        }

        input {
            display: block;
            width: 100%;
            margin-top: 5px;
            padding-bottom: 5px;
            font-size: 16px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.4);
            text-align: center;
        }

        .forgot-pass {
            margin-top: 15px;
            text-align: center;
            font-size: 12px;
            color: #cfcfcf;
        }

        .submit {
            margin-top: 40px;
            margin-bottom: 20px;
            background: #d4af7a;
            text-transform: uppercase;
        }

        .fb-btn {
            border: 2px solid #d3dae9;
            color: #8fa1c7;
        }

        .fb-btn span {
            font-weight: bold;
            color: #455a81;
        }

        .sign-in {
            transition-timing-function: ease-out;
        }

        .cont.s--signup .sign-in {
            transition-timing-function: ease-in-out;
            transition-duration: 1.2s;
            transform: translate3d(640px, 0, 0);
        }

        .sign-up {
            transform: translate3d(-900px, 0, 0);
        }

        .cont.s--signup .sign-up {
            transform: translate3d(0, 0, 0);
        }

        .icon-link {
            position: absolute;
            left: 5px;
            bottom: 5px;
            width: 32px;
        }

        .icon-link img {
            width: 100%;
            vertical-align: top;
        }

        .icon-link--twitter {
            left: auto;
            right: 5px;
        }



        /*****carrousel 3d automatique*****/

        *{box-sizing : border-box}

        img{max-width:100%}

        .contenu_carou_auto{

            margin:2rem auto;
            width:420px;
            height:279px;
            perspective:8000px

        }

        .caroussel-image{

            animation:rotation 24s infinite alternate linear;
            transform-style:preserve-3d;
            position:relative;

        }

        .caroussel-image img{

            position: absolute;
            top:0;
            left: 0;


        }



        .caroussel-image img{

            filter:drop-shadow(0 12px 5px hsla(0,0%,0%,.4));
            width:400px;
            height:266px;
            left:10px;
            outline:1px solid transparent;
            backface-visibility:hidden

        }

        .caroussel-image img:nth-child(1){

            transform:translate3d(0,0,495px)

        }

        .caroussel-image img:nth-child(2){

            transform:rotateY(45deg) translateZ(495px)

        }

        .caroussel-image img:nth-child(3){

            transform:rotateY(90deg) translateZ(495px)

        }

        .caroussel-image img:nth-child(4){

            transform:rotateY(135deg) translateZ(495px)

        }

        .caroussel-image img:nth-child(5){

            transform:rotateY(180deg) translateZ(495px)

        }

        .caroussel-image img:nth-child(6){

            transform:rotateY(225deg) translateZ(495px)

        }

        .caroussel-image img:nth-child(7){

            transform:rotateY(270deg) translateZ(495px)

        }

        .caroussel-image img:nth-child(8){

            transform:rotateY(315deg) translateZ(495px)

        }




        @keyframes rotation{
            from{transform:rotatey(0)}
            to{transform:rotatey(0.5turn)}}

        /*****fin carrousel 3d automatique*****/
    </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="cont">
    <div class="form sign-in">
        <?= $this->Form->create($booking) ?>
        <div class="row">
            <div class="col-md-4">
                <label>
                    <span>La ville de votre spa</span>
                    <!--            <input type="email" />-->
                    <?= $this->Form->control('place', ['label' => false]); ?>
                </label>
            </div>
            <div class="col-md-4">
                <label>
                    <span>Nom</span>
                    <!--            <input type="email" />-->
                    <?= $this->Form->control('full_name', ['label' => false]); ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label>
                    <span>Prénom</span>
                    <!--            <input type="email" />-->
                    <?= $this->Form->control('primary_address_address', ['label' => false]); ?>
                </label>
            </div>
            <div class="col-md-4">
                <label>
                    <span>Adresse mail</span>
                    <!--            <input type="email" />-->
                    <?= $this->Form->control('mail', ['label' => false]); ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label>
                    <span>Rue et ville de facturation</span>
                    <!--            <input type="email" />-->
                    <?= $this->Form->control('primary_address_city', ['label' => false]); ?>
                </label>
            </div>
            <div class="col-md-4">
                <label>
                    <span>Code postal de facturation</span>
                    <!--            <input type="email" />-->
                    <?= $this->Form->control('primary_address_zip', ['label' => false]); ?>
                </label>
            </div>
        </div>
            <div>
                <label>
                    <span>Date de réservation</span>
                    <!--            <input type="email" />-->
                    <?= $this->Form->dateTime('booking_date', ['label' => false]); ?>
                </label>
            </div>
        <?= $this->Form->button(__('Valider'), ['class' => 'submit']) ?>
        <?= $this->Form->end() ?>
    </div>
    <div class="sub-cont">
        <div class="img">
            <div class="img__text m--up">
                <h2>Book E-Zy c'est</h2>
                <p>Réservez un moment détente en sécurité !</p>
                <br>
                <p>Des spas dans le monde entier : Paris, Warsaw, Madrid, Sydney, Istanbul, Prague, Munich, Venice, Oslo, London</p>
            </div>
            <div class="img__text m--in">
                <p>Une détente assurée grâce à Book E-Zy</p>
            </div>
            <div class="img__btn">
                <span class="m--up">Visiter</span>
                <span class="m--in">Réserver</span>
            </div>
        </div>
        <div class="form sign-up">


            <div class="contenu_carou_auto">
                <div class="caroussel-image">
                    <img src="https://www.enpaysdelaloire.com/sites/default/files/styles/sit_thumb/public/sit/images/LOIPDL085V5144UQ/spa-auxbainsmarie-lesessarts-EeB-85-loi-2.jpg?itok=GWgAWeNB" alt>
                    <img src="https://www.enpaysdelaloire.com/sites/default/files/styles/sit_thumb/public/sit/images/LOIPDL085V5144UQ/spa-auxbainsmarie-lesessarts-EeB-85-loi-1.jpg?itok=1YUNtbXS" alt>
                    <img src="https://www.granhotelmiramarmalaga.com/wp-content/blogs.dir/1833/files/fotos-landings/spa-malaga-foto1.jpg" alt>
                    <img src="https://www.granhotelmiramarmalaga.com/wp-content/blogs.dir/1833/files/fotos-landings/spa-malaga-foto2.jpg" alt>
                    <img src="https://www.granhotelmiramarmalaga.com/wp-content/blogs.dir/1833/files/fotos-landings/spa-malaga-foto3.jpg" alt>
                    <img src="https://www.hotelsbarriere.com/content/dam/hotels/visuels-site-national/activites/bien-etre/thalasso-lba-740x480.jpg/jcr%3Acontent/renditions/cq5dam.web.1280.1280.jpeg" alt>
                    <img src="https://www.hotelsbarriere.com/content/dam/hotels/visuels-site-national/activites/bien-etre/desir-2-740x480.jpg/jcr%3Acontent/renditions/cq5dam.web.1280.1280.jpeg" alt>
                    <img src="https://www.hotelsbarriere.com/content/dam/hotels/visuels-site-national/activites/bien-etre/desir-4-740x480.jpg/jcr%3Acontent/renditions/cq5dam.web.1280.1280.jpeg" alt>
                </div>
            </div>



        </div>
    </div>
</div>
<!-- partial -->
<script>
    document.querySelector('.img__btn').addEventListener('click', function () {
        document.querySelector('.cont').classList.toggle('s--signup');
    });
</script>

</body>
</html>
