@extends('admin.dashboard')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Thêm chương sách</h3>
                </div>
                
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('book.sections.update',['book_id' => $book->id, 'id' => $sections->id])}}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md">
                    <div class="form-group">
                        <Strong>Tên chương</Strong>
                            <input type="text" name="sections_name" value="{{$sections->sections_name}}"
                                class="form-control" placeholder="Nhập tên chương">
                        </div>
                        <div class="form-group">
                        <Strong>Nội dung chương</Strong>
                            <input type="text" name="sections_content" value="{{$sections->sections_content}}"
                                class="form-control" placeholder="Nhập nội dung chương">
                        </div>
                        <!-- <input type="hidden" name="book_id" value="{{$sections->book_id}}"> tesst -->
                    </div>
                </div>
                    <button type="submit" class="btn btn-success mt-2">Lưu thay đổi</button>
                </form>
            </div>
        </div>
    </div>
    @endsection