@extends('layouts.app')

@section('content')
<div class="top-wrapper">

  <div class="top-wrapper__left">
    <div class="top-wrapper__left--logo">CookRec</div>
  </div>

  <div class="top-wrapper__center">
    <div class="top-wrapper__center--search">
      <form action="#">
        <input type="text" class="recipe-search" placeholder="調べたいレシピを検索">
        <input type="submit" class="serch-submit" value="検索">
      </form>
    </div>
    <div class="top-wrapper__center--content">
      人気検索ワードが出てくる
    </div>
  </div>

  <div class="top-wrapper__right">
    <div class="top-wrapper__right--dir">
      <a href="#">保存したレシピ一覧に飛ぶ</a>
    </div>
    <div class="top-wrapper__right--create">
      <a href="#">レシピ作成画面に飛ぶ</a>
    </div>
  </div>

</div>

<div class="main-wrapper">
  <div class="main-wrapper__left">
    未定
  </div>
  <div class="main-wrapper__right">
    <div class="main-wrapper__right--category">
      カテゴリー別のリンク
    </div>
    <div class="main-wrapper__right--opinion">
      ご意見・ご要望
    </div>
    <div class="main-wrapper__right--contact">
      問合せフォームへのリンク
    </div>
  </div>
</div>
@endsection