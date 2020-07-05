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
            @foreach ($learningModalities as $item)
            <tr>
                <td>{{$x}}</td>
                <td>{{$item->question}}</td>
                <td>{{$item->type}}</td>
                <td class="learning-modality" id="lm{{$x++}}">{{$show->learningModality->find($item->id)->pivot->score ?? 0}}</td>
            </tr>
            @endforeach
            @else
                <?php $x=1;?>
                @isset($record)
                @foreach ($learningModalities as $item)
                <tr>
                    <td>{{$x}}</td>
                    <td>{{$item->question}}</td>
                    <td>{{$item->type}}</td>
                    <td><input class="learning-modality" type="number" name="lm[{{$x}}]" id="lm{{$x}}" style="width:50px"
                        value="{{old('lm['.$x++.']', $record->learningModality->find($item->id)->pivot->score ?? 0)}}" min="0" max="3"></td>
                </tr>
                @endforeach
                @else
                @foreach ($learningModalities as $item)
                <tr>
                    <td>{{$x}}</td>
                    <td>{{$item->question}}</td>
                    <td>{{$item->type}}</td>
                    <td><input class="learning-modality" type="number" name="lm[{{$x}}]" id="lm{{$x++}}" style="width:50px" value="0" min="0" max="3"></td>
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
                <td class="text-center">Visual</td>
                <td class="text-center">Auditorik</td>
                <td class="text-center">Kinestetik</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="v" class="text-center">0</td>
                <td id="a" class="text-center">0</td>
                <td id="k" class="text-center">0</td>
            </tr>
        </tbody>
    </table>
</div>
<br>
<div style="border: 1 solid black">
    <label>Skor Modalitas Tipe Belajar Visual:</label>
    <p id="scorev">belum optimal</p>
    <label>Skor Modalitas Tipe Belajar Auditorik:</label>
    <p id="scorea">belum optimal</p>
    <label>Skor Modalitas Tipe Belajar Kinestetik:</label>
    <p id="scorek">belum optimal</p>
</div>

