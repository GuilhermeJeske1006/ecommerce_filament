<div class="col-md-12 d-flex ftco-animate">
    <div class="blog-entry align-self-stretch d-md-flex">
        <a href="blog-single.html" class="block-20"
            style="background-image: url({{ $item->imagem }});">
        </a>
        <div class="text d-block pl-md-4">
            <div class="meta mb-3">
                <div><a href="#">{{ App\Helpers\Helper::formatDate($item->created_at) }}</a></div>
                <div><a href="#">{{ $item->usuario->name }}</a></div>
                <div><a href="#" class="meta-chat"><span class="icon-chat"></span> {{ count($item->comentarios) }}</a>
                </div>
            </div>
            <h3 class="heading"><a href="#">{{ $item->titulo }}</a></h3>
            <p>{{ $item->subtitulo }}</p>
            <p><a href="/blog/{{ $item->id }}" class="btn btn-primary py-2 px-3">Ver mais</a></p>
        </div>
    </div>
</div>
