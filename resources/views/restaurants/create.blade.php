@extends('layouts.main')

@section('title', '登録画面')

@section('content')
<form action="{{ route('restaurants.store') }}" method="post">
    @csrf
    <div>
        <label for="name">店名</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
    </div>
    <div>
        <label for="name_kana">店名（かな）</label>
        <input type="text" name="name_kana " id="name_kana" value="{{ old('name_kana') }}">
    </div>
    <div>
        <label for="address">住所</label>
        <input type="text" name="address" id="address" value="{{ old('address') }}">
    </div>
    <div>
        <label for="opentime">開店時間</label>
        <input type="text" name="opentime" id="opentime" value="{{ old('opentime') }}">
    </div>
    <div>
        <label for="holiday">定休日</label>
        <input type="text" name="holiday" id="holiday" value="{{ old('holiday') }}">
    </div>
    
    <div>
        <label for="category">カテゴリー</label>
        <select name="category" id="category" >
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if(old('category')==$category->id  ) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="note">その他</label>
        <input type="text" name="note" id="note" value="{{ old('note') }}">
    </div>
    <div>
        <label for="pr_short">一言PR</label>
        <input type="text" name="pr_short" id="pr_short" value="{{ old('pr_short') }}">
    </div>
    <div>
        <label for="pr_long">PR</label>
        <input type="text" name="pr_long" id="pr_long" value="{{ old('pr_long') }}">
    </div>
    <div>
        <label for="img_path">画像URL</label>
        <input type="text" name="img_path" id="img_path" value="{{ old('img_path') }}">
    </div>
    <div>
        <label for="latitude">緯度</label>
        <input type="text" name="latitude" id="latitude" value="{{ old('latitude') }}">
    </div>
    <div>
        <label for="longitude">経度</label>
        <input type="text" name="longitude" id="longitude" value="{{ old('longitude') }}">
    </div>
    <input type="submit" value="登録">
</form>
@endsection