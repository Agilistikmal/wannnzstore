<?php
// Logic Check User Login here...

?>
<html lang="en" style="scroll-behavior: smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Wannnz Store</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@unocss/reset/tailwind.min.css" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>

<body class="font-[Montserrat]">
  <!-- Hero -->
  <section id="hero" class="bg-gradient-to-tr from-blue-500 to-blue-400 text-bone">
    <div class="w-full max-w-screen-xl mx-auto flex justify-center items-center px-8 py-[144px] md:py-[240px]">
      <div class="text-center max-w-2xl">
        <h1 class="font-semibold text-[32px] md:text-[64px] leading-8">
          <span class="font-black">WANNNZ</span> STORE
        </h1>
        <h2 class="font-medium text-xl leading-5 md:mt-5">
          SMM, PPOB & Topup Game Termurah dan Berkualitas
        </h2>
        <h3 class="text-bone/80 text-sm md:text-base leading-4 mt-2">
          Wannnz Store - SMM, PPOB & Top Up Games Topup Game. PPOB, SMM
          Terpercaya dengan proses 24 Jam. Dengan harga terjangkau.
        </h3>
        <div class="mt-5 flex justify-center items-center gap-2 flex-wrap flex-col-reverse md:flex-row">
          <a href="#about" class="btn">
            <div class="flex items-center gap-2">
              <i class="bx bxs-chevrons-down animate-pulse"></i>
              <p>Learn more</p>
            </div>
          </a>
          <div class="flex justify-center items-center gap-2">
            <a href="/login" class="btn-outline">
              <div class="flex items-center gap-2">
                <i class="bx bxs-user"></i>
                <p>Login</p>
              </div>
            </a>
            <a href="/register" class="btn-outline">
              <div class="flex items-center gap-2">
                <i class="bx bxs-user-plus"></i>
                <p>Register</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature -->
  <section id="feature" class="bg-gradient-to-br from-blue-100 to-bone text-blue-900">
    <div class="w-full max-w-screen-xl mx-auto flex justify-center items-center px-8 pt-[144px] relative">
      <div class="-translate-y-[240px]">
        <div class="flex flex-wrap gap-4 justify-center">
          <div class="p-5 rounded-xl bg-bone shadow-xl border-b-4 border-purple-500 hover:border-blue-400 hover:-translate-y-1 hover:shadow-xl transition duration-500 group w-full max-w-sm">
            <div class="flex items-center gap-4">
              <i class="bx bxs-server text-5xl text-purple-500 group-hover:text-blue-400 transition duration-500"></i>
              <h1 class="font-semibold text-xl">Layanan Terbaik</h1>
            </div>
            <p class="text-sm">
              Kami menyediakan berbagai layanan terbaik untuk kebutuhan Anda.
            </p>
          </div>
          <div class="p-5 rounded-xl bg-bone shadow-xl border-b-4 border-orange-400 hover:border-blue-400 hover:-translate-y-1 hover:shadow-xl transition duration-500 group w-full max-w-sm">
            <div class="flex items-center gap-4">
              <i class="bx bxs-rocket text-5xl text-orange-500 group-hover:text-blue-400 transition duration-500"></i>
              <h1 class="font-semibold text-xl">Proses Otomatis</h1>
            </div>
            <p class="text-sm">
              Pesanan Di Proses Secara Otomatis dan Instant, langsung kepada
              Server kami.
            </p>
          </div>
          <div class="p-5 rounded-xl bg-bone shadow-xl border-b-4 border-green-400 hover:border-blue-400 hover:-translate-y-1 hover:shadow-xl transition duration-500 group w-full max-w-sm">
            <div class="flex items-center gap-4">
              <i class="bx bxs-wallet text-5xl text-green-500 group-hover:text-blue-400 transition duration-500"></i>
              <h1 class="font-semibold text-xl">Deposit Saldo</h1>
            </div>
            <p class="text-sm">
              Deposit Otomatis 24 Jam,Memudahkan anda deposit kapan saja.
            </p>
          </div>
          <div class="p-5 rounded-xl bg-bone shadow-xl border-b-4 border-red-400 hover:border-blue-400 hover:-translate-y-1 hover:shadow-xl transition duration-500 group w-full max-w-sm">
            <div class="flex items-center gap-4">
              <i class="bx bx-support text-5xl text-red-500 group-hover:text-blue-400 transition duration-500"></i>
              <h1 class="font-semibold text-xl">Pelayanan Bantuan</h1>
            </div>
            <p class="text-sm">
              Kami menyediakan beberapa tempat bertanya atau komplain mulai
              dari tiket bantuan, telegram, whatsapp, facebook, Instagram.
            </p>
          </div>
          <div class="p-5 rounded-xl bg-bone shadow-xl border-b-4 border-cyan-400 hover:border-blue-400 hover:-translate-y-1 hover:shadow-xl transition duration-500 group w-full max-w-sm">
            <div class="flex items-center gap-4">
              <i class="bx bxs-devices text-5xl text-cyan-500 group-hover:text-blue-400 transition duration-500"></i>
              <h1 class="font-semibold text-xl">Desain Responsif</h1>
            </div>
            <p class="text-sm">
              Kami Menggunakan Desain Website Yang Dapat Diakses Dari Berbagai
              Device, Daik Smartphone Android Maupun Desktop.
            </p>
          </div>
          <div class="p-5 rounded-xl bg-bone shadow-xl border-b-4 border-yellow-400 hover:border-blue-400 hover:-translate-y-1 hover:shadow-xl transition duration-500 group w-full max-w-sm">
            <div class="flex items-center gap-4">
              <i class="bx bx-code-alt text-5xl text-yellow-500 group-hover:text-blue-400 transition duration-500"></i>
              <h1 class="font-semibold text-xl">Intergritas API</h1>
            </div>
            <p class="text-sm">
              Kami Menyediakan / support pemesanan via API, Sangat Cocok Untuk
              Anda Pengguna H2H / operan.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="bg-gradient-to-tr from-blue-100 to-bone text-blue-900">
    <div class="w-full max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 px-8 pb-[144px]">
      <div class="w-full max-w-lg mx-auto">
        <h1 class="font-bold text-2xl">Tentang Kami</h1>
        <p class="text-justify">
          <span class="text-blue-300">Wannnz Store</span> adalah sebuah
          platform bisnis yang menyediakan berbagai layanan
          <span class="text-orange-500">social media marketing</span> yang
          bergerak terutama di <span class="text-red-500">Indonesia</span>.
          <br />
          <br />
          Dengan bergabung bersama kami, Anda dapat menjadi
          <span class="text-pink-500">penyedia jasa</span> social media atau
          <span class="text-pink-500">reseller</span> social media seperti
          jasa penambah Followers, Likes, dll.
          <br />
          <br />
          Saat ini tersedia berbagai layanan untuk social media terpopuler
          seperti <span class="text-orange-500">Instagram</span>,
          <span class="text-blue">Facebook</span>,
          <span class="text-blue">Twitter</span>,
          <span class="text-red">Youtube</span>, Pulsa All Operator, Token
          PLN, Kuota Internet Saldo E-money dan Sebagainya. Semua produk yang
          kami tawarkan dapat digunakan di seluruh wilayah Indonesia karena
          kami adalah distributor pulsa murah berskala nasional dan
          Anti-Cluster.
        </p>
      </div>
      <div class="w-full max-w-lg mx-auto hidden md:flex items-center justify-center">
        <i class="bx bxs-cuboid text-[320px] text-blue-100"></i>
      </div>
    </div>
    <div class="w-full max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 px-8 pb-[144px]">
      <div class="w-full max-w-lg mx-auto hidden md:flex items-center justify-center">
        <i class="bx bx-question-mark text-[320px] text-blue-100"></i>
      </div>
      <div class="w-full max-w-lg mx-auto">
        <h1 class="font-bold text-2xl">Kenapa Kami?</h1>
        <ul class="pl-5">
          <li class="list-disc list-outside">
            Server pulsa host to host h2h murah dan lengkap.
          </li>
          <li class="list-disc list-outside">
            Anda dapat memilih sendiri produk pulsa terbaik yang bergabung di
            Wannnz Store.
          </li>
          <li class="list-disc list-outside">
            Dapatkan harga pulsa murah, dari berbagai Server pulsa Indonesia,
            dari Agen pulsa nasional.
          </li>
          <li class="list-disc list-outside">
            Selain pulsa, Wannnz Store juga memiliki produk Paket Data, Token
            Listrik, Voucher Games Dan Layanan Social Media Marketing.
          </li>
          <li class="list-disc list-outside">
            Success Rate, Jam Operasional Customer Service, dan Kecepatan
            Transaksi setiap penjual dapat dilihat secara jelas.
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Contact & Statistik -->
  <section id="contact" class="bg-gradient-to-bl from-blue-900 to-blue-700 text-bone">
    <div class="w-full max-w-screen-xl mx-auto px-8 py-[144px]">
      <h1 class="font-semibold text-[64px]">Statistik</h1>
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div class="p-5 rounded-xl bg-gradient-to-tr from-blue-200 to-bone text-blue-700">
          <div class="flex items-center gap-4">
            <i class="bx bxs-user text-5xl"></i>
            <p class="text-xl font-semibold leading-3 -translate-y-1">
              <span class="font-bold text-2xl">671</span>
              <br />
              total pengguna
            </p>
          </div>
        </div>
        <div class="p-5 rounded-xl bg-gradient-to-tr from-blue-200 to-bone text-blue-700">
          <div class="flex items-center gap-4">
            <i class="bx bx-money text-5xl"></i>
            <p class="text-xl font-semibold leading-3 -translate-y-1">
              <span class="font-bold text-2xl">Rp 178.644.541</span>
              <br />
              total pemesanan
            </p>
          </div>
        </div>
        <div class="p-5 rounded-xl bg-gradient-to-tr from-blue-200 to-bone text-blue-700">
          <div class="flex items-center gap-4">
            <i class="bx bxs-package text-5xl"></i>
            <p class="text-xl font-semibold leading-3 -translate-y-1">
              <span class="font-bold text-2xl">12890</span>
              <br />
              total layanan
            </p>
          </div>
        </div>
      </div>
    </div>
    <hr class="border-blue-400/10 border-2 w-full max-w-screen-xl mx-auto">
    <div class="w-full max-w-screen-xl mx-auto px-8 py-[144px]">
      <h1 class="font-semibold text-[64px]">Contact</h1>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
          <form action="" method="post" class="space-y-2">
            <div>
              <label for="full_name">Full Name</label> <br />
              <div class="relative">
                <div class="absolute right-5 top-0 h-full flex items-center">
                  <i class="bx bxs-id-card"></i>
                </div>
                <input type="text" name="full_name" id="full_name" placeholder="Masukkan nama lengkap" class="input" />
              </div>
            </div>
            <div>
              <label for="email">Email</label> <br />
              <div class="relative">
                <div class="absolute right-5 top-0 h-full flex items-center">
                  <i class="bx bxl-gmail"></i>
                </div>
                <input type="email" name="email" id="email" placeholder="Masukkan alamat email" class="input" />
              </div>
            </div>
            <div>
              <label for="message">Message</label> <br />
              <div class="relative">
                <div class="absolute right-5 top-2 h-full flex items-start">
                  <i class='bx bx-text'></i>
                </div>
                <textarea name="message" id="message" class="input" placeholder="Masukkan Pesan"></textarea>
              </div>
            </div>
            <div>
              <button class="btn-outline w-full mt-5 font-semibold">Send Message</button>
            </div>
          </form>
        </div>
        <div class="justify-center hidden md:flex">
          <i class='bx bxs-chat text-[320px] text-blue-400/10'></i>
        </div>
      </div>
      <div class="flex flex-wrap justify-center md:justify-left items-center gap-8 mt-5">
        <a href="mailto:mail@wannnzstore.com" class="flex items-center gap-1">
          <i class='bx bxl-gmail text-2xl'></i>
          <p>mail@wannnzstore.com</p>
        </a>
        <a href="https://wa.me/6282124747599" target="_blank" class="flex items-center gap-1">
          <i class='bx bxl-whatsapp text-2xl'></i>
          <p>+6282124747599</p>
        </a>
      </div>
      <div class="mt-5 grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
        <div class="justify-center hidden md:flex">
          <i class='bx bxs-news text-[320px] text-blue-400/10'></i>
        </div>
        <form action="" method="post">
          <h1 class="font-semibold text-2xl" for="news_letter">News Letter</h1>
          <div class="flex flex-wrap md:flex-nowrap gap-2">
            <div class="relative w-full">
              <div class="absolute right-5 top-0 h-full flex items-center">
                <i class="bx bxl-gmail"></i>
              </div>
              <input type="email" name="email" placeholder="Masukkan alamat email" class="input" />
            </div>
            <div>
              <button class="btn-outline w-full">Subscribe</button>
            </div>
          </div>
        </form>
      </div>
      <div class="hidescroll mt-32 flex justify-between items-center gap-8 bg-bone p-5 rounded-xl overflow-x-scroll">
        <img src="https://seeklogo.com/images/G/gopay-logo-D27C1EBD0D-seeklogo.com.png" alt="" class="h-8 mx-auto">
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/PayPal_logo.svg/527px-PayPal_logo.svg.png" class="h-8 mx-auto" alt="">
        <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Telkomsel_%282021%29.svg" class="h-8 mx-auto" alt="">
        <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Bank_Central_Asia.svg" class="h-8 mx-auto" alt="">
        <img src="https://upload.wikimedia.org/wikipedia/id/5/55/XL_logo_2016.svg" class="h-8 mx-auto" alt="">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/68/BANK_BRI_logo.svg" class="h-8 mx-auto" alt="">
        <img src="https://upload.wikimedia.org/wikipedia/id/5/55/BNI_logo.svg" class="h-8 mx-auto" alt="">
      </div>
    </div>
  </section>
