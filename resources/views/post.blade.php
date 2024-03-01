@extends('navbar')
@section('main')
    <div class="flex flex-col items-center mt-[20vh] ">
        <div class="w-[800px] font-semibold text-[36px]">
            <h1>{{ $detailPost->title }}</h1>
        </div>
        <div class="flex w-[800px] items-start text-left pr-[77vh] mt-4 mb-4">
            <img class="mr-4" src="https://ik.imagekit.io/u1ds9zj1i/images/author.png?updatedAt=1708904432773"
                alt="">
            <p class="text-[#696A75] font-medium mr-4">Admin</p>
            <p class="text-[#696A75]">{{ $detailPost->created_at->format('d-m-Y') }}</p>
        </div>
        <div class="h-[462px] w-[800px] rounded-lg mt-4">
            <img class="h-[462px] w-[800px]" src="{{ asset('images/' . $detailPost->image) }}" alt="">
        </div>
        <div class="w-[800px] text-justify mt-4 mb-4">
            {!! $detailPost->content !!}
        </div>
    </div>
    <div class="flex justify-between justify-center items-center bg-[#246E79] h-[370px] p-[16vh]">
        <div class="text-white mt-4">
            <img class="mb-6" src="/assets/images/JUMPAI.png" alt="">
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
                <a class="px-2" href=""><img src="/assets/images/instagram.png" alt=""></a>
                <a class="px-2" href=""><img src="/assets/images/Facebook.png" alt=""></a>
                <a class="px-2" href=""><img src="/assets/images/youtube.png" alt=""></a>
                <a class="px-2" href=""><img src="/assets/images/whatsapp.png" alt=""></a>
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
                    <img src="/assets/images/Indonesia.png" alt="">
                    <p>+62 856 1333 111</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center bg-black h-10 text-white items-center ">
        <p>Copyright © 2024 Desa Jumpai</p>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
@endsection
