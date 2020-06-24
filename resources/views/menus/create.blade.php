@extends('layouts.app')

@section('content')
<form action="#">

  <input type="hidden" value="{{ Auth::user()->id }}">

  <div>
    <label for="title">Title:</label>
    <input type="text" name="title">
  </div>

  <div>
    <label for="image">Image:</label>
    <input type="file" name="image">
  </div>

  <div>
  <select name="" id="">
    @foreach($categories as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
    </select>
  </div>

  <div>
    <label for="point">Point:</label>
    <textarea name="point" id="" cols="25" rows="4"></textarea>
  </div>

  <div>
    <label for="upbringing">Upbringing:</label>
    <textarea name="upbringing" id="" cols="25" rows="4"></textarea>
  </div>

  <div>
    <input type="submit" name="" id="" value="送信">
  </div>
</form>
@endsection