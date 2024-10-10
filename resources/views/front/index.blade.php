<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ideal</title>
    <link rel="stylesheet" href="/front/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<link rel="icon" type="image/x-icon" href="/front/assets/images/logo.png">

<body>
    <nav>
        <div class="container">
            <div class="brand">
                <img src="/front/assets/images/logo.png" alt="logo" />
            </div>
            <div class="phone">
                <a href="tel: +998996092002">
                    <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 10.999h2C22 5.869 18.127 2 12.99 2v2C17.052 4 20 6.943 20 10.999z" />
                        <path
                            d="M13 8c2.103 0 3 .897 3 3h2c0-3.225-1.775-5-5-5v2zm3.422 5.443a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a1 1 0 0 0-.086-1.391l-4.064-3.696z" />
                    </svg>
                    <span>99 609 20 02</span>
                </a>
            </div>
            <div class="location">
                <a href="https://maps.app.goo.gl/zZ3eANUnNqFoC6WE8">
                    <div class="location-item">
                        <svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 4c-7.73 0-14 6.27-14 14 0 10.5 14 26 14 26s14-15.5 14-26c0-7.73-6.27-14-14-14zm0 19c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z" />
                            <path d="M0 0h48v48h-48z" fill="none" />
                        </svg>
                    </div>

                    <div class="location-item">
                        <address>Farg'ona shahar, Sayilgoh ko'chasi, 22-A uy</address>
                        <address>Mo'ljal: "Emirates" kafesi ro'parasi</address>
                    </div>
                </a>
            </div>
            <div class="burger">
                <button class="burger-svg" id="burger-svg">
                    <svg data-name="Layer 1" id="Layer_1" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #000000;
                                }
                            </style>
                        </defs>
                        <title />
                        <path class="cls-1" d="M3,9H29a2,2,0,0,0,0-4H3A2,2,0,0,0,3,9Z" />
                        <path class="cls-1" d="M29,14H3a2,2,0,0,0,0,4H29a2,2,0,0,0,0-4Z" />
                        <path class="cls-1" d="M29,23H3a2,2,0,0,0,0,4H29a2,2,0,0,0,0-4Z" />
                    </svg>
                </button>
                <a href="tel:+998996092002" class="about"> Ma'lumot olish </a>
            </div>
        </div>
    </nav>

    <div class="burger__page">
        <div class="burger__page-left">
            <div class="burger__page-left-wrap">
                <div class="burger__page-left-info">
                    <h2 class="burger__page-left-title">
                        Bog‘lanib, sizga to‘liq ma’lumot beramiz.
                    </h2>
                    <h4 class="burger__page-left-sub-title">
                        Hali ham savollaringiz bormi yoki kurs haqida qaror qabul qila
                        olmayapsizmi? Unda sizga bog‘lanib batafsil ma'lumot beramiz.
                    </h4>
                </div>

                <div class="burger__page-left-form-wrapper">
                    @include('front.form')
                </div>
            </div>
        </div>

        <div class="burger__page-right">
            <button class="close-btn" id="close-btn">
                <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z" />
                </svg>
            </button>

            <ul class="burger__page-right-category">
                <li  style="text-align: center;"><a href="#">Idel o'quv markazi haqida</a></li>
                <li  style="text-align: center;"><a href="#">Kurslarimiz kimlar uchun?</a></li>
                <li  style="text-align: center;"><a href="#">Barcha OTM ga tayyorlanayotganlar uchun</a></li>
                <li  style="text-align: center;"><a href="#">Hozirgi kungacha ta'lim olgan abaturiyantlarimizning 89% o'z natijalariga erishgan</a></li>
                <li  style="text-align: center;"><a href="#">Biz sizlarga Farg'onadagi eng sifatli va ishonchli ta'lim taklif qilamiz</a></li>
            </ul>
        </div>
    </div>

    <header>
        <div class="container">
            <div class="header-form-wrapper">
                <h2>
                    Bizda barcha kurslarimiz uchun birinchi dars bepul. Hoziroq
                    ro'yxatdan o'ting!
                </h2>

                @include('front.form')
            </div>

            <div style="max-width: 800px !important;" class="header-images">
                <img style="width: 100%;  object-fit: contain;" src="/banner.png" alt="images" />
            </div>
        </div>
    </header>

    <main>
        <div class="academy__about">
            <div class="container">
                <h2 class="academy__about-title">Nima uchun Ideal o'quv markazi?</h2>

                <div class="academy__about-items">
                    <!-- item-1 -->
                    <div class="academy__about-item">
                        <div class="icon">
                            <i class="fa-solid fa-user-graduate"></i>
                        </div>
                        <h2 class="title">Ko'p yillik tajriba !</h2>
                        <p>Bizning o'quv markazimizda sizlar ko'p yillik tajribaga ega ustozlardan dars olasizlar.

                        </p>
                    </div>

                    <!-- item-2 -->

                    <div class="academy__about-item">
                        <div class="icon">
                            <i class="fa-solid fa-chart-line"></i>
                        </div>
                        <h2 class="title">Yuqori rengting natija !</h2>
                        <p>
                            Bizning kursimizni tamomlab chiqqan o'quvchilarni 89% o'zlarini yaxshi natijasiga erishgan.
                        </p>
                    </div>

                    <!-- item-3 -->

                    <div class="academy__about-item">
                        <div class="icon">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <h2 class="title">Sifatli ta'lim !</h2>
                        <p>
                            Bizning o'quv markazdagi barcha o'qituvchilarimiz ko'p yillik tajriba va yangi zamonaviy pedagogik ta'lim berishga ega.
                        </p>
                    </div>

                    <!-- item-4 -->

                    <div class="academy__about-item">
                        <div class="icon">
                            <i class="fa-solid fa-school"></i>
                        </div>
                        <h2 class="title">Boshqalardan avzalliklari !</h2>
                        <p>
                           IELTS 7+ , Arab tili cerf B2 , Rus tili C1 darajasidagi yetuk mutahasislar.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        

        <div class="academy__connection">
            <div class="container">
                <div class="academy__connection-info">
                    <h2 class="academy__connection-title">
                        Bog‘lanib, sizga to‘liq ma’lumot beramiz.
                    </h2>
                    <h4 class="academy__connection-sub-title">
                        Hali ham savollaringiz bormi yoki kurs haqida qaror qabul qila
                        olmayapsizmi? Unda sizga bog‘lanib batafsil ma'lumot beramiz.
                    </h4>
                </div>

                <div class="academy__connection-form-wrapper">
                    @include('front.form')
                </div>
            </div>
        </div>

        <div class="academy__courses">
            <div class="container">
                <!--            kurslar qismi        -->
                <div class="academy__courses-wrapper">
                    <h2 class="academy__courses-title">Kurslarimiz</h2>

                    <div class="academy__courses-items">
                        <!-- item-1 -->
                        <div class="academy__courses-item">
                            <h2>Matematika</h2>
                            <img src="/mat.jpg" style="width: 100% ;height:310px;" alt="img" />
                        </div>

                        <!-- item-2 -->
                        <div class="academy__courses-item">
                            <h2>Fizika</h2>
                            <img src="/fizika.jpg" style="width: 100% ;height:310px;" alt="img" />
                        </div>

                        <!-- item-3 -->
                        <div class="academy__courses-item">
                            <h2>Ingliz tili</h2>
                            <img src="/english.jpg" style="width: 100% ;height:310px;" alt="img" />
                        </div>
                        <div class="academy__courses-item">
                            <h2>Arab tili</h2>
                            <img src="/arab.jpg" style="width: 100% ;height:310px;" alt="img" />
                        </div>
                        <div class="academy__courses-item">
                            <h2>Rus tili</h2>
                            <img src="/rus.jpg" style="width: 100% ;height:310px;" alt="img" />
                        </div>
                        <div class="academy__courses-item">
                            <h2>Tarix</h2>
                            <img src="/tarix.jpg" style="width: 100% ;height:310px;" alt="img" />
                        </div>
                        <div class="academy__courses-item">
                            <h2>Kimyo</h2>
                            <img src="/kimyo.jpg" style="width: 100% ;height:310px;" alt="img" />
                        </div>
                        <div class="academy__courses-item">
                            <h2>Biologiya</h2>
                            <img src="/biologiya.jpg" style="width: 100% ;height:310px;" alt="img" />
                        </div>
                        <div class="academy__courses-item">
                            <h2>Geografiya</h2>
                            <img src="/geog.jpg" style="width: 100% ;height:310px;" alt="img" />
                        </div>
                </div>

                <!--              form qismi           -->
                <div class="academy__courses-connection">
                    <div class="academy__courses-connection-info">
                        <h2 class="academy__connection-title">
                            Bog‘lanib, sizga to‘liq ma’lumot beramiz.
                        </h2>
                        <h4 class="academy__connection-sub-title">
                            Hali ham savollaringiz bormi yoki kurs haqida qaror qabul qila
                            olmayapsizmi? Unda sizga bog‘lanib batafsil ma'lumot beramiz.
                        </h4>
                    </div>
                    <div class="academy__courses-connection-form-wrapper">
                        @include('front.form')
                    </div>
                </div>
            </div>
        </div>

        <div class="academy__map">
            <div class="container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48635.56766178973!2d71.75614444853515!3d40.37066644049959!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38bb831a6b239f3f%3A0x3799d02948391e66!2sIdeal%20oquv%20markazi!5e0!3m2!1sru!2s!4v1728463095915!5m2!1sru!2s"
                    height="450" style="border: 0" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
            <div class="footer__top">
                <div class="brand">
                    <img src="/front/assets/images/logo.png" alt="logo" />
                </div>
                <ul class="footer-category">
                    <li><a href="#">Bosh sahifa</a></li>
                    <li><a href="#">Kurslarimiz</a></li>
                    <li><a href="#">O'qituvchilar</a></li>
                    <li><a href="#">Biz haqimizda</a></li>
                </ul>
            </div>

            <div class="footer__body">
                <div class="footer__body-info">
                    <div class="phone">
                        <a href="tel: +998996092002">
                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 10.999h2C22 5.869 18.127 2 12.99 2v2C17.052 4 20 6.943 20 10.999z"
                                    fill="#fff" />
                                <path
                                    d="M13 8c2.103 0 3 .897 3 3h2c0-3.225-1.775-5-5-5v2zm3.422 5.443a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a1 1 0 0 0-.086-1.391l-4.064-3.696z"
                                    fill="#fff" />
                            </svg>
                            <span>99 609 20 02</span>
                        </a>
                    </div>
                    <div class="location">
                        <a href="https://maps.app.goo.gl/zZ3eANUnNqFoC6WE8">
                            <div class="location-item">
                                <svg height="48" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24 4c-7.73 0-14 6.27-14 14 0 10.5 14 26 14 26s14-15.5 14-26c0-7.73-6.27-14-14-14zm0 19c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5z"
                                        fill="#fff" />
                                    <path d="M0 0h48v48h-48z" fill="none" />
                                </svg>
                            </div>

                            <div class="location-item">
                                <address>Farg'ona shahar, Sayilgoh ko'chasi, 22-A uy</address>
                                <address>Mo'ljal: "Emirates" kafesi ro'parasi</address>
                            </div>
                        </a>
                    </div>

                    <div class="messengers">
                        <!-- instagram -->
                        <a href="https://www.instagram.com/Ideal_markaz">
                            <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <title />
                                <path fill="#fff"
                                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z" />
                            </svg>
                        </a>
                        <!-- telegram -->
                        <a href="https://t.me/ideal_markaz">
                            <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#fff"
                                    d="M446.7 98.6l-67.6 318.8c-5.1 22.5-18.4 28.1-37.3 17.5l-103-75.9-49.7 47.8c-5.5 5.5-10.1 10.1-20.7 10.1l7.4-104.9 190.9-172.5c8.3-7.4-1.8-11.5-12.9-4.1L117.8 284 16.2 252.2c-22.1-6.9-22.5-22.1 4.6-32.7L418.2 66.4c18.4-6.9 34.5 4.1 28.5 32.2z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <div class="footer__body-info">
                    <h2 class="academy__connection-title">
                        Bog‘lanib, sizga to‘liq ma’lumot beramiz.
                    </h2>
                    <h4 class="academy__connection-sub-title">
                        Hali ham savollaringiz bormi yoki kurs haqida qaror qabul qila
                        olmayapsizmi? Unda sizga bog‘lanib batafsil ma'lumot beramiz.
                    </h4>
                </div>
                <!--      form qismi -->
                <div class="footer__body-form-wrapper">
                    <form>
                        <input type="text" name="name" required placeholder="Ism" id="name" />

                        <input type="text" name="phone" required placeholder="99-999-99-99" minlength="9" id="phone" />

                        <select name="courses" id="courses" required class="courses-select">
                            <option value="" disabled="" selected="">Kursni tanlang</option>
                            <option value="Web Dasturlash">Web Dasturlash</option>
                            <option value="SMM Kursi">SMM Kursi</option>
                            <option value="Mobil Grafika Kursi">Mobil Grafika Kursi</option>
                            <option value="Grafik Dizayn Kursi">Grafik Dizayn Kursi</option>
                            <option value="Kompyuter Savodxonligi">
                                Kompyuter Savodxonligi
                            </option>
                        </select>

                        <button class="white-academy" id="white-academy" type="submit">
                            <span class="white-academy__span">Ma'lumot olish</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Button elementini id orqali ushlab olamiz
      const Open_button = document.getElementById("burger-svg");
      const Close_button = document.getElementById("close-btn");
      // Burger-page elementini class nomi orqali ushlab olamiz
      const burgerPage = document.querySelector(".burger__page");

      // Buttonga click eventini qo'shamiz
      Open_button.addEventListener("click", function () {
        burgerPage.classList.add("open-page");
      });
      // Buttonga click eventini o'chiramiz
      Close_button.addEventListener("click", function () {
        burgerPage.classList.remove("open-page");
      });
    </script>
</body>

</html>