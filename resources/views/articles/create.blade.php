@extends('app')

@section('title', '記事投稿')

@include('nav')

@section('content')
  <div class="container mx-auto mt-10">
    <div class="max-w-lg mx-auto">
      <div class="bg-white p-8 rounded-lg shadow-lg">
        {{-- @include('error_card_list') --}}
        <div class="mt-4">
          <form method="POST" action="{{ route('articles.store') }}">
            @include('article.form')
            <button type="submit" class="py-2 px-4 bg-blue-500 hover:bg-blue-600 text-white rounded-lg w-full">
              投稿する
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection