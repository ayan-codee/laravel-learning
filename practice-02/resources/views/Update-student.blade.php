<form action="/list/updated/{{$std->id}}" method="POST">
    @csrf
    <h1>update data</h1>
    <input type="name" name="name" placeholder="enter your name" value="{{$std->name}}" id="">
    <br>
    <input type="number" name="batch" placeholder="enter your batch "  value="{{$std->batch}}" id="">
    <br>
    <input type="name" name="cource" placeholder="enter your cource "  value="{{$std->cource}}" id="">
    <br>
    <button>update</button>
    <a href="/list">cancel</a>
</form>