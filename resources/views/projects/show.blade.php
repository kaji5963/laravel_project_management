<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Show_Project
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <section class="text-gray-600 body-font">
          <div class="container py-8 mx-auto">

            <div class="text-end w-2/3 mx-auto mt-4">
              <x-button.route_button color="orange" pass="projects.edit" :params="['id' => $project->id]">
                編集</x-button.route_button>
              <span class="ml-16" />
              <x-button.route_button color="red" pass="projects.destroy" :params="['id' => $project->id]">
                削除</x-button.route_button>
            </div>

            <x-container.show_contents title="【プロジェクト作成者】" :contents="$project->user->name" />

            <x-container.show_contents title="【プロジェクトID】" :contents="$project->id" />

            <x-container.show_contents title="【プロジェクト名】" :contents="$project->name" />

            <x-container.show_contents title="【プロジェクト内容】" :contents="$project->description" />

            <x-container.show_contents title="【顧客】" :contents="$project->customer" />

            <x-container.show_contents_parts title="【技術】" :items="$project->skills" />

            <x-container.show_contents_parts title="【アサイン】" :items="$project->assignees" />

            <x-container.show_contents title="【ステータス】" :contents="$project->status" />
          </div>
        </section>
      </div>
    </div>
  </div>
</x-app-layout>