@extends('back-end.layout.app')
 @php $row_num = 1;   $pageTitle = "عرض المقالات" @endphp  
@section('title')
   {{$pageTitle}}
@endsection

@section('content')

    @component('back-end.layout.header')
        @slot('nav_title')
        {{$pageTitle}} 
         <a href="{{ route($routeName.'.create') }}">  
            <button class="alert-success"> <i class="fa fa-plus"></i> </button>
         </a>
        @endslot  
    @endcomponent
    @component('back-end.shared.table' )
                    @if (session()->get('action') )
                        <div class="alert alert-success">
                            <strong>{{session()->get('action')}}</strong>
                        </div>
                    @endif
                    <table class="table table-bordered table-striped table-bottomless" id="ls-editable-table">
                        <thead>
                            <tr>
                            <th>#</th>
                            <th>العنوان</th>
                            <th>الوصف</th>
                            <th>الصورة</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rows as $item)
                                 <tr>
                                    <td > {{$row_num++}}</td>
                                    <td>{{$item->title}}</td>
                                    <td width="30%">     {{substr( strip_tags($item->description) , 0 , 500) }}</td>                                   
                                    <td width="35%">  <img src="{{asset($item->image)}}" height="200px" width="400px"></td>
                                    {{-- <td>{{ isset($item->user) ? $item->user->user_name : '' }}</td> --}}
                                    <td>
                                     @include('back-end.shared.buttons.delete')
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
    @endcomponent
@endsection
