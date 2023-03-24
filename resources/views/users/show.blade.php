<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Show_User
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <section class="text-gray-600 body-font">
          <div class="container py-8 mx-auto">

            <div class="text-end w-2/3 mx-auto">
              <x-button.route_button color="orange" pass="users.edit" :params="['id' => $user->id]">
                編集</x-button.route_button>
              <span class="ml-16" />
              <x-button.route_button color="red" pass="users.destroy" :params="['id' => $user->id]">
                削除</x-button.route_button>
            </div>

            <x-container.show_contents title="【ユーザーID】" :contents="$user->id" />

            <x-container.show_contents title="【ユーザー名】" :contents="$user->name" />

            <x-container.show_contents title="【メールアドレス】" :contents="$user->email" />

            <x-container.show_contents title="【パスワード】" :contents="$user->password" />

            <x-container.show_contents title="【権限】" :contents="$user->role" />
          </div>
        </section>
      </div>
    </div>
  </div>
</x-app-layout>