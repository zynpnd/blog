@extends('front.layouts.master')
@section('title','iletişim')
@section('bg','https://startbootstrap.github.io/startbootstrap-clean-blog/assets/img/contact-bg.jpg')
@section('content')

        <div class="col-md-8 ">
            @if(session('success'))
            <div class="alert alert-success">
               {{session('success')}}
            </div>
            @endif
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>

                @endif
            <p>Bizimle iletişime geçebilirsiniz.</p>
            <form method="post" action="{{ route('contact.post') }}">
                @csrf
                <div class="control-group">
                    <div class="form-group  controls">
                        <label>Ad Soyad</label>
                        <input type="text" class="form-control" value="{{old('name')}}" placeholder="Ad Soyad" name="name" required >
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group  controls">
                        <label>Email Adresi</label>
                        <input type="email" class="form-control" value="{{old('email')}}" placeholder="Email Adresi" name="email" required>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group  controls">
                        <label>Konu</label>
                        <select class="form-control" name="topic">
                            <option @if(old('topic')== "Bilgi") selected @endif>Bilgi</option>
                            <option @if(old('topic')== "Destek") selected @endif>Destek</option>
                            <option @if(old('topic')==" Genel") selected @endif>Genel</option>
                        </select>

                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group  controls">
                        <label>Mesajınız</label>
                        <textarea rows="5" class="form-control"   placeholder="Mesajınız" name="message" required >{{old('message')}}</textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
                <br>
                <div id="success"></div>
                <button type="submit" class="btn btn-primary" id="sendMessageButton">Gönder</button>
            </form>
        </div>
    <div class="col-md-4">
        <div class="card-group">
            <div class="card card-default">
                <div class="card-body">Panel Content</div>
            </div>
            <div class="card card-default">
                <div class="card-body">Panel Content</div>
            </div>
        </div>
    </div>


@endsection


