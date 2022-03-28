
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
      margin-left: 1px;
    
    
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

    .daiji{
      align-items: center;

    }

.btn {
    
    border: 2px solid #dc70fa;
    font-size: 12px;
    color: #fff;
    background-color: #dc70fa;
    font-weight: bold;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.4s;
    outline: none;
}

.area2{
  border: 1px solid #ddd;
    border-radius: 6px;
    height: 5em;
    width: 300px;
    background: #eaedf2;
    font-size: 18px;
}


    </style>
  </head>
  <body>
  <div class="container">
    <div class="card">
      <h1 class="title">ホーム2</h1>
            <div class="tui2">





          <div class="narabe">
        <table>
            @csrf

          
                    <tr>
            @foreach ($items as $item)
            <td>

<p class="comment">{{$item->name}}</p>
            </td>



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
              <a href="{{ url('/') }}"><img class="icon" src="/../img/feather.png"></a>
            </td>
              <td>
                 
                <p class="comment">{{$item->content}}</p>
              </td>
            

            
          </tr>
          @endforeach
          
<tr>
  <td colspan="5">
    <p class="daiji">コメント</p>
  </td>
</tr>



<tr>
  @foreach ($items as $item)
  <td colspan="5">
<p class="comment">ゲスト</p>
    <p class="comment">{{$item->content}}</p>
  </td>
</tr>
@endforeach



              @if ($errors->has('content'))
                  <tr>
                    <th>ERROR</th>
                  <td>
                  {{$errors->first('content2')}} 
                </td>
            </tr>
          @endif


<tr>
  <td colspan="5">
        <form action="/tui2/create" method="post">
            @csrf
          <input type="text" class="area2" name="content2" />
          <input class="btn" type="submit" value="追加" />
        </form>
  </td>
</tr>




                  </table>
</div>
      </div>
    </div>
    
  </div>
  
  </div>

                

</body>
</html>