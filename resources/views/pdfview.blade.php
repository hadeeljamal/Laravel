<style type="text/css">
    table td, table th{
        border:1px solid black;
    }
</style>
<div class="container">

    <br/>

    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>pic</th>
        </tr>
        @foreach ($student as $key => $item)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td><img src="{{$item->path}}" style="width:50px"></td>
            </tr>
        @endforeach
    </table>
</div>
