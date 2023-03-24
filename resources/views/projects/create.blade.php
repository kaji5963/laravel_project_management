<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      Create_Project
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <section class="text-gray-600 body-font relative">
          <div class="container px-5 py-12 mx-auto">

            <form method="post" action="{{ route('projects.store') }}">
              @csrf
              <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                  <x-input.input_container title="プロジェクト名" commonValue="name" value="{{ old('name') }}" />
                  <x-text.error_text>{{ $errors->first('name') }}</x-text.error_text>

                  <x-textarea.textarea_container title="プロジェクト内容" commonValue="description"
                    value="{{ old('description') }}" />
                  <x-text.error_text>{{ $errors->first('description') }}</x-text.error_text>

                  <x-input.input_container title="顧客" commonValue="customer" value="{{ old('customer') }}" />
                  <x-text.error_text>{{ $errors->first('customer') }}</x-text.error_text>

                  <x-text.primary_text title="技術" />
                  <x-input.create_checkbox :items="$skills" name="skills" text="skills_" />
                  <x-text.error_text>{{ $errors->first('skills') }}</x-text.error_text>

                  <x-text.primary_text title="アサイン" />
                  <x-input.create_checkbox :items="$users" name="assignees" text="assignees_" />
                  <x-text.error_text>{{ $errors->first('assignees') }}</x-text.error_text>

                  <x-button.primary_button color="green">新規作成</x-button.primary_button>
                </div>
              </div>
            </form>

          </div>
        </section>
      </div>
    </div>
  </div>
</x-app-layout>