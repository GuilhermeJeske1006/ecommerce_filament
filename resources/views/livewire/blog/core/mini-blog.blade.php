<div class="block-21 mb-4 d-flex">
    <a class="blog-img mr-4" style="background-image: url({{ $item->imagem }});"></a>
    <div class="text">
        <h3 class="heading-1"><a href="/blog/{{ $item->id }} ">{{$item->titulo}}</a></h3>
        <div class="meta">
            <div><a href="#"><span class="icon-calendar"></span> {{ App\Helpers\Helper::formatDate($item->created_at) }}</a>
            </div>
            <div><a href="#"><span class="icon-person"></span> {{ $item->usuario->name }}</a></div>
            <div><a href="#"><span class="icon-chat"></span> {{ count($item->comentarios) }}</a></div>
        </div>
    </div>
</div>
