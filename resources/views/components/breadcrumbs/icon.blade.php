<div {{ $attributes->merge(['class' => '']) }}>
    <ol class="flex items-center whitespace-nowrap min-w-0" aria-label="Breadcrumb">
        <li class="text-sm mr-2">
            <a class="flex items-center text-gray-500 hover:text-blue-600" href="#">
                <x-icons.home class="w-5 h-5 mr-2" />
                Home
                <x-icons.carot-right class="w-2 h-2 mt-0.5 ml-2" />
            </a>
        </li>
        <li class="text-sm mr-2">
            <a class="flex items-center text-gray-500 hover:text-blue-600" href="#">
                <x-icons.notification class="w-5 h-5 mr-2" />
                App Center
                <x-icons.carot-right class="w-2 h-2 mt-0.5 ml-2" />
            </a>
        </li>
        <li class="text-sm font-semibold text-gray-800 truncate" aria-current="page">
            Application
        </li>
    </ol>
</div>
