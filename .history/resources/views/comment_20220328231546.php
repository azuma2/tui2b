<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('\resources\views\layouts\reset.css') }}" >
    <title>コメント画面</title>
    <style>


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
              <a href="{{ url('/tui2/comment') }}"><img class="icon" src="/../img/feather.png"></a>
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
