<div class="post--item col-md-4">
  <div class="post--image" style="background-image: url('{{ the_post_thumbnail_url()}}');"></div>
  <div class="post--text">
    <div class="post--categories">{{ the_category(' • ') }}</div>
    <a class="post--title" href="{{ the_permalink() }}">{{ the_title() }}</a>
  </div>
  <div class="post--excerpt">{{ the_excerpt(__('(more…)')) }}</div>
</div>