<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Create_User
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <section class="text-gray-600 body-font relative">
          <div class="container px-5 py-12 mx-auto">
            <form method="post" action="{{ route('users.store') }}">
              @csrf
              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <x-input.input_container title="ユーザー名" commonValue="name" value="{{ old('name') }}" />
                <x-text.error_text>{{ $errors->first('name') }}</x-text.error_text>

                <x-input.input_container title="メールアドレス" commonValue="email" value="{{ old('email') }}" />
                <x-text.error_text>{{ $errors->first('email') }}</x-text.error_text>

                <x-input.input_container title="パスワード" commonValue="password" type="password"
                  value="{{ old('password') }}" />
                <x-text.error_text>{{ $errors->first('password') }}</x-text.error_text>

                <x-text.primary_text title="権限" />
                <div class="ml-2 flex">
                  <x-input.role_radio role="admin" />
                  <x-input.role_radio role="user" />
                </div>
                <x-text.error_text>{{ $errors->first('role') }}</x-text.error_text>

                <x-button.primary_button color="green">新規作成</x-button.primary_button>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
</x-app-layout>