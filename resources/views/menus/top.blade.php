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
      <a href="{{ route('menus.create') }}">レシピ作成画面に飛ぶ</a>
    </div>
  </div>

</div>

<div class="main-wrapper">
  <div class="main-wrapper__left">
    <!-- #######################################新着############################################## -->
    <div class="main-wrapper__left__box">
      <p class="main-wrapper__left__box--icon">新着レシピ</p>
      @foreach($menus as $menu)
      <div class="main-wrapper__left__box--contents">
        <div class="main-wrapper__left__box--contents--item">
          <div class="image">
            <img src="{{ $menu->image }}" alt="">
          </div>
          <p class="title">{{ $menu->title }}</p>
          <p class="user">作成者</p>
        </div>
      </div>
      @endforeach
      <div class="main-wrapper__left__box--link">
        <a href="#">もっと見る→</a>
      </div>
    </div>
    <!-- #############################################新着ここまで######################################################## -->
    <!-- ############################################今週のおすすめ############################################################### -->
    <div class="main-wrapper__left__box">
      <div class="main-wrapper__left__box">
        <p class="main-wrapper__left__box--icon">今週のオススメ</p>
        <div class="main-wrapper__left__box--contents">
          <div class="main-wrapper__left__box--contents--item">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1558030006-450675393462?
            ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1789&q=80" alt="">
            </div>
            <p class="title">タイトル</p>
            <p class="user">作成者</p>
          </div>
          <div class="main-wrapper__left__box--contents--item">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1558030006-450675393462?
            ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1789&q=80" alt="">
            </div>
            <p class="title">タイトル</p>
            <p class="user">作成者</p>
          </div>
          <div class="main-wrapper__left__box--contents--item">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1558030006-450675393462?
            ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1789&q=80" alt="">
            </div>
            <p class="title">タイトル</p>
            <p class="user">作成者</p>
          </div>
        </div>
        <div class="main-wrapper__left__box--link">
          <a href="#">もっと見る→</a>
        </div>
      </div>
    </div>
    <!-- ############################################今週のおすすめここまで############################################################### -->
    <!-- ############################################友達############################################################### -->

    <div class="main-wrapper__left__box">
      <div class="main-wrapper__left__box">
        <p class="main-wrapper__left__box--icon">フレンドの新着</p>
        <div class="main-wrapper__left__box--contents">
          <div class="main-wrapper__left__box--contents--item">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1558030006-450675393462?
            ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1789&q=80" alt="">
            </div>
            <p class="title">タイトル</p>
            <p class="user">作成者</p>
          </div>
          <div class="main-wrapper__left__box--contents--item">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1558030006-450675393462?
            ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1789&q=80" alt="">
            </div>
            <p class="title">タイトル</p>
            <p class="user">作成者</p>
          </div>
          <div class="main-wrapper__left__box--contents--item">
            <div class="image">
              <img src="https://images.unsplash.com/photo-1558030006-450675393462?
            ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1789&q=80" alt="">
            </div>
            <p class="title">タイトル</p>
            <p class="user">作成者</p>
          </div>
        </div>
        <div class="main-wrapper__left__box--link">
          <a href="#">もっと見る→</a>
        </div>
      </div>
    </div>
    <!-- ############################################友達ここまで############################################################### -->

  </div>
  <div class="main-wrapper__right">
    <div class="main-wrapper__right--category">
      @foreach($categories as $category)
        <p class="main-wrapper__right--category--title"><a href="#">{{ $category->name }}</a></p>
        <div class="main-wrapper__right--category--contents">
          @foreach($sub_categories as $sub_category)
            @foreach($sub_category as $data)
              @if($data->category_id == $category->id)
              <div class="main-wrapper__right--category--contents--sub">
                <div class="main-wrapper__right--category--contents--sub--item">
                  <a href="#">{{ $data->name }}</a>
                </div>
              </div>
              @endif
            @endforeach
          @endforeach
        </div>
      @endforeach
    </div>
    <div class="main-wrapper__right--opinion">
      ご意見・ご要望
      <form action="#">
        <textarea name="" id="" cols="30" rows="5"></textarea>
        <input type="subnit" value="送信する">
      </form>
    </div>
    <div class="main-wrapper__right--contact">
      問合せフォームへのリンク
      <a href="#">お問い合わせ詳細</a>
    </div>
  </div>
</div>
@endsection