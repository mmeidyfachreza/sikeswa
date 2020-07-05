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
            @isset($show)
            @foreach ($brainDominations as $item)
            <tr>
                <td>{{$x}}</td>
                <td>{{$item->question}}</td>
                <td>{{$item->type}}</td>
                <td class="brain-domination" id="bd{{$x++}}">{{$show->brainDomination->find($item->id)->pivot->score ?? 0}}</td>
            </tr>
            @endforeach
            @else
                <?php $x=1;?>
                @isset($record)
                @foreach ($brainDominations as $item)
                <tr>
                    <td>{{$x}}</td>
                    <td>{{$item->question}}</td>
                    <td><input type="number" name="bd[{{$x}}]" id="bd{{$x++}}" style="width:50px" class="brain-domination"
                        value="{{old('bd['.$x++.']', $record->brainDomination->find($item->id)->pivot->score ?? ' ')}}" min="0" max="1"></td>
                </tr>
                @endforeach
                @else
                @foreach ($brainDominations as $item)
                <tr>
                    <td>{{$x}}</td>
                    <td>{{$item->question}}</td>
                    <td><input class="brain-domination" type="number" name="bd[{{$x}}]" id="bd{{$x++}}" style="width:50px" min="0" max="1" value="0"></td>
                </tr>
                @endforeach
                @endisset
            @endisset
        </tbody>
    </table>
</div>
<br>
<div style="border: 1 solid black">
    <label>Interpretasi:</label>
    <p id="interpretation">Silahkan isi data diatas terlebih dahulu</p>
</div>