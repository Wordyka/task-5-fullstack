@foreach($articles as $article)
<article class="mb-5 border-bottom">
    <h3>{{$article->title}}</h3>
    <h6 class="fst-italic">at {{$article->created_at}}</h6>
    <h6>Category : <a href="/article-category/{{$article->category_id}}">{{$article->category->name}}</a></h6>
    <h6>By : <a href="/article/{{$article->user_id}}">{{$article->user->name}}</a></h6>
    <div class="d-flex jsutify-content-start mb-3 mt-3">
        <img src="{{$article->image}}" alt="" width=150 class="mx-4">
        <p class="mx-4">{!! $article->content !!}</p>
    </div>
</article>
@endforeach