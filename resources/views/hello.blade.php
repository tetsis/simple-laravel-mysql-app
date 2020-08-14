<!DOCTYPE html>
<html>
hello
<form method="POST">
    <ul>
        @foreach ($items as $item)
        <li>{{ $item->created_at }}</li>
        @endforeach
    </ul>
    {{ csrf_field() }}
    <div><input type="submit" name="save" value="Save"></div>
</form>
</html>
