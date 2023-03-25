<x-welcome-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight text-center">
            Project_Management_App
        </h2>
    </x-slot>

    <div class="mt-12 flex justify-center">
        <div class="mr-8">
            <x-button.route_button color="gray" pass="login">ログイン</x-button.route_button>
        </div>
        <div class="ml-8">
            <x-button.route_button color="gray" pass="register">新規登録</x-button.route_button>
        </div>
    </div>
</x-welcome-layout>