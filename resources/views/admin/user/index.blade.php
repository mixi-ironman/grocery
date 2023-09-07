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
                        <th scope="col"style="text-align: center;vertical-align:middle;">Image</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">IsActive</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">description</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Created At</th>
                        <td style="text-align: center;vertical-align:middle;">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                
                    
                    </tbody>
                </table>
            </div>
            {{-- <div class="card-footer">
                {{ $sliders->links() }}
            </div> --}}
        </div>
    </div>
@endsection

