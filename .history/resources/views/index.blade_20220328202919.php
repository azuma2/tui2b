<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('\resources\views\layouts\reset.css') }}" >
    <title>@yield('title')</title>
    <style>
    body {
      font-size:16px;
      margin: 5px;
      background-color: #2d197c;
    }
    
    
        td {
      padding: 5px 10px;
      text-align: center;
      
      
    }
    




    table{
      
    }

    .kakomi{
      border: solid;
    }

    .icon{
        height: 25px;
      width: 25px;
}

    .narabe{
      display:flex;
        flex-flow: column;
    }

    .button {
    background-image:url(img/cross.png);
       height: 25px;
      width: 25px;
    cursor: pointer;
    transition: 0.4s;
    outline: none;
    border: none;

}


    .card {
    width: 50vw;
    padding: 10px;
    position: absolute;
    top: -40px;
    left: 1%;
    
    border-radius: 10px;
}
    h1 {
      font-size:32px;
      color:white;
      text-shadow:1px 0 5px #289ADC;
      margin-left: 1px
    }

    .title{
          border: solid;border-color: #fff;
          border-width: 1px;
          padding: 10px;
    }
    .content {
      margin:10px; 
    }

    .bgazou{
      background-image: url(img/detail.png);
    }

    p{

color: #fff;

    }

    .comment{
      text-align: left;
    }
    .name{
font-size:28px;
     display: inline;
    }



    </style>
  </head>
  <body>
  <div class="container">
    <div class="card">
      <h1 class="title">ホーム</h1>
            <div class="tui2">
              @if ($errors->has('content'))
                  <tr>
                    <th>ERROR</th>
                  <td>
                  {{$errors->first('content')}} 
                </td>
            </tr>
          @endif



        <form action="/tui2/create" method="post">
            @csrf
          <input type="text" class="input-add" name="name" />
          <input type="text" class="input-add" name="content" />
          <input class="button" type="submit" value="追加" />
        </form>


 <a href="{{ url('/tui2/comment') }}">アバウト</a>
<a href="/comment">test</a>

          @csrf
          <div class="narabe">
        <table>
            @csrf

          
                    <tr>
            @foreach ($items as $item)
            <td>

<a href="#comment.php" class="blink">








            </td>

            <form action="/tui2/update" method="post">
              @csrf
              
              <td>
                <p class="name"></p>
                <img class="icon" src="img/heart.png">
              </td>
                          <td>
              <form action="/tui2/delete" method="post" >
                    @csrf
                <input  type="hidden" name="id" value="{{$item->id}}" >
                <input class="button" type="submit" value="" >
              </form>
            </td>
              <td>
                                <p class="comment">{{$item->name}}</p>
                <p class="comment">{{$item->content}}</p>
              </td>
            </form>






             <a href="comment">rinnku</a>

              <form action="/tui2/delete" method="post" >
                    @csrf
                <input  type="hidden" name="id" value="{{$item->id}}" >
                <input class="button" type="submit" value="削除" >
              </form>

            
          </tr>
          @endforeach
          
                  </table>
</div>
      </div>
    </div>
  </div>
  </div>

</body>
</html>
