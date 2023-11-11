<div>
    @livewire('components.banner-inter')
    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate">
                    <div class="row">
                        @foreach ($blog as $item)
                            @livewire('blog.core.card', ['item' => $item], key($item->id))
                        @endforeach

                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                {{ $blog->links() }}

                            </div>
                        </div>
                    </div>

                </div> <!-- .col-md-8 -->
                <div class="col-lg-4 sidebar ftco-animate">
                    <div class="sidebar-box">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon ion-ios-search"></span>
                                <input type="text" wire:model="search" class="form-control" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 CLASS="heading">Categories</h3>
                        <ul class="categories">
                            @foreach ($categoria as $item)
                                <li><a href="#">{{ $item->nome }} <span>({{ count($item->blogs) }})</span></a></li>
                            @endforeach

                        </ul>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 CLASS="heading">Recent Blog</h3>
                        @foreach ($newBlog as $item)
                            @livewire('blog.core.mini-blog', ['item' => $item], key($item->id))
                        @endforeach
                        
                        
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 CLASS="heading">Tag Cloud</h3>
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">shop</a>
                            <a href="#" class="tag-cloud-link">products</a>
                            <a href="#" class="tag-cloud-link">shirt</a>
                            <a href="#" class="tag-cloud-link">jeans</a>
                            <a href="#" class="tag-cloud-link">shoes</a>
                            <a href="#" class="tag-cloud-link">dress</a>
                            <a href="#" class="tag-cloud-link">coats</a>
                            <a href="#" class="tag-cloud-link">jumpsuits</a>
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading">Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem
                            necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente
                            consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
</div>
