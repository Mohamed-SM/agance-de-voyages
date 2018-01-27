@extends('layouts.app')


@section('main')
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="tg-404error">
        <div class="container">
            <div class="row">
                <div class="tg-404errorcontent">
                    <h1>401</h1>
                    <h2>Access non autoriser</h2>
                    <div class="tg-description">
                        <p>ce sera rapporté</p>
                    </div>
                    <a class="tg-btn" href="{{ route('home') }}"><span>go back to home</span></a>
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
