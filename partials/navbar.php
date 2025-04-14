<?php
function isActive($uri)
{
    $current_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    if ($uri === $current_uri)
        return true;

    return false;
}
?>


<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand fw-bold fs-2" href="#">
            <span class="text-primary">
                <span>&lt;</span><span class="fst-italic text-body">Jasfk</span>/<span>&gt;</span>
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= isActive('/') ? 'active text-primary' : '' ?>" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('/features') ? 'active text-primary' : '' ?>" aria-current="page"
                        href="/features">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActive('/pricing') ? 'active text-primary' : '' ?>" aria-current="page"
                        href="/pricing">Pricing</a>
                </li>
            </ul>
        </div>
    </div>
</nav>