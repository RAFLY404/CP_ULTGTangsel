<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <title>PLN ULTG Tangselq</title>

</head>

<body>
  
  <nav class="p-5 bg-white shadow md:flex md:items-center md:justify-between">
    <div class="flex justify-between items-center ">
      <span class="text-2xl font-[Poppins] cursor-pointer">
        <h1>PLN ULTG Tangsel</h1>
      </span>

      <span class="text-3xl cursor-pointer mx-2 md:hidden block">
        <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
      </span>
    </div>

    <ul class="md:flex md:items-center z-2 md:z-auto md:static absolute bg-white w-full left-0 md:w-auto md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class=" hover:text-cyan-500 duration-500 md:text-md lg:text-xl">HOME</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="hover:text-cyan-500 duration-500 md:text-md lg:text-xl">PROFIL</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="hover:text-cyan-500 duration-500 md:text-md lg:text-xl">GARDU INDUK</a>
      </li>
      <li class="mx-4 my-6 md:my-0">
        <a href="#" class="hover:text-cyan-500 duration-500 md:text-md lg:text-xl">CONTACT</a>
      </li>
    </ul>
  </nav>

  <div class="bg-sky-300 w-auto shadow-md">
    <div class="p-10">
      <h1 class="
      text-4xl font-bold text-white cursor-pointer
      md:text-5xl lg:text-6xl
      ">About us</h1>
      <p class="
      mt-3 text-white
      md:text-lg lg:text-xl
      ">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam pariatur fugit molestiae inventore, voluptatum cupiditate quod amet nostrum reiciendis eveniet.
    </p>
      <button class="
      mt-5 text-sm bg-green-400 p-3 rounded-xl font-semibold border-2 border-green-400 shadow-xl duration-200
      hover:border-green-600 hover:bg-green-600 hover:text-white hover:duration-300
      md:text-md lg:text-lg
      "><a href="">Pelajari Lebih Lanjut!</a></button>
    </div>
  </div>

  <div class="mt-10 md:flex">
    <div class="
    w-3/4 mx-auto p-3 shadow-xl rounded-xl bg-slate-50 mt-5 cursor-pointer
    md:w-96 md:mx-5
    lg:w-1/2 lg:mx-10
    ">
      <img src="https://cdn.discordapp.com/attachments/821769149785178192/1143446036019413032/Gardu-Induk1.jpg" alt="">
        <h1 class="
        mt-4 font-bold text-xl
        lg:text-2xl
        ">Visi PLN ULTG Tangsel</h1>
        <p class="mt-1 lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda veritatis cupiditate laboriosam sint beatae suscipit nam iusto, reprehenderit architecto veniam!</p>
    </div>

    <div class="
    w-3/4 mx-auto p-3 shadow-xl rounded-xl bg-slate-50 mt-5 cursor-pointer
    md:w-96
    lg:w-1/2 lg:mx-10
    ">
      <img src="https://cdn.discordapp.com/attachments/821769149785178192/1143446036019413032/Gardu-Induk1.jpg" alt="">
        <h1 class="
        mt-4 font-bold text-xl
        lg:text-2xl
        ">Misi PLN ULTG Tangsel</h1>
        <p class="mt-1 lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda veritatis cupiditate laboriosam sint beatae suscipit nam iusto, reprehenderit architecto veniam!</p>
    </div>
  </div>

   <!-- Slider main container -->
<div class="
swiper w-full h-[400px] mt-20 bg-slate-100 shadow-xl
">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->

    {{-- slide 1 --}}
    <div class="swiper-slide">
      <div class="lg:flex">
        <div class="">
          <img src="https://cdn.discordapp.com/attachments/821769149785178192/1143446036019413032/Gardu-Induk1.jpg" alt="" class="
          w-32 
          h-32 
          mx-auto 
          mt-7 
          rounded-full 
          lg:w-44 
          lg:h-44 
          lg:ml-32
          ">
          <h1 class="
          font-bold
          text-lg
          mt-6 
          text-center
          md:text-xl
          lg:text-2xl 
          lg:text-left 
          lg:ml-28 
          lg:w-56 
          lg:mt-10
          ">Manajer PLN ULTG Tanggerang Selatan</h1>
        </div>
        <div class="">
          <h1 class="
          font-bold text-md mt-2 text-center
          md:text-xl
          lg:text-4xl lg:mt-20
          ">2022 - Sekarang</h1>
          <p class="
          text-center mx-7 mt-5
          md:text-lg
          lg:text-xl lg:text-center lg:mx-20
          ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Neque modi itaque facilis deleniti sint eos officia, ipsum iusto officiis aperiam.</p>
  </div>
      </div>
    </div>

    <div class="swiper-slide">Slide 2</div>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>

</div>
  

  
  <script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[70px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }

    const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

});
  </script>

</body>

</html>