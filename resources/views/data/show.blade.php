<x-layout>
    @php
        $title = "Data result";
    @endphp
    <x-slot:title>
        {{ $title }} - site.com
        </x-slot>

        {{ $data }}

</x-layout>
