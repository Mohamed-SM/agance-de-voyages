@extends('layouts.app')


@section('main')
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="tg-404error" style="padding: 250px 0;">
        <div class="container">
            <div class="row">
                <div class="tg-404errorcontent">
                    <h1>404</h1>
                    <h2>page n'exist pas</h2>
                    <div class="tg-description">
                        <p>Cette page n'exist pas...</p>
                    </div>
                    <a class="tg-btn" href="{{ route('home') }}"><span>page d'accuille</span></a>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
(function() {
    document.body.classList.add("tg-404errorpage");
})();
</script>
@endsection
