<div>
    <label for="">Keterangan:</label>
    <p>
        Respon tidak benar = 0 | Respon Agak benar = 1 | Respon Benar = 2
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
            @isset($show)
            @foreach ($mentalHealths as $item)
            <tr>
                <td>{{$x}}</td>
                <td>{{$item->question}}</td>
                <td>{{$item->type}}</td>
                <td class="mental-health" id="mh{{$x++}}">{{$show->mentalHealth->find($item->id)->pivot->score ?? 0}}</td>
            </tr>
            @endforeach
            @else
                <?php $x=1;?>
                @isset($record)
                @foreach ($mentalHealths as $item)
                <tr>
                    <td>{{$x}}</td>
                    <td>{{$item->question}}</td>
                    <td>{{$item->type}}</td>

                    <td><input type="number" name="mh[{{$x}}]" id="mh{{$x}}" style="width:50px" class="mental-health"
                            value="{{old('mh['.$x++.']', $record->mentalHealth->find($item->id)->pivot->score ?? ' ')}}" min="0" max="2"></td>
                </tr>
                @endforeach
                @else
                @foreach ($mentalHealths as $item)
                <tr>
                    <td>{{$x}}</td>
                    <td>{{$item->question}}</td>
                    <td>{{$item->type}}</td>

                    <td><input class="mental-health" type="number" id="mh{{$x}}" value="0" name="mh[{{$x++}}]" style="width:50px" min="0" max="2"></td>
                </tr>
                @endforeach
                @endisset
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
                <td id="e" class="text-center">0</td>
                <td id="c" class="text-center">0</td>
                <td id="h" class="text-center">0</td>
                <td id="p" class="text-center">0</td>
                <td id="pr" class="text-center">0</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div style="border: 1 solid black">
    <label>Total Skor Kesulitan</label>
    <p id="difficulty">0</p>
    <br>
    <label>Total Skor Kekuatan</label>
    <p id="strength">0</p>
</div>
