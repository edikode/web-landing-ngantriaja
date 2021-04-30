@extends('frontend.layouts.app')

@section('title', 'User title')

@section('content')
<div class="text-center">
    Isi content
</div>
@endsection

@push('after-style')
<style>
    .text-center {
        text-align: center;
    }
</style>
@endpush

@push('after-script')
<script>
    console.log('after script')
</script>
@endpush