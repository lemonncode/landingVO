<div class="cont">
    <?php $data = data('renting') ?>
    <div>
        <h2><?= $data['head'] ?> </h2>
    </div>

    <div class="banner">
        <div class="left">
            <div class="line">


                <h2 class="title"><?= $data['title'] ?></h2>
                <h2 class="title"><?= $data['title-m'] ?></h2>
            </div>
            <div class="line">
                <img class="ic" src="<?= img("_icono.svg") ?>" alt>

                <p><?= $data['text-1'] ?></p>
            </div>
            <div class="line">

                <img class="ic" src="<?= img("_icono.svg") ?>" alt>

                <p><?= $data['text-2'] ?></p>
            </div>
            <div class="line">

                <img class="ic" src="<?= img("_icono.svg") ?>" alt>

                <p><?= $data['text-3'] ?></p>
            </div>
            <div>

                <?php comp('cta-r') ?>
            </div>

        </div>
        <div class="right">
            <img src="<?= img("renting.png") ?>" alt>
            <img src="<?= img("renting-m.png") ?>" alt>

        </div>

    </div>
    <div>
        <h2 class="title-c"><?= $data['brands'] ?></h2>
    </div>
</div>


<div class="logos">
    <div class="logos-slide">
        <div class="card-logo">

            <img src="<?= img("1.png") ?>">

        </div>
        <div class="card-logo">

            <img src="<?= img("2.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("3.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("4.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("5.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("6.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("7.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("8.png") ?>">
        </div>


    </div>
    <div class="logos-slide">
        <div class="card-logo">

            <img src="<?= img("1.png") ?>">

        </div>
        <div class="card-logo">

            <img src="<?= img("2.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("3.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("4.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("5.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("6.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("7.png") ?>">
        </div>
        <div class="card-logo">

            <img src="<?= img("8.png") ?>">
        </div>


    </div>
</div>