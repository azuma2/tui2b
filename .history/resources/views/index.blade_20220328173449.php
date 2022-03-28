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
    text-align: left;
    border: 2px solid #dc70fa;
    font-size: 12px;
    color: #dc70fa;
    background-color: #fff;
    font-weight: bold;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.4s;
    outline: none;
}
.input-add {
    width: 80%;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    font-size: 14px;
    outline: none;
}
.input-update {
    width: 90%;
    padding: 5px;
    border-radius: 5px;
    border: 1px solid #ccc;
    appearance: none;
    font-size: 14px;
    outline: none;
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
display: inline;
color: #fff;

    }

    .comment{
      text-align: left;
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







          @csrf
          <div class="narabe">
        <table>
            @csrf

          
                    <tr>
            @foreach ($items as $item)
            <td>

<a href="#comment.php" class="blink">
        <div class="bgazou" ></div>

            </td>

            <form action="/tui2/update" method="post">
              @csrf
              
              <td>
                <p nam>test</p>
                
                <img class="icon" src="img/heart.png">
              </td>
              <td>
                <p class="comment">{{$item->content}}</p>
              </td>
              <td>
                <input type="hidden"  name="id" value="{{$item->id}}">
                <input class="button" type="submit" value="更新" >
              </td>
            </form>
           
            <td>
              <form action="/tui2/delete" method="post" >
                    @csrf
                <input  type="hidden" name="id" value="{{$item->id}}" >
                <input class="button" type="submit" value="削除" >
              </form>
            </td>
            </div>
            
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
