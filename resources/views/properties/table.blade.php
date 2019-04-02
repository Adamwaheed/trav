<table class="table table-responsive" id="properties-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Category Id</th>
        <th>Body</th>
        <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($properties as $property)
        <tr>
            <td>{!! $property->name !!}</td>
            <td>{!! $property->category_id !!}</td>
            <td>{!! $property->body !!}</td>
            <td>{!! $property->status !!}</td>
            <td>
                {!! Form::open(['route' => ['properties.destroy', $property->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('properties.show', [$property->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('properties.edit', [$property->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>