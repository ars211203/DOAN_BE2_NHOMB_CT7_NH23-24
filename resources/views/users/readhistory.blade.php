<link rel="stylesheet" href="{{asset('css/readhistory.css')}}">

<!DOCTYPE html
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Readook </title>
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar" style="background-color: #555;">
        <div class="brand">
          <a  href="{{route('index')}}">
            <h1><span>R</span>ead <span>D</span>ook</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="{{route('index')}}">Trang chủ</a></li>
            <li><a href="{{route('list.follow')}}">Theo dõi</a></li>
            <li><a href="{{route('readhistory')}}" data-after="Projects">Lịch sử đọc</a></li>
            <li><a href="#" data-after="About">Giới thiệu</a></li>
            @if(is_null(Auth::id()))
            <li><a href="{{route('login')}}" data-after="Contact">Đăng nhập</a></li>
            @endif
            @if(!is_null(Auth::id()))
            <li><a href="{{route('signOut')}}" data-after="Contact">Đăng xuất: {{Auth::id()}}</a></li>
            <li>
              <a href="{{route('profile',Auth::id())}}" class="icon" data-after="About"><i class="fa-solid fa-user"></i></a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </section>
<table class="custom-table">
    <thead>
        <tr>
            <th>Cuốn sách</th>
            <th>Số trang đã đọc</th>
            <th>Thời gian cập nhật</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user_read_history as $history)
        <tr>
            <td>{{ $history->book->book_name }}</td>
            <td>{{ $history->last_read_page }}</td>
            <td>{{ $history->updated_at->format('d/m/Y H:i:s') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
