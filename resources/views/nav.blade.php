<nav class="bg-blue-700">
    <div class="container mx-auto">
        <div class="flex items-center justify-between h-16">
            <a class="text-white text-2xl font-bold" href="/">
                <i class="far fa-sticky-note mr-1"></i>Memo
            </a>
            <div class="flex">
                <ul class="flex items-center">
                    @guest
                        <li class="mr-3">
                            <a class="text-white hover:underline" href="{{ route('register') }}">ユーザー登録</a>
                        </li>
                        <li>
                            <a class="text-white hover:underline" href="{{ route('login') }}">ログイン</a>
                        </li>
                    @endguest
                    @auth
                        <li>
                            <a href="{{ route('articles.create') }}"
                                class="bg-blue-500 hover:bg-blue-600 text-white rounded-md py-2 px-3 flex items-center">
                                <i class="fas fa-pen mr-1"></i>
                                <span>投稿する</span>
                            </a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
