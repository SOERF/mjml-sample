<mjml>
    <mj-body>
        <mj-section>
            <mj-column>
                <x-template_mjml/>
            </mj-column>
        </mj-section>
        <mj-section>
            <mj-column>
                @foreach([1,2,3] as $number)
                    <mj-text>{{$number}}</mj-text>
                @endforeach
            </mj-column>
        </mj-section>
    </mj-body>
<!--    this is a html comment-->
{{--    this is a blade comment, but it is not recognised --}}
</mjml>
