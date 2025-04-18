@php
$image_url = get_the_post_thumbnail_url($post, 'large');
$images = get_field('gallery');
$featuredText = get_field('featured_text');
@endphp

@extends('layouts.app')

@section('content')

@while(have_posts()) @php(the_post())
<section class="jumbo is--post" style="background-image: url({{ the_post_thumbnail_url() }})">
</section>
<article>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="title--page is--post">{{ the_title() }}</h1>
        <div class="post--categories is--post">{{ the_category(' • ') }} </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="text--intro is--post">
          {{ the_content() }}
        </div>

      </div>
    </div>
  </div>
</article>
@includeFirst(['partials.content-single-' . get_post_type(), 'partials.content-single'])
@endwhile

@endsection