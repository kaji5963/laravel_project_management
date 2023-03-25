<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      My_Project_Management
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <section class="text-gray-600 body-font">
          <div class="container py-12 mx-auto">
            <div class="lg:w-2/3 w-full mx-auto overflow-auto">
              <table class="table-auto w-full text-left whitespace-no-wrap">
                <x-projects.thead />

                <x-my_project.tbody :projects="$projects" :name="$authName" />

              </table>
            </div>
          </div>
        </section>
        <div class=" mb-8 px-12 mx-40">
          {{ $projects->links() }}
        </div>
      </div>
    </div>
  </div>
</x-app-layout>