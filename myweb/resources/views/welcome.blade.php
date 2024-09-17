<x-layout>
    <header class="h-screen bg-[#1d1e20]">
        <nav class="pt-16">
            <div class="flex gap-32 justify-center items-center">
                <a href="#home"
                    class="font-poppins text-base font-bold grid grid-rows-2 gap-2 justify-items-center text-gray-100 hover:text-orange-500">Home
                    <i class="fa-regular fa-circle "></i>
                </a>
                <a href="#about"
                    class="font-poppins text-base font-bold grid grid-rows-2 gap-2 justify-items-center text-gray-100 hover:text-orange-500">About
                    Me
                    <i class="fa-regular fa-circle"></i>
                </a>
                <a href="#"
                    class="font-poppins text-base font-bold grid grid-rows-2 gap-2 justify-items-center text-gray-100 hover:text-orange-500">Portofolio
                    <i class="fa-regular fa-circle"></i>
                </a>
            </div>
        </nav>
        {{-- <nav>
            <div class="flex gap-10 justify-center items-center">
                <div class="flex flex-col items-center">
                    <a href="#" class="text-white">Home</a>
                    <i class="fa-regular fa-circle text-gray-100"></i>
                </div>
        
                <div class="flex flex-col items-center">
                    <a href="#" class="text-white">About Me</a>
                    <i class="fa-regular fa-circle text-gray-100"></i>
                </div>
        
                <div class="flex flex-col items-center">
                    <a href="#" class="text-white">Portfolio</a>
                    <i class="fa-regular fa-circle text-gray-100"></i>
                </div>
            </div>
        </nav>
         --}}
        <div class="px-16 pt-20">
            <div class="flex justify-between items-center" id="#home">
                <div class="grid">
                    <h1 class="font-poppins text-gray-400 text-7xl font-semibold">I'm a</h1>
                    <h1 class="font-poppins text-white text-8xl font-bold">Full Stack </h1>
                    <h1 class="font-poppins text-white text-9xl font-bold">Developer</h1>
                </div>
                <div class="flex flex-col items-center">
                    <p class="font-poppins text-white text-base">2022</p>
                    <div class="w-px h-80 bg-gradient-to-b from-slate-700 via-slate-200 to-slate-700"></div>
                    <p class="font-poppins text-white text-base">2024</p>
                </div>
            </div>
            <div class="flex gap-10 text-white ps-3 pt-24">
                <a href="https://www.linkedin.com/in/naufal-nabbih/" class="flex items-center gap-3 font-bold text-xl">
                    <i class="fa-brands fa-linkedin-in fa-bounce fa-xl"></i>
                </a>

                <a href="">
                    <i class="fa-brands fa-instagram fa-bounce fa-xl"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-twitter fa-bounce fa-xl"></i>
                </a>
            </div>
        </div>
    </header>
    <main class="h-screen bg-white">
        <div class="px-2">
            <div id="about">
                <div class="grid w-full justify-center pt-1 absolute z-0">
                    <h1 class="font-poppins font-semibold text-[130px] text-gray-100">Who Am I!</h1>
                </div>
                <div class="relative grid w-full justify-center pt-[87px] z-10">
                    <h1 class="font-poppins font-semibold text-4xl text-[#1d1e20]">About Me</h1>
                </div>
            </div>
        </div>
    </main>
</x-layout>
