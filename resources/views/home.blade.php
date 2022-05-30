@extends('base')

@section('content')
    <div class="row justify-content-center mb-5">
        <div class="col-9">
            {!!__('base.bio_content', [
                'age'=>\Carbon\Carbon::parse('1998-03-16')->diffInYears(),
                'xp_years' => ceil(\Carbon\Carbon::parse('2016-04-15')->diffInMonths()/12),
                'vue_years' => ceil(\Carbon\Carbon::parse('2019-01-01')->diffInMonths()/12),
            ])!!}
        </div>
    </div>
@endsection
