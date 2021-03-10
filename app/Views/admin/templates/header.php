<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel ="stylesheet" href ="<?php echo base_url()?>/style/css/admin.css">
   

    <title><?php if(isset($title)) echo $title ?></title>
  </head>
  <body>
    <?php $uri = service('uri'); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
      <div class="container"> 
        <a class="navbar-brand" href="/"><img src="<?php echo base_url(); ?>/img/popup_img.svg" alt="" height="40" width="40"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php if(session()->get('isLoggedIn')): ?> 
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item <?php echo ($uri->getSegment(1) == '/admin' ? 'active': null) ?>">
              <a class="nav-link active" aria-current="page" href="/admin">Вход</a>
            </li>
            <li class="nav-item <?php echo ($uri->getSegment(1) == '/main_admin' ? 'active': null) ?>">
              <a class="nav-link" href="/dashboard_admin">Главная</a>
            </li>
            <li class="nav-item <?php echo ($uri->getSegment(1) == '/manager' ? 'active': null) ?>">
              <a class="nav-link" href="/manager">Данные с формы</a>
            </li>
            <li class="nav-item <?php echo ($uri->getSegment(1) == '/profile' ? 'active': null) ?>">
              <a class="nav-link" href="/profile">Профиль</a>
            </li>
          </ul>
          <form class="d-flex">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-itemd-flex">
                  <a class="nav-link" href="/logout">Выйти</a>
              </li>
            </ul>
            <?php endif; ?>
          </form>
        </div>
      </div>
  </nav>
 
    