<li><a href="/">Shop</a></li>
@auth
<li>
    <details>
        <summary>
            Admin
        </summary>
        <ul class="p-2 z-20 bg-base-100">
            <li><a href="{{route('articles.index')}}">Edit Shop</a></li>
        </ul>
    </details>
</li>
@endauth
