@extends('app')

@section('title', '記事一覧')

@include('nav')

@section('content')
  <div class="container mx-auto my-10">
    @foreach ($articles as $article)
      <div class="bg-white p-8 rounded-lg shadow-lg mb-8">
        <div class="flex items-center">
          <i class="fas fa-user-circle fa-3x mr-4"></i>
          <div>
            <div class="font-bold">
              {{ $article->user->name }}
            </div>
            <div class="text-gray-600 text-sm">
              {{ $article->created_at->format('Y/m/d H:i') }}
            </div>
          </div>
        </div>
        <div class="mt-6">
          <h3 class="text-lg font-bold mb-2">
            {{ $article->title }}
          </h3>
          <div class="text-gray-700 leading-relaxed">
            {!! nl2br(e($article->body)) !!}
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
