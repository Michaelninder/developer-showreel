<footer class="main-footer bg-gray-200 dark:bg-gray-800 text-gray-700 dark:text-gray-300 py-10 mt-16">
    <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

        <div class="footer-section col-span-full md:col-span-1 lg:col-span-1 text-center md:text-left">
            <h3 class="text-2xl font-bold mb-4 text-gray-900 dark:text-gray-100 font-titillium">
                fabianternis.dev
            </h3>
            <p class="text-sm mb-4">{{ __('lorem.v6') }}</p>
            <div class="copyright text-sm">
                &copy; {{ date('Y') }} Fabian Ternis. All rights reserved.
            </div>
        </div>

        <div class="footer-section text-center md:text-left">
            <h4 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Quick Links</h4>
            <ul class="space-y-2">
                <li><a href="{{ route('pages.lander') }}" class="footer-link text-gray-600 dark:text-gray-400 hover:text-blue-500">Home</a></li>
                <li><a href="{{ route('pages.lander') }}" class="footer-link text-gray-600 dark:text-gray-400 hover:text-blue-500">About</a></li>
                <li><a href="{{ route('pages.lander') }}" class="footer-link text-gray-600 dark:text-gray-400 hover:text-blue-500">Projects</a></li>
                <li><a href="{{ route('pages.lander') }}" class="footer-link text-gray-600 dark:text-gray-400 hover:text-blue-500">Blog</a></li>
                <li><a href="{{ route('pages.lander') }}" class="footer-link text-gray-600 dark:text-gray-400 hover:text-blue-500">Services</a></li>
            </ul>
        </div>

        <div class="footer-section text-center md:text-left">
            <h4 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Connect With Me</h4>
            <div class="flex justify-center md:justify-start space-x-4">
                <a href="https://github.com/michaelninder" target="_blank" rel="noopener noreferrer" class="social-icon text-2xl text-gray-600 dark:text-gray-400 hover:text-blue-500" title="GitHub">
                    <i class="bi bi-github"></i>
                </a>
                <a href="https://discordapp.com/users/michaelninder_yt" target="_blank" rel="noopener noreferrer" class="social-icon text-2xl text-gray-600 dark:text-gray-400 hover:text-blue-500" title="Discord">
                    <i class="bi bi-discord"></i>
                </a>
                <a href="https://www.youtube.com/@michaelninder_dev" target="_blank" rel="noopener noreferrer" class="social-icon text-2xl text-gray-600 dark:text-gray-400 hover:text-blue-500" title="YouTube">
                    <i class="bi bi-youtube"></i>
                </a>
                <a href="mailto:f.ternis@xpsystems.eu" class="social-icon text-2xl text-gray-600 dark:text-gray-400 hover:text-blue-500" title="Email">
                    <i class="bi bi-envelope"></i>
                </a>
            </div>
        </div>

        <div class="footer-section text-center md:text-left">
            <h4 class="text-lg font-semibold mb-4 text-gray-800 dark:text-gray-200">Send a Message (Disabled)</h4>
            <form action="#" method="POST" class="space-y-4">
                <input type="text" placeholder="Your Name" class="w-full p-2 rounded-md bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-100 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" disabled>
                <input type="email" placeholder="Your Email" class="w-full p-2 rounded-md bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-100 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" disabled>
                <textarea placeholder="Your Message" rows="3" class="w-full p-2 rounded-md bg-gray-100 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-gray-100 placeholder-gray-500 dark:placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500" disabled></textarea>
                <button type="submit" class="w-full py-2 px-4 rounded-md bg-blue-600 text-white font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition duration-300 ease-in-out disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                    Send
                </button>
            </form>
        </div>

    </div>
    <div class="text-center text-sm mt-8 pt-4 border-t border-gray-300 dark:border-gray-700">
        Built with ❤️ by Fabian Ternis
    </div>
</footer>