</body>

<!-- UNOCSS CONFIG -->
<script>
  window.__unocss = {
    theme: {
      colors: {
        bone: "#EFF8FD",
        magenta: "#8556B0",
        blue: {
          100: "#dad7f3",
          200: "#a39ce1",
          300: "#6c61ce",
          400: "#4739C2",
          500: "#322888",
          600: "#1c174e",
          700: "#15113a",
          800: "#0e0b27",
          900: "#070613",
        },
      },
    },
    shortcuts: {
      btn: "inline-block px-5 py-1 rounded-xl bg-blue-400 border-2 border-blue-100/50 text-bone hover:-translate-y-1 hover:shadow-lg transition duration-500",
      "btn-outline": "inline-block px-5 py-1 rounded-xl bg-blue-400/10 border-2 border-blue-100/50 text-bone hover:-translate-y-1 hover:shadow-lg transition duration-500",
      input: "outline-none px-5 py-1 rounded-xl bg-blue-400/10 border-2 border-blue-100/50 text-bone w-full",
    },
  };
</script>
<script src="https://cdn.jsdelivr.net/npm/@unocss/runtime"></script>
<style>
  .hidescroll::-webkit-scrollbar {
    display: none;
  }

  .hidescroll {
    -ms-overflow-style: none;
    scrollbar-width: none;
  }
</style>

</html>