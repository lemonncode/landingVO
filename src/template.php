<section id="hero">
    <class id="header_content">

        <div class="slider">
            SLIDER
        </div>
    </class>


</section>



<section id="show_vehicles">
    <?php $data = data('vehicles') ?>
    <div>


        <h2> <?= $data['title'] ?></h2>

    </div>
    <div class="container-grid">
        <div>
            <?php $data = data('vehicles') ?>
            <div class="info">
                <div>
                    <h3><?= $data['renting']['title'] ?></h3>
                </div>
                <div>
                    <h4>
                        <?= $data['renting']['text'] ?>
                    </h4>
                </div>
                <div>

                    <?php comp('cta') ?>
                </div>

            </div>
            <div class="pict">

                <img class="img-car" src="<?= img("coche-rent.png") ?>" alt="coche-gris">
            </div>
        </div>
        <div>
            <div class="info">
                <div>
                    <h3><?= $data['coche']['title'] ?></h3>
                </div>
                <div>
                    <h4>
                        <?= $data['coche']['text'] ?>
                    </h4>
                </div>
                <div class="cta">

                    <?php comp('cta') ?>
                </div>

            </div>
            <div class="pict-b">

                <img class="img-car" src="<?= img("coche-ocasion.png") ?>" alt="coche-negro">
            </div>
        </div>
        <div>
            <div class="info">
                <div>
                    <h3><?= $data['motos']['title'] ?></h3>
                </div>
                <div>
                    <h4>
                        <?= $data['motos']['text'] ?>
                    </h4>
                </div>
                <div>

                    <?php comp('cta') ?>
                </div>

            </div>
            <div class="pict-1">

                <img class="img-car" src="<?= img("moto-1.png") ?>" alt>

            </div>
            <div class="pict-2">

                <img class="img-car" src="<?= img("moto-2.png") ?>" alt>

            </div>

        </div>

    </div>

</section>
<section id="benefits">
    <div class="container">
        <div>

            <?php $data = data('benefits') ?>


            <h2 class="head-title"><?= $data['title'] ?></h2>
        </div>


        <div>

            <?php comp('benefits-cards') ?>

        </div>

    </div>
</section>
<section id="renting">

    <div>

        <?php comp('renting') ?>



    </div>

</section>
<section id="ocasion">
    <div>

        <?php comp('ocasion') ?>



    </div>

</section>
<section id="motos">
    <div>

        <?php comp('motos') ?>



    </div>

</section>
<section>
    <div class="legal">
        <?php $data = data('legal') ?>
        <p><?= $data['text-1'] ?></p>
        <p><?= $data['text-2'] ?></p>
    </div>
</section>