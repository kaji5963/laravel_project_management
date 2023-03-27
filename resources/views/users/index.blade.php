<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      User_Management
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <section class="text-gray-600 body-font">
          <div class="container py-12 mx-auto">
            <div class="flex mb-8 lg:w-2/3 w-full mx-auto">
              <x-container.role_select_container :role="$select_role" />

              <x-container.search_container pass="users.index" />

              <x-button.route_button color="green" pass="users.create">ユーザー作成</x-button.route_button>
            </div>

            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
              <table class="table-auto w-full text-left whitespace-no-wrap">
                <x-users.thead />
                <x-users.tbody :users="$users" />
              </table>
            </div>
          </div>
        </section>
        <div class=" mb-8 px-12 mx-40">
          {{ $users->links() }}
        </div>
      </div>
    </div>
  </div>
</x-app-layout>