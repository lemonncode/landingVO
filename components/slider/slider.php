<div class=slider>

    <div class=blue>
        <div>

            <img class="b-back" src="<?= img("rect.png") ?>">
        </div>
        <div class="side">
            <?php $data = data('banner') ?>

            <h2> <?= $data['title'] ?></h2>
            <h2> <?= $data['title-m'] ?></h2>
            <div class="info-text">

                <p> <?= $data['text-1'] ?></p>
                <p> <?= $data['text-2'] ?> <span><?= $data['text-3'] ?> </span></p>

                <p> <?= $data['text-4'] ?></p>
            </div>
            <div><?php comp('want') ?> </div>
        </div>
    </div>
    <div class="gray">
        <img src="<?= img("blue-c.png") ?>">
    </div>
</div>
<!-- <div class="s-points">
    <li>
        <ul> <img class="ic" src="<?= img("s-left.svg") ?>"></ul>
        <ul> <img class="ic" src="<?= img("active.svg") ?>"></ul>
        <ul> <img class="ic" src="<?= img("no-active.svg") ?>"></ul>
        <ul> <img class="ic" src="<?= img("no-active.svg") ?>"></ul>
        <ul> <img class="ic" src="<?= img("s-right.svg") ?>"></ul>
        
      
    </li>

</div> -->