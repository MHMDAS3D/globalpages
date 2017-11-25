@extends('index')

@section('content')

    <h2>المتقدمين</h2>
    <a href="/applicant/add"><button type="button" class="btn btn-success waves-effect waves-light">إضافة متقدم</button></a>
    <div class="col-md-12 margin-top-10">
        <table id="example" class="table table-striped table-bordered display" style="width:100%">
            <thead>
            <tr>
                <th>الكود</th>
                <th>الاسم</th>
                <th>الجنس</th>
                <th>العنوان</th>
                <th>الخيارات</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>الكود</th>
                <th>الاسم</th>
                <th>الجنس</th>
                <th>العنوان</th>
                <th>الخيارات</th>
            </tr>
            </tfoot>
            <tbody>

            </tbody>
        </table>

    </div>
@endsection
