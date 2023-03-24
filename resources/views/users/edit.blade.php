<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Edit_User
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <section class="text-gray-600 body-font relative">
          <div class="container px-5 py-12 mx-auto">

            <form method="post" action="{{ route('users.update', ['id' => $user->id]) }}">
              @csrf
              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">

                  <x-input.input_container title="ユーザー名" commonValue="name" text="text"
                    value="{{ old('name', $user->name) }}" />
                  <x-text.error_text>{{ $errors->first('name') }}</x-text.error_text>

                  <x-input.input_container title="メールアドレス" commonValue="email" text="text"
                    value="{{ old('email', $user->email) }}" />
                  <x-text.error_text>{{ $errors->first('email') }}</x-text.error_text>

                  <input type="hidden" name="password" value="{{ $user->password }}">

                  <x-text.primary_text title="権限" text="text" />

                  <div class="ml-2 flex">
                    <div class="ml-2 flex">
                      <x-input.role_radio role="admin" initValue="{{ $user->role }}" />
                      <x-input.role_radio role="user" initValue="{{ $user->role }}" />
                    </div>
                  </div>

                  <x-button.primary_button color="orange">編集</x-button.primary_button>
                </div>
              </div>
            </form>

          </div>
        </section>
      </div>
    </div>
  </div>
</x-app-layout>