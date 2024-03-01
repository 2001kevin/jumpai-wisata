@extends('navbar')
@section('main')
    <div
        class="bg-black bg-width bg-[url('https://ik.imagekit.io/u1ds9zj1i/images/jumbotron.png?updatedAt=1708904436301')] bg-cover">
        <div class="mt-[90px] h-screen flex flex-col justify-center items-center delay-[300ms] duration-[1200ms] taos:translate-y-[200px] taos:opacity-0"
            data-taos-offset="300">
            <div class="text-white text-[64px] font-medium font-serif">
                <h1>Welcome to Jumpai</h1>
            </div>
            <div class="px-[50vh] text-center text-white font-light">
                <p>
                    Embark on a coastal escapade at Jumpai, where the rhythmic waves
                    create a mesmerizing backdrop. Dive into the allure of the ocean, as
                    you immerse yourself in a seaside adventure filled with exhilarating
                    waves and picturesque serenity.
                </p>
            </div>

            <button type="button" class="px-5 py-2 rounded-full bg-[#D9ED82] mt-4 font-bold">
                Get to Know
            </button>
        </div>
    </div>
    <div class="flex flex-col justify-center items-center font-semibold font-serif text-[55px] text-[#246E79] mt-6">
        <h1 class="delay-[300ms] duration-[1200ms] taos:translate-x-[200px] taos:opacity-0" data-taos-offset="300">A Visual
            Journey in Jumpai</h1>
    </div>
    <div class="px-[40vh] text-center text-[#246E79] mt-[15px] mb-6">
        <p class="delay-[300ms] duration-[1200ms] taos:translate-x-[-200px] taos:opacity-0" data-taos-offset="300">
            Hey there! Dive into our cool intro video and get a taste of the awesome
            vibes at Jumpai. It's all about soaking up the killer views, soaking in
            the local culture, and catching those good vibes that make this spot so
            rad. Our video spills the beans on what makes Jumpai so epic, with all
            the sights, sounds, and experiences you can expect. Get ready for a
            visual adventure that'll have you itching to hit up Jumpai and see what
            makes it so amazing. Join us for this cinematic journey – it's gonna be
            a blast!
        </p>
    </div>
    <div class="flex flex-col justify-center items-center">
        <iframe width="960" height="480" src="https://www.youtube.com/embed/QKTFz4m79zc?si=Ubd63b7IxMyxvwn4"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        {{-- <video width="960" height="120" controls>
        <source src="./assets/videos/copy_CC89864C-3D09-4C33-A65E-F52ED91859BF.mov" type="video/mp4">
        Your browser does not support the video tag.
      </video> --}}
        <div class="font-medium font-serif text-[55px] text-[#246E79] mt-6">
            <h1 class="delay-[300ms] duration-[1200ms] taos:translate-y-[200px] taos:opacity-0" data-taos-offset="300">
                Insightful Findings</h1>
        </div>
        <div id="default-carousel"
            class="flex px-[16vh] mb-6 delay-[300ms] duration-[1200ms] taos:translate-x-[200px] taos:opacity-0"
            data-carousel="slide" data-taos-offset="300">
            <div class="flex justify-center text-[#246E79]" data-carousel-item>
                <div>
                    <h1 class="text-[50px] font-serif">Telek Dance</h1>
                    <p class="text-[12px] leading-loose ">
                        The Telek dance serves as a complementary element in religious
                        ceremonies at Pura Jumpai. This dance is closely <br> related to the
                        presence of Barong Ket in its performance. It can be said that this
                        dance is sacred and has been passed <br> down as a cultural heritage for
                        generations in the Jumpai community. Click the button below to
                        explore more details <br> about this dance, which has become the identity
                        of the Jumpai Village.
                    </p>

                </div>

                <div
                    class="bg-[url('https://ik.imagekit.io/u1ds9zj1i/images/taribarong.png?updatedAt=1708904438109')] bg-cover rounded-xl shadow-2xl h-[50vh] w-[70vh] ml-[60px]">
                </div>
            </div>
        </div>
        <div class="text-center mb-10">
            <h2 class="text-[40px] font-medium mb-2 font-serif">Stay connected with us!</h2>
            <p class="text-[20px]">Be the first to know when the new blogs are posted on this website.</p>
        </div>
    </div>

    <div class="flex justify-between justify-center items-center bg-[#246E79] h-[370px] p-[16vh]">
        <div class="text-white mt-4">
            <img class="mb-6" src="https://ik.imagekit.io/u1ds9zj1i/images/JUMPAI.png?updatedAt=1708904432736"
                alt="">
            <div class="text-justify w-[80vh]">
                <p class="text-[14px] mb-6">Embark on a coastal adventure at Jumpai, nestled near the pristine beaches of
                    Bali. This hidden gem invites you to embrace the harmonious blend of cultural wonders and the soothing
                    embrace of the sea. Immerse yourself in the local traditions, from exploring surfing point to witnessing
                    captivating dance performances in certain period. As you wander through this tropical heaven, let the
                    rhythmic waves serenade you into relaxation. With its breathtaking ocean views and the warmth of
                    Balinese hospitality, Jumpai offers a coastal escape like no other. Discover the perfect balance of
                    culture and seaside tranquility, creating cherished moments that echo the beauty of Bali's coastal
                    charm.</p>
            </div>
            <div class="flex">
                <a class="px-2" href=""><img
                        src="https://ik.imagekit.io/u1ds9zj1i/images/instagram.png?updatedAt=1708904432720"
                        alt=""></a>
                <a class="px-2" href=""><img
                        src="https://ik.imagekit.io/u1ds9zj1i/images/Facebook.png?updatedAt=1708904432814"
                        alt=""></a>
                <a class="px-2" href=""><img
                        src="https://ik.imagekit.io/u1ds9zj1i/images/youtube.png?updatedAt=1708904437368"
                        alt=""></a>
                <a class="px-2" href=""><img
                        src="https://ik.imagekit.io/u1ds9zj1i/images/whatsapp.png?updatedAt=1708904436428"
                        alt=""></a>
            </div>
        </div>
        <div class="text-white px-[40px] mt-4">
            <h2 class="mb-12">Navigation Pages</h2>
            <ul class="font-light leading-loose">
                <li><a href="">Home</a></li>
                <li><a href="">Blog</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
        </div>
        <div class="text-white mt-4 ">
            <h2 class="mb-3">Contact</h2>
            <div class="font-light leading-loose">
                <iframe class="rounded-xl"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8458.038947675394!2d115.41253299184964!3d-8.571640990680098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd213c93d5e642b%3A0x5030bfbca832250!2sJumpai%2C%20Klungkung%2C%20Klungkung%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1708586727249!5m2!1sen!2sid"
                    width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p>Desa Jumpai</p>
                <p>Kecamatan Klungkung Kabupaten</p>
                <p>Klungkung Provinsi Bali Kode Pos 80751</p>
                <div>
                    <img src="https://ik.imagekit.io/u1ds9zj1i/images/Indonesia.png?updatedAt=1708904432653" alt="">
                    <p>+62 856 1333 111</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center bg-black h-10 text-white items-center ">
        <p>Copyright © 2024 Desa Jumpai</p>
    </div>
    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
@endsection
