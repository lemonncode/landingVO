<div class="cont">
    <?php $data = data('ocasion') ?>
    <div>
        <h2><?= $data['head'] ?></h2>
    </div>
    <div class="banner">
        <div class="left-oc">
            <img src="<?= img("ocasion-m.png") ?>" alt>

        </div>
        <div class="right-oc">

            <div class="line">


                <h2 class="title"><?= $data['title'] ?></h2>
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

                <?php comp('cta') ?>
            </div>

        </div>

    </div>



</div>