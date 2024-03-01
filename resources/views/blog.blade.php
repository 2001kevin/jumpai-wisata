@extends('navbar')
@section('main')
    <div class="flex flex-col justify-center items-center h-screen bg-[#dde9ef]">
        <div class="flex px-[16vh] mb-6 delay-[300ms] duration-[1200ms] taos:translate-x-[200px] taos:opacity-0"
            data-carousel="slide" data-taos-offset="300">
            <div class="flex content-center items-center text-black" data-carousel-item>
                <div class="mt-[16vh]">
                    <p class="font-serif text-[30px]">Featured Post</p>
                    <h1 class="text-[50px] font-serif">Telek Dance, a cultural heritage in Jumpai Village</h1>
                    <p class="mb-6">By Admin | Feb 10, 2024</p>
                    <p class="text-[16px] leading-loose ">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident.
                    </p>
                    <a href="post.html" type="button" class="px-5 py-2 rounded-full bg-[#D9ED82] mt-4 font-bold">
                        Read The Blog
                    </a>
                </div>
                <div
                    class="bg-[url('https://ik.imagekit.io/u1ds9zj1i/images/taribarong.png?updatedAt=1708904438109')] bg-cover rounded-xl shadow-2xl h-[50vh] w-[70vh] ml-[60px]">
                </div>
            </div>
        </div>
    </div>
    <p class="px-[16vh] text-[24px] font-medium mt-6">Recent Blog Posts</p>
    <div class="flex px-[16vh] mt-6 justify-between mb-[58vh]">
        <div class=" bg-gray-100 h-10 w-[592px]">
            <div
                class="bg-[url('https://ik.imagekit.io/u1ds9zj1i/images/barong.png?updatedAt=1708908229945')] bg-cover h-[220px] w-[592px]">
            </div>
            <p class="mt-5">Author • 1 Jan 2023</p>
            <div class="flex justify-between items-center">
                <h2 class="font-bold text-[28px]">Barong Dance, a cultural heritage in jumpai village</h2>
                <img class="items-center" src="/assets/images/Icon wrap.png" alt="">
            </div>
            <p>Di kecamatan Klungkung, pulau Bali, terdapat sebuah keindahan budaya yang mengagumkan yaitu—Tari Barong</p>
        </div>
        <div class="h-10 w-[592px]">
            <div class="flex">
                <div
                    class="bg-[url('https://ik.imagekit.io/u1ds9zj1i/images/image%205.png?updatedAt=1708908850357')] bg-cover bg-center min-w-[320px] min-h-[200px] mr-4">
                </div>
                <div>
                    <p class="text-[14px]">Author • 1 Jan 2023</p>
                    <h2 class="mt-2 font-bold text-[18px]">Surfing Point in Jumpai</h2>
                    <p class="mt-1">Memperkenalkan Keindahan Obyek Wisata Desa Jumpai

                        Pantai Jumpai dan Surfing Point...</p>
                </div>
            </div>
            <div class="flex mt-6">
                <div
                    class="bg-[url('https://ik.imagekit.io/u1ds9zj1i/images/image%207(1).png?updatedAt=1708909317749')] bg-cover bg-center min-w-[320px] min-h-[200px] mr-4">
                </div>
                <div>
                    <p class="text-[14px]">Author • 1 Jan 2023</p>
                    <h2 class="mt-2 font-bold text-[18px]">Product Compost in Jumpai Village</h2>
                    <p class="mt-1">Memperkenalkan Produk Pengolahan Sampah Desa Jumpai


                        Pupuk Kompos Desa Jumpai...</p>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="mt-[58vh] px-[16vh]">
                                                <div class="flex mt-6">
                                                    <div class="bg-blue-800 min-w-[592px] min-h-[246px] mr-4">
                                                    </div>
                                                    <div>
                                                      <p class="text-[14px]">Lana Steiner • 1 Jan 2023</p>
                                                      <div class="flex justify-between">
                                                        <h2 class="mt-2 font-bold text-[18px]">Grid system for better Design User Interface</h2>
                                                        <img src="/assets/images/Icon wrap.png" alt="">
                                                      </div>
                                                      <p class="mt-1">A grid system is a design tool used to arrange content on a webpage. It is a series of vertical and horizontal lines that create a matrix of intersecting points, which can be used to align and organize page elements. Grid systems are used to create a consistent look and feel across a website, and can help to make the layout more visually appealing and easier to navigate.</p>
                                                    </div>
                                                  </div>
                                              </div> -->
    <div class="px-[16vh] mt-6">
        <p class="text-[24px] font-medium mb-4">All blog posts</p>
        <div class="flex justify-between">
            @foreach ($posts as $post)
                <div class="bg-gray-100 h-[244px] w-[364px] mr-4">
                    <div class="bg-[url('{{ asset('images/' . $post->image) }}')] bg-cover h-[244px] w-[364px]">
                    </div>
                    <p class="mt-5">Admin • {{ $post->created_at->format('d-m-Y') }}</p>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('detail-blog', $post->slug) }}" class="font-bold text-[24px] hover:underline">{{ $post->title }}</a>
                        <img class="items-center" src="/assets/images/Icon wrap.png" alt="">
                    </div>
                    <p>{{ strip_tags(Str::limit($post->content, 30)) }}</p>
                </div>
            @endforeach
            {{-- <div class="bg-gray-100 h-[244px] w-[364px] mr-4">
              <div class="bg-black h-[244px] w-[364px]">
              </div>
              <p class="mt-5">Olivia Rhye • 1 Jan 2023</p>
              <div class="flex justify-between items-center">
                <h2 class="font-bold text-[24px]">UX review presentations</h2>
                <img class="items-center" src="/assets/images/Icon wrap.png" alt="">
              </div> --}}
            {{-- <p>How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          </div>
          <div class="bg-gray-100 h-[244px] w-[364px] mr-4">
              <div class="bg-black h-[244px] w-[364px]">
              </div>
              <p class="mt-5">Olivia Rhye • 1 Jan 2023</p>
              <div class="flex justify-between items-center">
                <h2 class="font-bold text-[24px]">UX review presentations</h2>
                <img class="items-center" src="/assets/images/Icon wrap.png" alt="">
              </div>
              <p>How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          </div>
        </div>
        <div class="flex justify-between mt-[25vh] mb-6">
          <div class="bg-gray-100 h-[244px] w-[364px] mr-4">
              <div class="bg-black h-[244px] w-[364px]">
              </div>
              <p class="mt-5">Olivia Rhye • 1 Jan 2023</p>
              <div class="flex justify-between items-center">
                <h2 class="font-bold text-[24px]">UX review presentations</h2>
                <img class="items-center" src="/assets/images/Icon wrap.png" alt="">
              </div>
              <p>How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          </div>
          <div class="bg-gray-100 h-[244px] w-[364px] mr-4">
              <div class="bg-black h-[244px] w-[364px]">
              </div>
              <p class="mt-5">Olivia Rhye • 1 Jan 2023</p>
              <div class="flex justify-between items-center">
                <h2 class="font-bold text-[24px]">UX review presentations</h2>
                <img class="items-center" src="/assets/images/Icon wrap.png" alt="">
              </div>
              <p>How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          </div>
          <div class="bg-gray-100 h-[244px] w-[364px] mr-4">
              <div class="bg-black h-[244px] w-[364px]">
              </div>
              <p class="mt-5">Olivia Rhye • 1 Jan 2023</p>
              <div class="flex justify-between items-center">
                <h2 class="font-bold text-[24px]">UX review presentations</h2>
                <img class="items-center" src="/assets/images/Icon wrap.png" alt="">
              </div>
              <p>How do you create compelling presentations that wow your colleagues and impress your managers?</p>
          </div> --}}
        </div>
    </div>
    <div class="flex justify-between justify-center items-center bg-[#246E79] h-[370px] p-[16vh] mt-[25vh]">
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

    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
@endsection
