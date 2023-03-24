<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Edit_Project
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <section class="text-gray-600 body-font relative">
          <div class="container px-5 py-12 mx-auto">
            <form method="post" action="{{ route('projects.update', ['id' => $project->id]) }}">
              @csrf
              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                  <x-input.input_container title="プロジェクト名" commonValue="name" text="text"
                    value="{{ old('name', $project->name) }}" />
                  <x-text.error_text>{{ $errors->first('name') }}</x-text.error_text>

                  <x-textarea.textarea_container title="プロジェクト内容" commonValue="description" text="text"
                    value="{{ old('description', $project->description) }}" />
                  <x-text.error_text>{{ $errors->first('description') }}</x-text.error_text>

                  <x-input.input_container title="顧客" commonValue="customer" text="text"
                    value="{{ old('customer', $project->customer) }}" />
                  <x-text.error_text>{{ $errors->first('customer') }}</x-text.error_text>

                  <x-text.primary_text title="技術" text="text" />
                  <x-input.edit_checkbox :items="$skills" :project="$project->skills" text="skills_" name="skills" />
                  <x-text.error_text>{{ $errors->first('skills') }}</x-text.error_text>

                  <x-text.primary_text title="アサイン" text="text" />
                  <x-input.edit_checkbox :items="$users" :project="$project->assignees" text="assignees_"
                    name="assignees" />
                  <x-text.error_text>{{ $errors->first('assignees') }}</x-text.error_text>

                  <x-text.primary_text title="ステータス" text="text" />
                  <x-input.edit_radio :statuses="$statuses" :project="$project->status" />

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