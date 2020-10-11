
@extends('layouts.app', ['activePage' => 'RitFund', 'titlePage' => __('الصناديق')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                    <h4 class="card-title ">إدارة الصناديق</h4>
                    <p class="card-category"> الصناديق</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 text-right">
                                <a href="{{ route('RitFund.create') }}" class="btn btn-sm btn-primary">{{ __(' إضافة صندوق جيد') }}</a>
                            </div>
                        </div>
                        <table class="table">
                            <thead class="text-primary">
                                <tr>
                                <td></td>
                                <td>أسم الصندوق</td>
                                <td>الاعدادات</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($funds as $fund)
                                    <tr>
                                        <td class="id_canter"><img src="/uploads/ritFundImage/{{$fund->logo}}" alt="" style="text-align: center;width: 100px; height: 50px;"></td>
                                        <td>{{$fund->name}}</td>
                                        <td>
                                            <form action="{{ route('RitFund.destroy', $fund->id)}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="/RitFund/{{$fund->id}}/edit" class="btn btn-sm btn-primary">تعديل</a>
                                                <a href="/indicators/index/{{ $fund->id }}" class="btn btn-sm btn-worning">المؤشرات المالية</a>
                                                <button class="btn btn-sm btn-danger" type="submit">حذف</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                {{ $funds->links() }}
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
@endsection

