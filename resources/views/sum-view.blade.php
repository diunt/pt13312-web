<h1>PHP 3</h1>
<form action="{{route('sum')}}" method="POST">
    {{csrf_field()}}
    <input type="number" placeholder="N 1" name="n_1">
    <input type="number" placeholder="N 2" name="n_2">
    <input type="number" placeholder="N 3" name="n_3">
    <button type="submit">Tinh PT</button>
</form>