<header>
    <div class="container">
    <div class="row">
     <div class="col-sm-3">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="d-flex align-items-center">
                <img class="w-25" src="image/ticket.svg">
                <p>TICKET</p>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">TOP</a></li>
                  　<li class="nav-item"><a class="nav-link" href="#">記事一覧</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">RANKING</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">MYPAGE</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">LOGIN</a></li>
                </ul>
            </div>
        </nav>
        <div class="form-group row">
            
            <input type="text" class="form-control" name="title">
            <button class="btn btn-default" type="submit">検索</button>
            <input type="radio">映画
            <input type="radio">テーマパーク
            </div>
        </div>
        </div>
        </div>
        </div>
        
</header>