<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Pertanyaan</th>
                <th>Skor</th>
            </tr>
        </thead>
        <tbody>
            <?php $x=1;?>
            @isset($record)
            @foreach ($brainDominations as $item)
            <tr>
                <td>{{$x++}}</td>
                <td>{{$item->question}}</td>
                <td><input type="number" name="bd[{{$x}}]" style="width:50px"
                    value="{{old('bd['.$x.']', $record->brainDomination->find($item->id)->pivot->score ?? ' ')}}"></td>
            </tr>
            @endforeach
            @else
            @foreach ($brainDominations as $item)
            <tr>
                <td>{{$x++}}</td>
                <td>{{$item->question}}</td>
                <td><input type="number" name="bd[{{$x}}]" style="width:50px"></td>
            </tr>
            @endforeach
            @endisset

        </tbody>
    </table>
</div>
