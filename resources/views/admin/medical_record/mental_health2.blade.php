<div>
    <label for="">Keterangan:</label>
    <p>
        Respon tidak benar = 0 | Respon Agak benar = 1 | Respon Benar = 2 ghfhf
    </p>
</div>
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
            @foreach ($mentalHealths2 as $item)
            <tr>
                <td>{{$x}}</td>
                <td>{{$item->question}}</td>
                <td>{{$item->type}}</td>

                <td><input type="number" name="mh2[{{$x}}]" id="mh2[{{$x}}]" style="width:50px"
                        value="{{old('mh2['.$x++.']', $record->mentalHealth2->find($item->id)->pivot->score ?? ' ')}}"></td>
            </tr>
            @endforeach
            @else
            @foreach ($mentalHealths2 as $item)
            <tr>
                <td>{{$x++}}</td>
                <td>{{$item->question}}</td>
                <td>{{$item->type}}</td>

                <td><input type="number" name="mh2[{{$x}}]" style="width:50px"></td>
            </tr>
            @endforeach
            @endisset

        </tbody>
    </table>
</div>
<br>
<div>
    <table class="table">
        <thead>
            <tr>
                <td class="text-center">Emosional</td>
                <td class="text-center">Perilaku</td>
                <td class="text-center">Hiperaktivitas</td>
                <td class="text-center">Teman Sebaya</td>
                <td class="text-center">Kekuatan</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="a" class="text-center">2</td>
                <td id="b" class="text-center">3</td>
                <td id="c" class="text-center">2</td>
                <td id="d" class="text-center">4</td>
                <td id="e" class="text-center">2</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div style="border: 1 solid black">
    <label for="">Total Skor Kesulitan</label><br>
    <label for="">Total Skor Kekuatan</label>
</div>
