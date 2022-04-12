<main>
    <div class="row row-cols-lg-5 pt-5 pb-4">
        <div class="card-song col-6 col-md-4 col-lg mb-5 text-center d-flex justify-content-center">
            <?php foreach($arr_album as $album) { ?>
                <div class=" help pb-5">
                    <img class="img-fluid pt-4" :src="poster" :alt="author">
                    <h2 class="text-white text-uppercase fs-4 pt-3"><?= $album['title'] ?></h2>
                    <p class="fs-5 text-secondary"><?= $album['author'] ?></p>
                    <p class="fs-6 text-secondary"><?= $album['year'] ?></p>
                </div> <?php
            }?>
        </div>
    </div>
</main>