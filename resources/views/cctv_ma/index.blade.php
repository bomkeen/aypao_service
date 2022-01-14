@extends('layouts.master')
@section('title', 'CCTV-ma')
@push('script')
    <link rel="stylesheet" href="{{ asset('asset/js/fullcalendar/fullcalendar.min.css') }}">

    {{-- <style type="text/css">
        html,
        body {
            maring: 0;
            padding: 0;
            font-family: tahoma, "Microsoft Sans Serif", sans-serif, Verdana;
            font-size: 12px;
        }

        #calendar {
            max-width: 700px;
            margin: 0 auto;
            font-size: 13px;
        }

    </style> --}}
@endpush

@push('script-footer')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="  {{ asset('asset/js/fullcalendar/lib/moment.min.js') }}"></script>
    <script type="text/javascript" src="  {{ asset('asset/js/fullcalendar/fullcalendar.min.js') }}"></script>
    <script type="text/javascript" src="  {{ asset('asset/js/fullcalendar/lang/th.js') }}"></script>
    <script type="text/javascript">
        $(function() {

            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today', //  prevYear nextYea
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay',
                },
                buttonIcons: {
                    prev: 'left-single-arrow',
                    next: 'right-single-arrow',
                    prevYear: 'left-double-arrow',
                    nextYear: 'right-double-arrow'
                },
                //        theme:false,
                //        themeButtonIcons:{
                //            prev: 'circle-triangle-w',
                //            next: 'circle-triangle-e',
                //            prevYear: 'seek-prev',
                //            nextYear: 'seek-next'
                //        },
                //        firstDay:1,
                //        isRTL:false,
                //        weekends:true,
                //        weekNumbers:false,
                //        weekNumberCalculation:'local',
                //        height:'auto',
                //        fixedWeekCount:false,
                // events: {
                //     url: 'data_events.php',
                //     error: function() {

                //     }
                // },
                // dayRender: function() {
                //     el = "<button class='dayButton' data-date='"
                //     "'>Click me</button>";

                // },

                eventLimit: true,
                //        hiddenDays: [ 2, 4 ],
                lang: 'th',
                dayClick: function(date) {

                    // alert('บันทีกข้อมูลวันที่ : ' + date.format());
                    // date = date.format();
                    let url = "{{ route('cctv_ma_add', ':date') }}";
                    // let url = "{{ route('cctv_ma_add') }}" + "/" + date.format();
                    // url = url.replace(':date', date.format());
                    url = url.replace(':date', date.format());

                    document.location.href = url;

                }
            });


        });
    </script>
@endpush


@section('content')
    <div class="container">
        <div style="margin:auto;width:800px;">
            <div id='calendar'></div>
        </div>
    </div>


@endsection
