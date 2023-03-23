<x-layout>
    @php
        $title = "Error result";
    @endphp
    <x-slot:title>
        {{ $title }}-site.com
        </x-slot>
Error result. <br>
Requested ID was {{ $id }}.
</x-layout>
