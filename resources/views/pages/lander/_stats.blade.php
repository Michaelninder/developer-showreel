@if (isset($render_actual_content) && $render_actual_content)
    <div class="py-16 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">Project Statistics</h2>
                <p class="text-gray-600 dark:text-gray-400">Some Raw Number</p>
            </div>
            <div class="flex flex-wrap -mx-4 text-center">
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                        <h3 class="text-4xl font-bold text-blue-600 dark:text-blue-400 mb-2">10+</h3>
                        <p class="text-gray-700 dark:text-gray-300">Projects Completed</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                        <h3 class="text-4xl font-bold text-green-600 dark:text-green-400 mb-2">5000+</h3>
                        <p class="text-gray-700 dark:text-gray-300">Lines of Code</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8">
                    <div class="bg-gray-100 dark:bg-gray-700 p-6 rounded-lg shadow-md">
                        <h3 class="text-4xl font-bold text-purple-600 dark:text-purple-400 mb-2">2+</h3>
                        <p class="text-gray-700 dark:text-gray-300">Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif