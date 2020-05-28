<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Pertanyaan</th>
                <th>Jenis</th>
                <th>Skor</th>
            </tr>
        </thead>
        <tbody>
            <?php $x=1;?>
            @isset($record)
            @foreach ($learningModalities as $item)
            <tr>
                <td>{{$x++}}</td>
                <td>{{$item->question}}</td>
                <td>{{$item->type}}</td>
                <td><input type="number" name="lm[{{$x}}]" style="width:50px"
                    value="{{old('lm['.$x.']', $record->learningModality->find($item->id)->pivot->score ?? ' ')}}"></td>
            </tr>
            @endforeach
            @else
            @foreach ($learningModalities as $item)
            <tr>
                <td>{{$x++}}</td>
                <td>{{$item->question}}</td>
                <td>{{$item->type}}</td>
                <td><input type="number" name="lm[{{$x}}]" style="width:50px"></td>
            </tr>
            @endforeach
            @endisset

        </tbody>
    </table>
</div>
