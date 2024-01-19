<section id="slider" class="L" <?= reveal('L2R') ?>>
    <?php comp('slider') ?> </section>




<section id="show_vehicles">
    <?php $data = data('vehicles') ?>
    <div>


        <h2 <?= reveal('R2L', ['delay' => 0.25]) ?>> <?= $data['title'] ?></h2>

    </div>
    <div class="container-grid">
        <div <?= reveal('card-up', ['delay' => 0.09]) ?>>
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

                    <?php comp('cta-r') ?>
                </div>

            </div>
            <div class="pict">

                <img class="img-car" src="<?= img("coche-rent.png") ?>" alt="coche-gris">
            </div>
        </div>
        <div <?= reveal('card-up', ['delay' => 0.16]) ?>>
            <div class="info">
                <div>
                    <h3><?= $data['coche']['title'] ?></h3>
                </div>
                <div>
                    <h4>
                        <?= $data['coche']['text'] ?>
                    </h4>
                    <h4>
                        <?= $data['coche']['text-m'] ?>
                    </h4>
                </div>
                <div class="cta">

                    <?php comp('cta-o') ?>
                </div>

            </div>
            <div class="pict-b">

                <img class="img-car" src="<?= img("coche-ocasion.png") ?>" alt="coche-negro">
            </div>
        </div>
        <div <?= reveal('card-up', ['delay' => 0.2]) ?>>
            <div class="info">
                <div>
                    <h3><?= $data['motos']['title'] ?></h3>
                </div>
                <div>
                    <h4>
                        <?= $data['motos']['text'] ?>
                    </h4>

                    <h4>
                        <?= $data['motos']['text-m'] ?>
                    </h4>

                </div>
                <div>

                    <?php comp('cta-m') ?>
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
        <div <?= reveal('D2U', ['delay' => 0.25]) ?>>

            <?php $data = data('benefits') ?>


            <h2 class="head-title"><?= $data['title'] ?></h2>
            <h2 class="head-title"><?= $data['title-m'] ?></h2>
        </div>


        <div>

            <?php comp('benefits-cards') ?>

        </div>

    </div>
</section>
<section id="renting" <?= reveal('L2R', ['delay' => 0.50]) ?>>

    <div>

        <?php comp('renting') ?>



    </div>
    <div class="sep"></div>

</section>
<section id="ocasion" <?= reveal('R2L', ['delay' => 0.55]) ?>>
    <div>

        <?php comp('ocasion') ?>



    </div>

</section>
<section id="motos" <?= reveal('L2R', ['delay' => 0.60]) ?>>
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