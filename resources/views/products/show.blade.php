@extends('products.layout')

@section('content')
<script src="{{ asset('js/AddReview.js') }}"></script>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $product->detail }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Reviews:</strong>
                @foreach($comments as $comment)
                <p>Mark: {{ $comment['mark'] }}</p>
                <p>Text: {{ $comment['text'] }}</p>
                @endforeach
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mark:</strong>
                <input type="hidden"  name="product_id" id="product_id" value="{{ $product->id }}">
                <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                <input type="text" id="review_mark" name="mark">
                <strong>Text:</strong>
                <input type="text" id="review_text" name="text">
                <button id="send_review">Add review</button>
            </div>
        </div>
        <div id="comments"></div>
    </div>
@endsection