<section class="fixed bottom-8 left-8 flex flex-col gap-3">
    <div class="socials flex-col gap-3 hidden">
        <a href="https://www.youtube.com/channel/UCYVFoTowxzsAFT86emL336Q" class="bg-primary w-14 h-14 p-5 flex items-center justify-center rounded-full duration-700 hover:cursor-pointer hover:bg-primary-alt">
            <i class='bx bxl-youtube text-white text-3xl' ></i>
        </a>

        <a href="https://www.tiktok.com/@berbinar.in?_t=8zrlrhuqnha&_r=1" class="bg-primary w-14 h-14 p-5 flex items-center justify-center rounded-full duration-700 hover:cursor-pointer hover:bg-primary-alt">
            <img src="{{ asset('assets/images/tiktok.png') }}" class="w-full object-contain h-[2rem]" />
        </a>

        <a href="https://wa.me/6282141869800" class="bg-primary w-14 h-14 p-5 flex items-center justify-center rounded-full duration-700 hover:cursor-pointer hover:bg-primary-alt">
            <i class='bx bxl-whatsapp text-white text-3xl'></i>
        </a>

        <a href="https://twitter.com/BerbinarIn" class="bg-primary w-14 h-14 p-5 flex items-center justify-center rounded-full duration-700 hover:cursor-pointer hover:bg-primary-alt">
            <i class='bx bxl-twitter text-white text-3xl' ></i>
        </a>

        <a href="https://instagram.com/berbinar.in" class="bg-primary w-14 h-14 p-5 flex items-center justify-center rounded-full duration-700 hover:cursor-pointer hover:bg-primary-alt">
            <i class='bx bxl-instagram text-white text-3xl' ></i>
        </a>
    </div>

    <article class="cta bg-primary w-14 h-14 p-5 flex items-center justify-center rounded-full cursor-pointer">
        <i class='bx bxs-purchase-tag-alt text-white text-3xl mt-1' ></i>
    </article>
</section>

<script>
    const cta = document.querySelector(".cta")
    const socials = document.querySelector(".socials")
    cta.addEventListener("click", function () {
        socials.classList.toggle("hidden")
        socials.classList.toggle("flex")
    })
</script>