<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Print Labels</title>
    <link href="labels.css" rel="stylesheet" type="text/css">
    <style>
        body {
            width: 13.5in;
            margin-top: .29in;
            margin-left:.005in;
            font-size: 20px;
        }
        .label {
            width: 3.01in;
            /* plus .6 inches from padding */
            height: 2.1in;
            /* plus .125 inches from padding */
            padding: .125in .3in 0;
            margin-right: .125in;
            /* the gutter */
            float: left;
            text-align: center;
            overflow: hidden;
            outline: 1px dotted;
            /* outline doesn't occupy space like border does */
        }
        .page-break {
            clear: left;
            display: block;
            page-break-after: always;
        }
        .barcode {
            /* margin-right: 1in;
            width: 60%; */
            padding-left: 55px;
            padding-top:10px;
            padding-bottom:10px;
        }
    </style>

</head>
<script type="text/javascript">
    window.print();
    window.addEventListener('afterprint', (event) => {
    console.log('After print');
    window.location.href = "{{ route('kitting') }}"
    });
    </script>
<body>
    @foreach ($materials as $item)
    <div class="label">
        <b>
            {{$item->uuid}}<br>
            {{$item->material }}<br>
            <div class=barcode>
                {{---------------------------------------------------------------------
                For print getBarcodeHTML: print bakcground must be true on browser
                DNS1D::getBarcodeHTML($item->material,Type of barcode,Margin,height)
                -----------------------------------------------------------------------}}
                {!! DNS1D::getBarcodeHTML($item->material,'C128',1.5,40)!!}
            </div>
            {{$item->nomenclature}}<br>
            {{$item->designation}}<br>
            QTE: {{$item->quantity_required}}<br>
        </br>
    </div>
    @endforeach

    <div class="page-break"></div>

</body>

</html>
