<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>" />
    <title>EsportNews</title>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?= base_url('faqs') ?>">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container py-5">
        <h1 class="display-5 fw-bold">FAQ (Frequently Asked Questions)</h1>
        <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
        <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-2 card">
            <div class="card-body">
                <h5 class="h5">Pertanyaan? (Q)</h5>
                <p>(A) Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
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
<script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>
