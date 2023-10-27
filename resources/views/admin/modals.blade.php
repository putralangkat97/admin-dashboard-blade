<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Modal') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-modal.basic />
        </div>
        <div x-show="showCode">
            <x-torchlight.modal type="basic" />
        </div>
    </x-content-base>

    <x-content-base title="Modal Center" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-modal.center />
        </div>
        <div x-show="showCode2">
            <x-torchlight.modal type="center" />
        </div>
    </x-content-base>

    <x-content-base title="Modal Scroll" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-modal.scroll />
        </div>
        <div x-show="showCode3">
            <x-torchlight.modal type="scroll" />
        </div>
    </x-content-base>

    <x-content-base title="Modal Center with Scroll" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-modal.scroll-center />
        </div>
        <div x-show="showCode4">
            <x-torchlight.modal type="scroll-center" />
        </div>
    </x-content-base>

    <x-content-base title="Prevent Outside Click" eventName="showCode5">
        <x-tabs-preview-code eventName="showCode5" />
        <div x-show="!showCode5">
            <x-modal.prevent />
        </div>
        <div x-show="showCode5">
            <x-torchlight.modal type="prevent" />
        </div>
    </x-content-base>
</x-app-layout>
