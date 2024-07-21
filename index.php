<?php
include_once ("templates/header.php");


?>


<body>
    <main>
        <div class="title-container">
            <h1> Blog Lumiô </h1>
            <p> Conhecimento e Cuidados para uma Gravidez Saudável </p>
        </div>

        <div class="subtitle-container">
        </div>

        <div class="carrousel-content">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?= $BASE_URL ?>/images/image2_carroussel.jpg" class="d-block w-100"
                            alt="Imagem de dois bebês">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= $BASE_URL ?>/images/image1_carroussel.jpg" class="d-block w-100"
                            alt="Imagem de uma mãe segurando o bebê">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= $BASE_URL ?>/images/image3_carroussel.jpg" class="d-block w-100"
                            alt="Imagem de uma pessoa segurando os pés de um bebê">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div id="card-content">
            <?php foreach ($posts as $post): ?>
                <div class="card">
                    <img src="<?= $BASE_URL ?>/images/<?= $post['img'] ?>" class="card-img-top" alt="<?= $post["title"] ?>">
                    <div class="card-body">
                        <p class="card-title">
                            <a href="<?= $BASE_URL ?>post.php?id=<?= $post['id'] ?>"><?= $post['title'] ?></a>

                        </p>
                        <p class="card-description">
                            <?= $post['description'] ?>
                        </p>
                    </div>

                    <div class="tag-container">
                        <?php foreach ($post["tags"] as $tag): ?>
                            <a href="#"><?= $tag ?></a>
                        <? endforeach; ?>
                    </div>
                    <div class="date">
                        <p><?= $post['date'] ?></p>
                    </div>
                </div>
            <? endforeach; ?>
        </div>

        <div id="contactForm">
            <h1> Contato </h1>
            <form action="form.php" name="sentForm" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Assunto</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Mensagem</label>
                    <textarea name="message" class="form-control" id="message" rows="10" required></textarea>
                </div>
                <div class="button">
                    <button type="submit" name="sentForm"> Enviar </button>
                </div>

            </form>
        </div>
      
    </main>

    <?php include_once ("templates/footer.php"); ?>
</body>

</html>