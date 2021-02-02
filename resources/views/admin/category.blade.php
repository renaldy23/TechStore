@extends('admin.template')

@section('content')
    <div class="container-fluid">
        <form action="" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Make a new Category" aria-label="Recipient's username" aria-describedby="button-addon2" id="category">
                <div class="input-group-append">
                    @csrf
                    <button class="btn btn-info" type="button" id="button-addon2" onclick="createData()">Submit</button>
                </div>
            </div>
            <div id="alert-content">

            </div>
            <div class="row bg-white p-4">
                <div class="col">
                    <h5>Category</h5>
                    <hr>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Category</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('script')
    <script>
        function createData(){
            $(document).ready(function(){
                $.ajax({
                    type: "POST",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "/category/store",
                    data: {
                        category : $("#category").val()
                    },
                    dataType: "json",
                    success: function (response) {
                        $("#alert-content").append(`
                            <div class="alert alert-success" role="alert">
                                `+response.success+`
                            </div>
                        `)
                    }
                });
            })
        }
    </script>
@endpush