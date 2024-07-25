<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
    <title>MyBlog</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">About Me</h1>
        <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
        <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Siapa Aku</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Bisa Apa Aku</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?</p>
            </div>
        </div>
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Bagaimana Aku</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis commodi tenetur quos ducimus repellat nulla, nam magni. Commodi iusto ad harum voluptas exercitationem facere eos earum laboriosam excepturi quas?</p>
            </div>
        </div>
    </div>
</div>

<div class="container py-4">
    <footer class="pt-3 mt-4 text-muted border-top">
        <div class="container">
            &copy; <?= date('Y') ?>
        </div>
    </footer>
</div>

<!-- Jquery dan Bootstrap JS -->
<script src="<?= base_url('js/jquery.min.js') ?>"></script>
<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
</body>
</html>
