<x-app-layout>
    <x-slot name="pageTitle">
        <h2 class="font-semibold text-xl text-zinc-900 leading-tight">
            {{ __('Accordion') }}
        </h2>
    </x-slot>

    <x-content-base title="Basic Usage" eventName="showCode">
        <x-tabs-preview-code />
        <div x-show="!showCode">
            <x-accordions.accordion-default />
        </div>
        <div x-show="showCode">
            <x-torchlight.accordion type="default" />
        </div>
    </x-content-base>

    <x-content-base title="With Icon" eventName="showCode2">
        <x-tabs-preview-code eventName="showCode2" />
        <div x-show="!showCode2">
            <x-accordions.accordion-default icon="true" />
        </div>
        <div x-show="showCode2">
            <x-torchlight.accordion type="icon" />
        </div>
    </x-content-base>

    <x-content-base title="With Colour" eventName="showCode3">
        <x-tabs-preview-code eventName="showCode3" />
        <div x-show="!showCode3">
            <x-accordions.accordion-default colour="gray" icon="true" />
        </div>
        <div x-show="showCode3">
            <x-torchlight.accordion type="colour" />
        </div>
    </x-content-base>

    <x-content-base title="Collapse Accordion" eventName="showCode4">
        <x-tabs-preview-code eventName="showCode4" />
        <div x-show="!showCode4">
            <x-accordions.accordion-collapse />
        </div>
        <div x-show="showCode4">
            <x-torchlight.accordion type="collapse" />
        </div>
    </x-content-base>

    <x-content-base title="Collapse with Icon" eventName="showCode5">
        <x-tabs-preview-code eventName="showCode5" />
        <div x-show="!showCode5">
            <x-accordions.accordion-collapse icon="true" />
        </div>
        <div x-show="showCode5">
            <x-torchlight.accordion type="icon-collapse" />
        </div>
    </x-content-base>

    <x-content-base title="Collapse with Colour" eventName="showCode6">
        <x-tabs-preview-code eventName="showCode6" />
        <div x-show="!showCode6">
            <x-accordions.accordion-collapse colour="gray" icon="true" />
        </div>
        <div x-show="showCode6">
            <x-torchlight.accordion type="colour-collapse" />
        </div>
    </x-content-base>
</x-app-layout>
