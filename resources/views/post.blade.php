@extends('layouts.main')

@section('container')
<article class="mb-5">
    <h2>{{ $post->tittle }}</h2>
    <p>by. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> | Category : <a
            href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{
            $post->category->name }}</a></p>
    {!! $post->body !!}
</article>

<a href="/blog">Back to Blog</a>
@endsection


{{--
Post::create([
'tittle'=> "Judul 3",
'slug' => "judul-3",
'category_id' => 3,
'excerpt' => "Lorem ipsum dolor sit amet consectetur adipisicing elit.",
'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores aperiam libero sed quos eaque quae, et ipsum
ipsa
magnam quia quibusdam provident laudantium officiis quasi adipisci iusto autem reiciendis, atque repellat mollitia odio
nemo numquam eum architecto. Exercitationem quisquam dicta facilis corporis magnam dignissimos sit earum quasi ipsa
sequi. Error voluptatum minima tempora, eum, ad tenetur delectus cum eaque doloremque dolorem, quasi sequi vitae
inventore. Fuga quaerat atque quas, quam veritatis totam vero ipsum dicta maxime accusantium repudiandae vitae eum
placeat ipsa debitis mollitia voluptates quasi ducimus quos. Eum at aliquam, tenetur cumque quis a consequuntur
recusandae impedit rem accusantium quam ex nesciunt fuga officiis consequatur nihil ipsa voluptatum numquam ab et
mollitia, perferendis quas! Atque maiores facilis, repudiandae quam tenetur provident ea mollitia illo nemo amet! Iusto
alias dolorem maiores rerum cupiditate doloremque. Explicabo laboriosam in cupiditate autem ab, numquam tempora officia,
sit reiciendis dolorem aperiam modi, saepe commodi."
])


--}}