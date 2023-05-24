<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>404</title>
    <link rel="icon" type="image/png" href="assets/3d-cube.ico">
    <link rel="stylesheet" href="
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./css/output.css" />
  </head>
  <body class="bg-heroGradient">
    <!-- Header -->
    <div
          class="container mx-auto px-[94px] lg:px-[47px] md:px-[23.5px] sm:px-[11.75px]"
        >
          <header
            class="mx-auto flex items-center justify-around pt-[44px] lg:px-5"
          >
            <!-- Logo -->

            <article
              class="flex items-center justify-start"
              onclick="location.href='./index.html'"
            >
              <img src="./assets/header/logo.svg" />
              <p class="text-[28px] font-semibold leading-7 text-violet">
                ZeroCubes
              </p>
            </article>

            <!-- Menu Desktop -->

            <nav class="flex flex-grow justify-center md:justify-end sm:hidden">
              <ul class="flex items-center gap-[41px] lg:gap-8">
                <li>
                  <a
                    href="./index.html"
                    class="relative text-[16px] font-semibold leading-4 text-white after:absolute after:left-0 after:-bottom-1 after:h-[1px] after:w-full after:scale-0 after:bg-white after:transition-transform hover:after:scale-100"
                    >Главная</a
                  >
                </li>
                <li>
                  <a
                    href="./instructions.html"
                    class="relative text-[16px] font-semibold leading-4 text-white after:absolute after:left-0 after:-bottom-1 after:h-[1px] after:w-full after:scale-0 after:bg-white after:transition-transform hover:after:scale-100"
                    >Инструкции</a
                  >
                </li>
                <li>
                  <a
                    href="./assembly-online.html"
                    class="relative text-[16px] font-semibold leading-4 text-white after:absolute after:left-0 after:-bottom-1 after:h-[1px] after:w-full after:scale-0 after:bg-white after:transition-transform hover:after:scale-100"
                    >Сборка</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="relative text-[16px] font-semibold leading-4 text-white after:absolute after:left-0 after:-bottom-1 after:h-[1px] after:w-full after:scale-0 after:bg-white after:transition-transform hover:after:scale-100"
                    >Контакты</a
                  >
                </li>
                <?php
                  session_start();
                  if (isset($_SESSION['username'])) {
                    echo '<li class="hidden md:block"><a href="#" class="relative text-[16px] font-semibold leading-4 text-white after:absolute after:left-0 after:-bottom-1 after:h-[1px] after:w-full after:scale-0 after:bg-white after:transition-transform hover:after:scale-100">'.$_SESSION['username'].'</a></li>';
                  } else {
                    echo '<li class="hidden md:block"><a href="#" class="relative text-[16px] font-semibold leading-4 text-white after:absolute after:left-0 after:-bottom-1 after:h-[1px] after:w-full after:scale-0 after:bg-white after:transition-transform hover:after:scale-100">Вход</a></li>';
                  }
                ?>
              </ul>
            </nav>

            <!-- Menu Mobile -->
            <nav
              id="mobile-menu"
              class="fixed left-0 top-0 right-0 bottom-0 hidden items-center justify-center bg-heroGradient"
            >
              <ul class="flex flex-col items-center gap-10">
                <li>
                  <a href="./index.html" class="text-xl text-white">Главная</a>
                </li>
                <li>
                  <a href="./instructions.html" class="text-xl text-white"
                    >Инструкции</a
                  >
                </li>
                <li><a href="./assembly-online.html" class="text-xl text-white">Сборка</a></li>
                <li><a href="#" class="text-xl text-white">Контакты</a></li>
                <?php
                  if (isset($_SESSION['username'])) {
                    echo '<li><a href="login.html" class="text-xl text-white">'.$_SESSION['username'].'</a></li>';
                  } else {
                    echo '<li><a href="login.html" class="text-xl text-white">Вход</a></li>';
                  }
                ?>
              </ul>
            </nav>

            <!-- Log in -->
            <article class="flex md:hidden">
            <?php if (isset($_SESSION['username'])) { ?>
              <a href="login.html" class="custom-button py-[14px] px-12 text-center text-[20px] font-semibold text-white transition-colors hover:bg-[#562cfc]"><?php echo $_SESSION['username'] ?></a>
            <?php } else { ?>
              <a href="login.html" class="custom-button py-[14px] px-12 text-center text-[20px] font-semibold text-white transition-colors hover:bg-[#562cfc]">Вход</a>
            <?php } ?>
            </article>

            <!-- Burger menu -->
            <button
              id="burger"
              class="group relative hidden h-5 w-[30px] sm:block sm:justify-end"
            >
              <span
                class="absolute top-0 left-0 h-[1px] w-full bg-white transition-transform group-[.active]:translate-y-2 group-[.active]:rotate-45"
              ></span>
              <span
                class="absolute top-1/2 left-0 h-[1px] w-full bg-white transition-opacity group-[.active]:opacity-0"
              ></span>
              <span
                class="absolute bottom-0 left-0 h-[1px] w-full bg-white transition-transform group-[.active]:-translate-y-[11px] group-[.active]:-rotate-45"
              ></span>
            </button>
          </header>
    </div>

    <!-- Section Hero -->
    <section
      class="container mx-auto px-[94px] lg:px-[47px] md:px-[23.5px] sm:px-[11.75px]"
    >
      <div>
        <div>
            <img src="./assets/404/Ошибка.png" alt="img" class="hero-image mx-auto mt-14 md:scale-95 sm:scale-75 md:mt-10 sm:mt-5">
            <p class="mt-14 text-[18px] text-grey lg:text-[16px] text-center sm:text-[14px] md:mt-10 sm:mt-5">
                Проверьте правильность url-адреса, и фактор существования данной страницы
            </p>
        </div>
        <div>

        </div>
      </div>
    </section>

    <?php
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }
    $_SESSION['last_page'] = basename($_SERVER['HTTP_REFERER']);
    ?>

    <!-- Кнопка назад -->
    <section class="container mx-auto px-[94px] lg:px-[47px] md:px-[23.5px] sm:px-[11.75px] xs:mt-10">
        <div class="mx-auto mt-14 h-max max-w-[325px] md:mx-auto md:w-[199px] xs:mt-10 xs:w-[127px] md:mt-10 sm:mt-5">
            <button onclick="location.href='<?php echo isset($_SESSION['last_page']) ? $_SESSION['last_page'] : './index.html' ?>'" class="custom-button py-[25px] px-[127px] text-center text-[24px] font-semibold text-white transition-colors hover:bg-[#562cfc] md:px-[70px] md:py-[20px] md:text-xl xs:px-[40px] xs:py-3 xs:text-base">
                Назад
            </button>
        </div>
    </section>


    <!-- Footer -->

    <footer class="mt-16 bg-footerGradient pt-[50px] pb-[50px]">
      <div class="mx-auto max-w-[1072px] px-5">
        <div class="flex justify-between md:flex-wrap md:gap-10">
          <div class="max-w-[270px]">
            <img
              src="./assets/footer/logo.svg"
              onclick="location.href='./index.html'"
              alt="img"
            />
            <p class="mt-[31px] text-xl text-grey sm:text-base">
              Научись собирать самую популярную головоломку в мире менее чем за
              минуту!
            </p>
          </div>

          <div class="grid max-w-[670px] grid-cols-3 gap-[105px] sm:gap-[50px]">
            <div>
              <p class="text-xl font-semibold text-white sm:text-base">
                Главная
              </p>
              <ul class="mt-4 flex flex-col gap-2">
                <li>
                  <a
                    href=""
                    class="text-xl text-[#706C83] transition-colors hover:text-white sm:text-base"
                    >Домашняя</a
                  >
                </li>
                <li>
                  <a
                    href=""
                    class="text-xl text-[#706C83] transition-colors hover:text-white sm:text-base"
                    >Устройство</a
                  >
                </li>
                <li>
                  <a
                    href=""
                    class="text-xl text-[#706C83] transition-colors hover:text-white sm:text-base"
                    >Язык вращений</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <p
                class="text-xl font-semibold text-white sm:text-base"
                onclick="location.href='./instructions.html'"
              >
                Инструкции
              </p>
              <ul class="mt-4 flex flex-col gap-2">
                <li>
                  <a
                    href=""
                    class="text-xl text-[#706C83] transition-colors hover:text-white sm:text-base"
                    >3х3</a
                  >
                </li>
                <li>
                  <a
                    href=""
                    class="text-xl text-[#706C83] transition-colors hover:text-white sm:text-base"
                    >2х2</a
                  >
                </li>
                <li>
                  <a
                    href=""
                    class="text-xl text-[#706C83] transition-colors hover:text-white sm:text-base"
                    >Piraminx</a
                  >
                </li>
                <li>
                  <a
                    href=""
                    class="text-xl text-[#706C83] transition-colors hover:text-white sm:text-base"
                    >Megaminx</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <p class="text-xl font-semibold text-white sm:text-base">
                Сборка
              </p>
              <ul class="mt-4 flex flex-col gap-2">
                <li>
                  <a
                    href=""
                    class="text-xl text-[#706C83] transition-colors hover:text-white sm:text-base"
                    >Сборка онлайн</a
                  >
                </li>
                <li>
                  <a
                    href=""
                    class="text-xl text-[#706C83] transition-colors hover:text-white sm:text-base"
                    >Результаты</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="./js/main.js"></script>
  </body>
</html>
