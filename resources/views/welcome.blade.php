<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <!-- SEO -->
    <meta name="description" content="Building with Tailwind CSS in Laravel" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Style Sheet -->
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
    <!-- CDNJS - Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Laravel & Tailwind CSS</title>
</head>

<body id="home" class="font-Nunito bg-gray-900">
    <!-- Header -->
    <header class="z-50 sticky top-0 bg-gray-900">
        <!-- Nav -->
        <nav class="container flex items-center py-4 mt-4 transition-all duration-500 ease-in-out md:mt-12 md:transition-all md:duration-500 md:ease-in-out">
            <div class="flex items-center py-1">
                <!-- Laravel & Tailwind CSS Logo's -->
                <img class="ml-3 w-9 h-9" src="../images/laravel-logo.svg" alt="Laravel Logo">
                <p class="ml-3 text-clr-max-yellow-red uppercase text-2xl font-extrabold">+</p>
                <img class="ml-3 w-9 h-9" src="../images/tailwinds-css-ico.svg" alt="Tailwind CSS Logo">
            </div>
            <!-- Links -->
            <ul class="hidden md:flex flex-1 justify-end items-center gap-10 text-clr-cg-blue uppercase text-md md:transition-all md:duration-500 md:ease-in-out">
                <li class="smooth-scroll hover:text-clr-max-yellow-red transition-all duration-500 ease-in-out"><a href="#learned">What I Learned</a></li>
                <li class="smooth-scroll hover:text-clr-max-yellow-red transition-all duration-500 ease-in-out"><a href="#customized">What I Customized</a></li>
                <!-- CTA -->
                <a target="_blank" class="smooth-scroll uppercase mr-3 btn btn-red" href="#footer">Contact Me</a>
            </ul>
            <!-- Menu appears on  -->
            <div class="flex md:hidden flex-1 justify-end mr-3 md:transition-all md:duration-500 md:ease-in-out">
                <i class="text-2xl text-clr-light-coral fas fa-bars"></i>
            </div>
        </nav>
    </header>

    <!-- Hero -->
    <section class="relative transition-all duration-500 ease-in-out flex items-center justify-center pb-28">
        <!-- Container -->
        <div class="container flex flex-col-reverse transition-all duration-500 ease-in-out lg:transition-all lg:duration-500 lg:ease-in-out lg:flex-row items-center gap-0 sm:gap-10 mt-14 lg:mt-28">
            <!-- Content -->
            <div class="flex flex-1 flex-col items-center lg:items-start pt-0 pb-6 lg:py-12">
                <h2 class="text-clr-sea-green text-4xl md:text-4 lg:text-5xl text-center lg:text-left mt-8 mb-6 ml-0 lg:ml-5">
                    Laravel Project with Tailwind CSS
                </h2>
                <p class="text-gray-300 text-md lg:text-lg text-center lg:text-left mb-6 ml-0 lg:ml-5">
                    What I learned creating a Laravel project with Tailwind CSS.
                </p>
                <div class="flex justify-center flex-wrap gap-6 mt-6 ml-0 lg:ml-5">
                    <a href="#learned" class="btn btn-blue smooth-scroll inline-block">Read more</a>
                </div>
            </div>
            <!-- Image -->
            <div class="border-clr-max-yellow-red bg-clr-floral-white rounded-3xl border-8 inline-flex flex-1 justify-center items-center mb-10 md:mb-16 md:mx-10 lg:mb-0 z-10 py-8 lg:px-8 lg:pb-11 w-9/12 transition-all duration-500 ease-in-out">
                <!-- w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full -->
                <img class="object-cover lg:w-2/5 lg:h-2/5 w-2/12 h-2/12 ml-3" src="../images/laravel-logo.svg" alt="Laravel Logo">
                <p class="ml-8 text-clr-max-yellow-red uppercase text-5xl lg:text-9xl font-extrabold mr-1">+</p>
                <img class="object-cover lg:w-2/5 lg:h-2/5 w-1/5 h-1/5 relative top-2 md:top-3 ml-5 mr-2" src="../images/tailwinds-css-ico.svg" alt="Tailwind CSS Logo">
            </div>
        </div>
        <!-- Rounded Rectangle -->
        <div class="hidden lg:block overflow-hidden bg-clr-sea-green rounded-l-full absolute h-80 w-5/12 top-60 right-0 lg:-bottom-28 transition-all duration-500 ease-in-out"></div>
    </section>

    <!-- Learned -->
    <section id="learned" class="relative transition-all duration-500 ease-in-out flex items-center justify-center pt-14 pb-32 bg-gray-600 mt-20 lg:mt-60">
        <!-- Heading -->
        <div class="w-3/4 lg:w-11/12 m-auto px-2 transition-all duration-500 ease-in-out">
            <h1 class="text-4xl text-center text-clr-sea-green">What I Learned</h1>
            <!-- Learned Image Container -->
            <div class="relative mt-20 lg:mt-24">
                <div class="container flex flex-col lg:flex-row items-center justify-center gap-x-24 transition-all duration-500 ease-in-out">
                    <!-- Image -->
                    <div class="flex flex-1 justify-center z-10 mb-20 lg:mb-0 transition-all duration-500 ease-in-out">
                        <img src="../images/dev_activity.png" alt="What I Learned Image" class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full transition-all duration-500 ease-in-out">
                    </div>
                    <!-- Content -->
                    <div class="flex flex-1 gap-12 items-center lg:items-start">
                        <ul class="list-disc list-outside">
                            <li class="text-gray-300 pb-5">Learned how to update <strong class="text-clr-max-yellow-red">Homebrew</strong> to <em class="text-clr-sea-green">v3.3.2</em></li>
                            <li class="text-gray-300 pb-5">Learned how to update <strong class="text-clr-max-yellow-red">PHP</strong> to <em class="text-clr-sea-green">v8.0.12</em class="text-clr-max-yellow-red">&nbsp; via <strong class="text-clr-max-yellow-red">Homebrew</strong></li>
                            <li class="text-gray-300 pb-5">Learned how to update <strong class="text-clr-max-yellow-red">MySQL</strong> to <em class="text-clr-sea-green">v8.0.27</em> &nbsp;via <strong class="text-clr-max-yellow-red">Homebrew</strong></li>
                            <li class="text-gray-300 pb-5">Learned how to install <strong class="text-clr-max-yellow-red">Composer</strong> globally via <em><a href="https://getcomposer.org/" target="_blank" class="text-clr-link">getcomposer.org</a></em>
                                <div class="pl-10">
                                    <ul class="pt-5">
                                        <li class="text-gray-300 pb-5"><strong class="font-black text-xl">-</strong> Along the way I ran into an issue where <span class="text-clr-special">.composer/vendor/bin</span> was not in my <em class="text-clr-light-coral">$PATH</em></li>
                                        <li class="text-gray-300"><strong class="font-black text-xl">-</strong> I learned how to correct my <em class="text-clr-light-coral">$PATH</em>&nbsp; to include <span class="text-clr-special">.composer/vendor/bin</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="text-gray-300 pb-5">Learned how to create a vanilla <strong class="text-clr-max-yellow-red">Laravel</strong> project via the <em class="text-clr-special">laravel new example-app</em>&nbsp; command.</li>
                            <li class="text-gray-300 pb-5">Learned how to update <strong class="text-clr-max-yellow-red">node.js</strong> to <em class="text-clr-sea-green">v17.0.1</em>&nbsp; via <strong class="text-clr-max-yellow-red">Homebrew</strong></li>
                            <li class="text-gray-300 pb-5">Learned how to update <strong class="text-clr-max-yellow-red">npm</strong> to <em class="text-clr-sea-green">v8.1.0</em>&nbsp; via <strong class="text-clr-max-yellow-red">Homebrew</strong></li>
                            <li class="text-gray-300 pb-5">Learned how to update <strong class="text-clr-max-yellow-red">Git</strong> to <em class="text-clr-sea-green">v2.33.1</em>&nbsp; via <strong class="text-clr-max-yellow-red">Homebrew</strong></li>
                            <li class="text-gray-300 pb-5">Learned how to install <strong class="text-clr-max-yellow-red">Tailwind CSS</strong> via <em class="text-clr-special">npm install -D tailwindcss@latest postcss@latest autoprefixer@latest”</em></li>
                            <li class="text-gray-300 pb-5">Learned how to create <em class="text-clr-special">tailwind.config.js</em> file.</li>
                            <li class="text-gray-300 pb-5">Configured <em class="text-clr-special">tailwind.config.js</em> file to remove unused styles in production via <strong>“purge”</strong></li>
                            <li class="text-gray-300 pb-5">Added <strong class="text-clr-max-yellow-red">Tailwind CSS</strong> as a <strong>PostCSS</strong> plugin via <em class="text-clr-special">webpack.mix.js</em></li>
                            <li class="text-gray-300 pb-5">Added <strong class="text-clr-max-yellow-red">Tailwind CSS</strong> in <em class="text-clr-special">./resources/css/app.css</em>&nbsp; with the <em class="tex-clr-link">@tailwind</em>&nbsp; directive to include Tailwind’s <em class="text-clr-special">‘base’ ‘components’ ‘utilities’</em></li>
                            <li class="text-gray-300">Linked to <em class="text-clr-link">app.css</em>&nbsp; file in <em class="text-clr-light-coral">welcome.blade.php</em></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Rounded Rectangle -->
            <div class="hidden lg:block overflow-hidden bg-clr-sea-green rounded-r-full absolute h-80 w-5/12 bottom-72 left-0 transition-all duration-500 ease-in-out"></div>
        </div>
    </section>

    <!-- Customized -->
    <section id="customized" class="relative transition-all duration-500 ease-in-out flex items-center justify-center pt-24 pb-32 bg-gray-900 lg:pd-60">
        <!-- Heading -->
        <div class="w-3/4 lg:w-11/12 m-auto px-2 transition-all duration-500 ease-in-out">
            <h1 class="text-4xl text-center text-clr-light-coral">What I Customized</h1>
            <!-- Customized Image Container -->
            <div class="relative mt-20 lg:mt-24">
                <div class="container flex flex-col order-1 lg:flex-row items-center justify-center gap-x-24 transition-all duration-500 ease-in-out">
                    <!-- Image -->
                    <div class="order-last flex flex-1 justify-center z-10 mt-20 lg:mt-0 transition-all duration-500 ease-in-out">
                        <img src="../images/learned.png" alt="What I Customized Image" class="w-5/6 h-5/6 sm:w-3/4 sm:h-3/4 md:w-full md:h-full transition-all duration-500 ease-in-out">
                    </div>
                    <!-- Content -->
                    <div class="order-first flex flex-1 gap-12items-center lg:items-start transition-all duration-500 ease-in-out">
                        <ul class="">
                            <li class="text-gray-300 pb-5 text-xl">Customized the following <strong class="text-clr-link">Objects</strong> in <em class="text-clr-special">tailwind.config.js</em>
                                <div class="pl-10 text-base">
                                    <ul>
                                        <li class="text-gray-300 pt-5 pb-5 text-md">Extended the <strong><em class="text-clr-special">'Theme'</em>&nbsp; <span class="text-clr-link">Object</span></strong> to include custom colors for landing page and social media colors.</li>
                                        <li class="text-gray-300 pb-5 text-md">Customized the <strong class="text-clr-max-yellow-red">‘Container’</strong> class to automatically center sections easier.</li>
                                        <li class="text-gray-300">Customized <strong class="text-clr-special">’Screens’</strong> within the <span class="text-clr-max-yellow-red"><strong>‘Container’</span> <span class="text-clr-link">Object</span></strong> to use custom screen sizes (<em class="text-clr-sea-green">1124px</em>).</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="text-gray-300 pb-5">Added <em class="text-clr-light-coral">‘Nunito’</em>&nbsp; custom font via <a href="https://fonts.google.com" target="_blank" class="text-clr-link">fonts.google.com</a></li>
                            <li class="text-gray-300 pb-5">Added <em class="text-clr-light-coral">‘Font Awesome’</em>&nbsp; link via <a href="https://cdnjs.com/" target="_blank" class="text-clr-link">cdnjs.com</a> to use for icons.</li>
                            <li class="text-gray-300 pb-5">Added custom <em class="text-clr-special">‘base’</em>&nbsp; styles for buttons and hover effects with the <em class="text-clr-link">@apply</em>&nbsp; directive to save time.</li>
                            <li class="text-gray-300 pb-5">Added a <strong class="underline">working form</strong> using <a href="https://formspree.io/" target="_blank" class="text-clr-link">Formspree.io</a> with custom styling.</li>
                            <li class="text-gray-300 pb-5">Added transition effects to all <em class="text-clr-light-coral">media breakpoints</em> for a smooth effect.</li>
                            <li class="text-gray-300">Added a <strong>bit</strong> of <strong class="text-clr-js">JavaScript</strong> for a nice <span class="text-clr-link">smooth scroll</span> effect to navigate the page using the links.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Rounded Rectangle -->
            <div class="hidden lg:block overflow-x-visible bg-clr-sea-green rounded-l-full absolute h-80 w-5/12 bottom-28 right-0 transition-all duration-500 ease-in-out"></div>
        </div>
    </section>

    <!-- Contact + Footer -->
    <footer id="footer" class="relative bg-gray-600 text-clr-floral-white py-20">
        <div class="container">
            <div class="sm:3/4 lg:10/12 mx-auto">
                <h1 class="text-4xl text-center text-clr-max-yellow-red">Contact Me</h1>
                <div class="flex flex-col gap-6 mt-8 mx-auto">
                    <!-- Form -->
                    <form action="https://formspree.io/f/xpzkgwnz" method="POST" class="mx-auto w-5/6 lg:w-8/12 flex flex-col gap-6 mt-8 border border-solid rounded-md p-16">
                        <!-- Name Field -->
                        <input name="name" type="text" class="focus:outline-none flex-1 px-2 py-3 rounded-md text-black" placeholder="Full Name" id="name" required />

                        <!-- Email Field -->
                        <input name="email" type="email" class="focus:outline-none flex-1 px-2 py-3 rounded-md text-black" placeholder="Email Address" id="email" required />

                        <!-- Message Field -->
                        <textarea name="message" class="focus:outline-none flex-1 px-2 py-3 rounded-md text-black resize-y" placeholder="Message" id="message" required></textarea>

                        <!-- Button -->
                        <button class="btn btn-red">Send</button>
                    </form>
                </div>

                <!-- Social -->
                <div class="container flex flex-col md:flex-row items-center">
                    <div class="flex items-center justify-center gap-10 mt-12 md:mt-0 mx-auto pt-8">
                        <li class="list-none">
                            <a target="_blank" class="flex flex-1 w-full" href="https://twitter.com/DanTechMedia">
                                <i class="fab fa-twitter sm:text-3xl text-xl inline-flex flex-1 items-center justify-center hover:text-clr-twitter transform hover:scale-125 transition-all duration-500 ease-in-out">
                                </i>
                            </a>
                        </li>
                        <li class="list-none">
                            <a target="_blank" class="flex flex-1 w-full" href="https://www.linkedin.com/in/dtm/">
                                <i class="fab fa-linkedin sm:text-3xl text-xl inline-flex flex-1 items-center justify-center hover:text-clr-linkedin transform hover:scale-125 transition-all duration-500 ease-in-out">
                                </i>
                            </a>
                        </li>
                        <li class="list-none">
                            <a target="_blank" class="flex flex-1 w-full" href="https://github.com/dtm85">
                                <i class="fab fa-github sm:text-3xl text-xl inline-flex flex-1 items-center justify-center hover:text-clr-github transform hover:scale-125 transition-all duration-500 ease-in-out">
                                </i>
                            </a>
                        </li>
                        <li class="list-none">
                            <a target="_blank" class="flex flex-1 w-full" href="https://discord.gg/GcBxh8fR97">
                                <i class="fab fa-discord sm:text-3xl text-xl inline-flex flex-1 items-center justify-center hover:text-clr-discord transform hover:scale-125 transition-all duration-500 ease-in-out">
                                </i>
                            </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <!-- Back to Top Button -->
        <div class="absolute right-10 bottom-10 text-3xl rounded-full sm:h-16 sm:w-16 w-8 h-8 flex items-center justify-center bg-clr-max-yellow-red border-solid shadow-2xl">
            <a href="#home" class="smooth-scroll sm:text-5xl text-xl text-black">^</a>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // ********** Smooth Scroll **********
        const smoothScroll = document.querySelectorAll(".smooth-scroll");

        smoothScroll.forEach((link) => {
            link.addEventListener("click", (e) => {
                e.preventDefault();

                const id = e.target.getAttribute("href").slice(1);
                const element = document.getElementById(id);

                let position = element.offsetTop - 74;

                // Window scrollTo
                window.scrollTo({
                    left: 0,
                    top: position,
                    behavior: "smooth",
                });
            });
        });
    </script>
</body>

</html>