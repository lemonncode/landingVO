 <div class="container">
     <div class="card">
         <?php $data = data('benefits') ?>
         <div>
             <img class="vector" src="<?= img("financia.svg") ?>" alt>
         </div>


         <div>


             <h2 class="title"><?= $data['title-1'] ?></h2>
         </div>
         <div>


             <h4 class="subtitle"><?= $data['subtitle-1'] ?></h4>
         </div>

     </div>
     <div class="card">
         <div>
             <img class="vector" src="<?= img("garantia.svg") ?>" alt>
         </div>
         <div>


             <h2 class="title"><?= $data['title-2'] ?></h2>
         </div>
         <div>


             <h4 class="subtitle"><?= $data['subtitle-2'] ?></h4>
         </div>
     </div>
     <div class="card">
         <div>
             <img class="vector" src="<?= img("entrega.svg") ?>" alt>
         </div>
         <div>


             <h2 class="title"><?= $data['title-3'] ?></h2>
         </div>
         <div>


             <h4 class="subtitle"><?= $data['subtitle-3'] ?></h4>
         </div>
     </div>

 </div>