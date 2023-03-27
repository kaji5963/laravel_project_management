<form method="get" action="{{ route( $pass ) }}">
  @csrf
  <input type="search" placeholder="検索" name="search" value="@if (isset($search)) {{ $search }} @endif"
    class="bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
  <button class="text-white bg-gray-400 border-0 py-2 px-4 mx-3 focus:outline-none hover:bg-gray-500"
    type="submit">検索</button>
  <button n class="text-white bg-gray-400 border-0 py-2 px-2 focus:outline-none hover:bg-gray-500"><a
      href="{{ route( $pass ) }}">
      クリア</a></button>
</form>