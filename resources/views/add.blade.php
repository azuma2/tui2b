
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('\resources\views\layouts\reset.css') }}" >
    <title>コメント画面</title>
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
    

    tr{
      border: solid;border-color: #fff;
      border-width: 1px;
    }



    table{
    border-collapse: collapse;
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
    background-image:url(/../img/cross.png);
    background-size: 25px;
       height: 25px;
      width: 25px;
    cursor: pointer;
    transition: 0.4s;
    outline: none;
    border: none;
    background-color: transparent;
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
      <h1 class="title">ホーム2</h1>
            <div class="tui2">
              @if ($errors->has('content'))
                  <tr>
                    <th>ERROR</th>
                  <td>
                  {{$errors->first('content')}} 
                </td>
            </tr>
          @endif




          <div class="narabe">
        <table>
            @csrf

          
                    <tr>
            @foreach ($items as $item)
            <td>

<p class="comment">{{$item->name}}</p>
            </td>

<div></div>

            <form action="/tui2/update" method="post">
              @csrf
              
              <td>
                <p class="name"></p>
                <img class="icon" src="/../img/heart.png">
              </td>
                          <td>
                            </form>
              <form action="/tui2/delete" method="post" >
                    @csrf
                <input  type="hidden" name="id" value="{{$item->id}}" >
                <input class="button" type="submit" value="" >
              </form>
            </td>
            <td>
              <a href="{{ url('index') }}"><img class="icon" src="/../img/feather.png"></a>
            </td>
              <td>
                 
                <p class="comment">{{$item->content}}</p>
              </td>
            

            
          </tr>
          <h3 class="title">コメント3</h3>
          @endforeach
          
                <h3 class="title">コメント</h3>



                  </table>
</div>
      </div>
    </div>
  </div>
  </div>
<div>komennto2 </div>
                <h3 class="title">コメント2</h3>

</body>
</html>
