@extends('navbar')
@section('main')
    <section class="bg-white  mt-[7vh]" id="contact">
    <div class="mx-auto max-w-7xl px-4 py-16 sm:px-6 lg:px-8 lg:py-20">
        <div class="mb-4">
            <div class="mb-6 max-w-3xl text-center sm:text-center md:mx-auto md:mb-12">
                <p class="text-base font-semibold uppercase tracking-wide text-[#BBCD6C] ">
                    Contact
                </p>
                <h2
                    class="font-heading mb-4 font-bold tracking-tight text-black  text-3xl sm:text-5xl">
                    Get in Touch
                </h2>
            </div>
        </div>
        <div class="flex items-stretch justify-center">
            <div class="grid md:grid-cols-2">
                <div class="h-full pr-6">
                    <p class="mt-3 mb-12 text-lg text-gray-600 dark:text-slate-400">
                        We value your connection and are eager to hear from you. Whether you have inquiries, suggestions, or just want to say hello, our doors are always open. Feel free to drop us a message using the contact form below, and we'll get back to you as soon as possible. Your feedback is invaluable as we strive to enhance our services and strengthen our bond with the community. Thank you for considering Jumpai Village as a part of your journey, and we look forward to engaging with you.
                    </p>
                    <ul class="mb-6 md:mb-0">
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-[#D9ED82] text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                    <path
                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900">Our Address
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">CCH9+CF4, Jumpai, Klungkung, Klungkung Regency, Bali</p>
                                <p class="text-gray-600 dark:text-slate-400">Klungkung, Jumpai</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-[#D9ED82] text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path
                                        d="M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2">
                                    </path>
                                    <path d="M15 7a2 2 0 0 1 2 2"></path>
                                    <path d="M15 3a6 6 0 0 1 6 6"></path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 ">Contact
                                </h3>
                                <p class="text-gray-600 dark:text-slate-400">Mobile: +62 856 1333 111</p>
                                <p class="text-gray-600 dark:text-slate-400">Mail: info@jumpai.desa.id</p>
                            </div>
                        </li>
                        <li class="flex">
                            <div class="flex h-10 w-10 items-center justify-center rounded bg-[#D9ED82] text-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="black" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="h-6 w-6">
                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                    <path d="M12 7v5l3 3"></path>
                                </svg>
                            </div>
                            <div class="ml-4 mb-4">
                                <h3 class="mb-2 text-lg font-medium leading-6 text-gray-900 ">Working
                                    hours</h3>
                                <p class="text-gray-600 dark:text-slate-400">Monday - Friday: 08:00 - 17:00</p>
                                <p class="text-gray-600 dark:text-slate-400">Saturday &amp; Sunday: 08:00 - 12:00</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card h-fit max-w-6xl p-5 md:p-12" id="form">
                    <h2 class="mb-4 text-2xl font-bold">Ready to Get Started?</h2>
                    <form id="contactForm">
                        <div class="mb-6">
                            <div class="mx-0 mb-1 sm:mb-4">
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="name" class="pb-1 text-xs uppercase tracking-wider"></label><input type="text" id="name" autocomplete="given-name" placeholder="Your name" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0" name="name">
                                </div>
                                <div class="mx-0 mb-1 sm:mb-4">
                                    <label for="email" class="pb-1 text-xs uppercase tracking-wider"></label><input type="email" id="email" autocomplete="email" placeholder="Your email address" class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0" name="email">
                                </div>
                            </div>
                            <div class="mx-0 mb-1 sm:mb-4">
                                <label for="textarea" class="pb-1 text-xs uppercase tracking-wider"></label><textarea id="textarea" name="textarea" cols="30" rows="5" placeholder="Write your message..." class="mb-2 w-full rounded-md border border-gray-400 py-2 pl-2 pr-4 shadow-md dark:text-gray-300 sm:mb-0"></textarea>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="w-full bg-[#D9ED82] text-black px-6 py-3 font-xl rounded-md sm:mb-0">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

    <div class="flex justify-between justify-center items-center bg-[#246E79] h-[370px] p-[16vh]">
      <div class="text-white mt-4">
        <img class="mb-6" src="/assets/images/JUMPAI.png" alt="">
        <div class="text-justify w-[80vh]">
          <p class="text-[14px] mb-6">Embark on a coastal adventure at Jumpai, nestled near the pristine beaches of Bali. This hidden gem invites you to embrace the harmonious blend of cultural wonders and the soothing embrace of the sea. Immerse yourself in the local traditions, from exploring surfing point to witnessing captivating dance performances in certain period. As you wander through this tropical heaven, let the rhythmic waves serenade you into relaxation. With its breathtaking ocean views and the warmth of Balinese hospitality, Jumpai offers a coastal escape like no other. Discover the perfect balance of culture and seaside tranquility, creating cherished moments that echo the beauty of Bali's coastal charm.</p>
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
          <iframe class="rounded-xl" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8458.038947675394!2d115.41253299184964!3d-8.571640990680098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd213c93d5e642b%3A0x5030bfbca832250!2sJumpai%2C%20Klungkung%2C%20Klungkung%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1708586727249!5m2!1sen!2sid" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
@endsection
