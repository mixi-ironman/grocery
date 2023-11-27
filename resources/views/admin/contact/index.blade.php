@extends('admin.layouts.layout')

@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Phản hồi khách hàng</h4>
            </div>
            <div class="card-body">
                {{-- @if(session('success'))
                        <div id="success-alert" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                @endif --}}
                <table class="table" id="myTable_Contact">
                    <thead>
                    <tr>
                        <th scope="col"style="text-align: center;vertical-align:middle;">#</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Họ tên</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Email</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Nội dung phản hồi</th>
                        <th scope="col"style="text-align: center;vertical-align:middle;">Ngày tạo</th>
                        <td style="text-align: center;vertical-align:middle;">Action</td>
                    </tr>
                    </thead>
                    <tbody>
                    {{-- @php dd($categories)  @endphp --}}
                    @foreach($contacts as $key => $contact)
                    <tr>
                        <td scope="row" style="text-align: center;vertical-align:middle;">{{ $contact->id }}</td>
                        <td style="text-align: center;vertical-align:middle;">{{ $contact->name }}</td>
                        <td style="text-align: center;vertical-align:middle;">{{ $contact->email }}</td>
                        <td style="text-align: center;vertical-align:middle;">{{ $contact->message }}</td>
                        <td style="text-align: center;vertical-align:middle;">{{ $contact->created_at }}</td>

                        <td style="text-align:center;vertical-align:middle">
                            <form action="{{ route('contact.destroy',['id'=>$contact->id]) }}" method="post" style="display:block;padding:10px">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Bạn có chắc muốn xóa?')" type="submit" class="btn btn-info" style="margin:0;"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                    {{-- {!! \App\Helpers\Helper::contact($categories) !!} --}}
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                {{-- {{ $categories->links() }} --}}
            </div>
        </div>
    </div>
@endsection

{{-- @push('custom-script')

@endpush --}}


