
@extends('layouts.app', ['activePage' => 'RitFund', 'titlePage' => __('الصناديق')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                    <h4 class="card-title ">إدارة المؤشرات المالية</h4>
                    <p class="card-category"> الكؤشرات المالية للصندوق</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="/indicators/create/{{ $fund_id }}" class="btn btn-sm btn-primary">{{ __(' إضافة مؤشر مالي جيد') }}</a>
                            </div>
                        </div>
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                <td>السنة</td>
                                <td>الاعدادات</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($financials as $financial)
                                    <tr>
                                        <td>{{$financial->year}}</td>
                                        <td>
                                            <form action="{{ route('FinancialIndicator.destroy', $financial->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="/FinancialIndicator/{{$financial->id}}/edit" class="btn btn-sm btn-primary">تعديل</a>
                                                <button class="btn btn-sm btn-danger" type="submit">حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                {{ $financials->links() }}
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection
