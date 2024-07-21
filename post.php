<?php
 include_once("templates/header.php");


if (isset($_GET["id"])) {
    $postId = $_GET["id"];
    $currentPost;

    foreach ($posts as $post) // Eu varro aqui todos os post, caso ele combine com o id que eu passei, eu achei meu post para ser exibido
    {
        if ($post["id"] == $postId) {
            $currentPost = $post;
        }
    }


}
?>

<body>
    <main id="post-container1">
        <div class="content-container">
            <h1 id="main-title">
                <?= $currentPost["title"] ?>
            </h1>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/images/<?= $currentPost["img"] ?>" alt=" <?= $currentPost["title"] ?>">
            </div>
            <p class="text-post">
                <?= $currentPost["post-text"] ?>
            </p>
        </div>

    <?php  include_once("templates/footer.php"); ?>
</body>