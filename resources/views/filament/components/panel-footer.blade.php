<footer class="flex items-center justify-between w-full px-4 py-8 font-medium bottom-0">
    <span class="text-sm text-center text-gray-400 dark:text-gray-300">
        @if (auth()->user()->hasRole('super_admin'))
            <a href="#" class="hover:underline">{{ config('app.name') }}</a>
            {{ env('APP_VERSION') ? 'v' . env('APP_VERSION') : '' }}
        @else
            <a href="https://buymeacoffee.com/hashaqirul" target="_blank"><img
                    src="https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png" alt="Buy Me A Coffee"
                    style="height: 30px !important;width: 125px !important;" toggle="tooltip" title="Buy Me A Coffee"></a>
        @endif
    </span>
    <span class="text-sm text-center text-gray-400 dark:text-gray-300">©{{ date('Y') }} All Rights
        Reserved.
    </span>
</footer>
