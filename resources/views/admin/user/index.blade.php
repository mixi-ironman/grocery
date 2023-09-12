@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">User</h4>
            </div>
            <div class="card-body">
                <a class="btn btn-outline-primary" href="{{ route('user.create') }}"><i class="fa-brands fa-openid"></i> Add User</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">#</th>
                        <th scope="col"style="max-width:200px;text-align: center;vertical-align:middle;">Name</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Email</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Phone</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Địa chỉ</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Status</th>
                        <td style="text-align: center;vertical-align:middle;">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $user)
                        <tr>
                            <td scope="row" style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $user->id }}</td>
                            <td style="max-width:200px; text-align: center;vertical-align:middle;max-width:150;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $user->name }}</td>
                            {{-- <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                <img style="width:180px;height:120px;object-fit: cover;border-radius:5px;border:1px solid rgb(247, 181, 181);box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);" src="{{ asset('uploads/') }}/{{ $slider->image }}" >
                            </td> --}}
                            <td style="max-width:200px; text-align: center;vertical-align:middle;max-width:150;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $user->email }}</td>
                            <td style="max-width:200px; text-align: center;vertical-align:middle;max-width:150;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $user->phone }}</td>
                            <td style="max-width:200px; text-align: center;vertical-align:middle;max-width:150;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $user->address }}</td>

                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">
                                <a href="{{ route('user.update', ['id' => $user->id]) }}" class="change-status" data-status = "{{ $user->status }}">
                                    @if( $user->status === 1)
                                        <span class="btn btn-primary btn-xs" style="margin:0">Yes</span>
                                    @elseif($user->status === 0)
                                        <span class="btn btn btn-danger btn-xs" style="margin:0">No</span>
                                    @endif
                                </a>
                            </td>
                            </td>
                            <td style="text-align: center;vertical-align:middle;max-width:200px;white-space: wrap;overflow: hidden; text-overflow: ellipsis;">{{ $user->created_at->format('d/m/Y h:i:s') }}</td>
                            <td style="text-align:center;vertical-align:middle" >
                                <form action="{{ route('user.destroy',['id'=>$user->id]) }}" method="post" style="display:block;padding:10px">
                                    @csrf
                                    @method('DELETE')
                                    <a class="btn btn-primary" href="{{ route('user.edit',['id'=>$user->id]) }}" style="margin:0 5px 0 0;"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <button type="submit" class="btn btn-info" style="margin:0;"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{ $users->links() }}
            </div>
        </div>
    </div>
@endsection


@push('custom-script')
    <script>
        $(document).ready(function () {
            $(document).on("click", ".change-status", function (e) {
                e.preventDefault();
    
                let statusIcon = [
                    '<span class="btn btn btn-danger btn-xs">No</span>',
                    '<span class="btn btn-primary btn-xs">Yes</span>'
                ]
    
                let url = $(this).attr('href');
                let status = $(this).attr('data-status');
                let _this = $(this);
                let updateData = {
                    _token: '{{ csrf_token() }}',
                };
    
                if (status != undefined) {
                    updateData.status = status == 1 ? 0 : 1;
                }

                // console.log(updateData)
   
                $.ajax({
                    type: 'PUT',
                    url: url,
                    data: updateData,
                    dataType: 'json',
                    success: function (data) {
                        if (status != undefined) {
                            _this.attr('data-status', data.status);
                            _this.empty();
                            _this.html(statusIcon[data.status]);
                        }

                        alert('Cập nhật trạng thái thành công!')
                    },
                    error: function (error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>
@endpush

