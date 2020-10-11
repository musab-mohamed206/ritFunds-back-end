
@extends('layouts.app', ['activePage' => 'Property', 'titlePage' => __('عقارات الصناديق')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                    <h4 class="card-title ">إدارة العقارات</h4>
                    <p class="card-category">عقارات الصناديق</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('FundProperty.create') }}" class="btn btn-sm btn-primary">{{ __(' إضافة عقار جيد') }}</a>
                            </div>
                        </div>
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                <td>أسم الصندوق</td>
                                <td>أسم العقار</td>
                                <td>الاعدادات</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($propetes as $propete)
                                    <tr>
                                        <td>{{$propete->ritFundName->name}}</td>
                                        <td>{{$propete->property_name}}</td>
                                        <td>
                                            <form action="{{ route('FundProperty.destroy', $propete->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="/FundProperty/{{$propete->id}}/edit" class="btn btn-sm btn-primary">تعديل</a>
                                                <button class="btn btn-sm btn-danger" type="submit">حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                {{ $propetes->links() }}
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
