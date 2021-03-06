@if($data['notice_display'] && $data['notice_display']->count() >0)
    @foreach($data['notice_display'] as $notice)
       <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="ace-icon fa fa-times"></i>
            </button>
            <h3>{{$notice->title}}</h3>
            <hr class="hr-2">
            {!! $notice->message !!}
        </div>
    @endforeach
@endif