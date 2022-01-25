@extends('layouts.faculty')
@section('content')
<section class="articles mt-3">
      @foreach ($classes as  $key => $class)
      @foreach ($class->getClass as $item)
      <form action="{{ route('faculty.class_view', $item->class_id)}}" method="GET" class="mb-4">
        @csrf
        <button type="submit">
          <!--  ARTICLE  -->
          <article class="articles__article-card">

            <!--  ARTICLE TOP  -->
            <div class="articles__article-card__top d-flex flex-row justify-content-center align-items-center">
                <h3> Class {{ ++$key }}</h3>
            </div>

            <!--  ARTICLE BOTTOM  -->
            <div class="articles__article-card__bottom">
                <div class="articles__article-card__bottom__date-title">
                <h5 class="articles__article-card__bottom__date-title__title">
                  {{$item->class_name}}
                </h5>
                </div>
            </div>
          </article>
        </button>
    </form>
      @endforeach
    @endforeach

</section>
@endsection