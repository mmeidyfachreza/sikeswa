<div class="mt-3">
    <div class="text-center">
        <h5>Riwayat Kesehatan Anak</h5>
    </div>
    <hr>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>1.Memiliki masalah kesehatan</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(1)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                <?php $x=1?>
                @foreach ($choice1 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" value="{{$item}}" @if ($record->healthScreening->find(1)->pivot->choice == $item) checked="" @endif name="a[1]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a1yes" type="radio" value="ya" name="a[1]"
                        class="form-control-custom radio-custom">
                    <label for="a1yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a1no" type="radio" value="tidak" checked="" name="a[1]"
                        class="form-control-custom radio-custom">
                    <label for="a1no">Tidak</label>
                </div>
            </div>
            @endisset
            @endisset
            
        </div>
        <div class="form-group">
            <label>Sebutkan Masalahnya</label>
            @isset($show)
            {{$show->healthScreening->find(1)->pivot->description ?? '...'}}
            @else
            @isset($record)
            <textarea name="ket_a[1]" placeholder="Sebutkan Masalahnya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[1]',$record->healthScreening->find(1)->pivot->description ?? '')}}</textarea>
            @else    
            <textarea name="ket_a[1]" placeholder="Sebutkan Masalahnya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[1]')}}</textarea>
            @endisset
            @endisset
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>2.Alergi (tidak tahan ) makanan tertentu</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(2)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice1 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(2)->pivot->choice == $item) checked="" @endIf value="{{$item}}" name="a[2]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
                
                
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a2yes" type="radio" value="ya" name="a[2]"
                        class="form-control-custom radio-custom">
                    <label for="a2yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a2no" type="radio" value="tidak" checked="" name="a[2]"
                        class="form-control-custom radio-custom">
                    <label for="a2no">Tidak</label>
                </div>
            </div>
            @endisset
            @endisset
            
        </div>
        <div class="form-group">
            <label>Sebutkan Makananya</label>
            @isset($show)
            {{$show->healthScreening->find(2)->pivot->description ?? '...'}}
            @else
            @isset($record)
            <textarea name="ket_a[2]" placeholder="Sebutkan Makananya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[2]',$record->healthScreening->find(2)->pivot->description ?? '')}}</textarea>
            @else    
            <textarea name="ket_a[2]" placeholder="Sebutkan Makananya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[2]')}}</textarea>
            @endisset
            @endisset
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>3.Alergi (tidak tahan ) obat tertentu</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(3)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice1 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(3)->pivot->choice == $item) checked="" @endIf value="{{$item}}" name="a[3]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach                
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a3yes" type="radio" value="ya" name="a[3]"
                        class="form-control-custom radio-custom">
                    <label for="a3yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a3no" type="radio" value="tidak" checked="" name="a[3]"
                        class="form-control-custom radio-custom">
                    <label for="a3no">Tidak</label>
                </div>
            </div>
            @endisset   
            @endisset
            
        </div>
        <div class="form-group">
            <label>Sebutkan Nama Obatnya</label>
            @isset($show)
            {{$show->healthScreening->find(3)->pivot->description ?? '...'}}
            @else
            @isset($record)
            <textarea name="ket_a[3]" placeholder="Sebutkan Nama Obatnya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[3]',$record->healthScreening->find(3)->pivot->description ?? '')}}</textarea>
            @else    
            <textarea name="ket_a[3]" placeholder="Sebutkan Nama Obatnya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[3]')}}</textarea>
            @endisset
            @endisset
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>4.Asma/bengek</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(4)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice1 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(4)->pivot->choice == $item) checked="" @endIf value="{{$item}}" name="a[4]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a4yes" type="radio" value="ya" name="a[4]"
                        class="form-control-custom radio-custom">
                    <label for="a4yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a4no" type="radio" value="tidak" checked="" name="a[4]"
                        class="form-control-custom radio-custom">
                    <label for="a4no">Tidak</label>
                </div>
            </div>
            @endisset
            @endisset
            
        </div>
        <input type="hidden" name="ket_a[4]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>5.Saat ini minum obat</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(5)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice1 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(5)->pivot->choice == $item) checked="" @endIf value="{{$item}}" name="a[5]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach                
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a5yes" type="radio" value="ya" name="a[5]"
                        class="form-control-custom radio-custom">
                    <label for="a5yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a5no" type="radio" value="tidak" checked="" name="a[5]"
                        class="form-control-custom radio-custom">
                    <label for="a5no">Tidak</label>
                </div>
            </div>
            @endisset
            @endisset
            
        </div>
        <div class="form-group">
            <label>Sebutkan nama obatnya</label>
            @isset($show)
            {{$show->healthScreening->find(5)->pivot->description ?? '...'}}
            @else
            @isset($record)
            <textarea name="ket_a[5]" placeholder="Sebutkan nama obatnya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[5]',$record->healthScreening->find(5)->pivot->description ?? '')}}</textarea>
            @else    
            <textarea name="ket_a[5]" placeholder="Sebutkan nama obatnya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[5]')}}</textarea>
            @endisset
            @endisset
            
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>6.Pernah dirawat di rumah sakit</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(6)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice1 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(6)->pivot->choice == $item) checked="" @endIf value="{{$item}}" name="a[6]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach                
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a6yes" type="radio" value="ya" name="a[6]"
                        class="form-control-custom radio-custom">
                    <label for="a6yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a6no" type="radio" value="tidak" checked="" name="a[6]"
                        class="form-control-custom radio-custom">
                    <label for="a6no">Tidak</label>
                </div>
            </div>
            @endisset
            @endisset
            
        </div>
        <div class="form-group">
            <label>Tuliskan Usia dan Penyakitnya</label>
            @isset($show)
            {{$show->healthScreening->find(6)->pivot->description ?? '...'}}
            @else
            @isset($record)
            <textarea name="ket_a[6]" placeholder="Tuliskan Usia dan Penyakitnya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[6]',$record->healthScreening->find(6)->pivot->description ?? '')}}</textarea>
            @else    
            <textarea name="ket_a[6]" placeholder="Tuliskan Usia dan Penyakitnya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[6]')}}</textarea>
            @endisset
            @endisset
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>7.Pernah mengalami cedera serius akibat kecelakaan ( geger otak / patah tulang atau lainnya )</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(7)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice1 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(7)->pivot->choice == $item) checked="" @endIf value="{{$item}}" name="a[7]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a7yes" type="radio" value="ya" name="a[7]"
                        class="form-control-custom radio-custom">
                    <label for="a7yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a7no" type="radio" value="tidak" checked="" name="a[7]"
                        class="form-control-custom radio-custom">
                    <label for="a7no">Tidak</label>
                </div>
            </div>
            @endisset
            @endisset
            
        </div>
        <div class="form-group">
            <label>Tuliskan usia dan penyakitnya</label>
            @isset($show)
            {{$show->healthScreening->find(7)->pivot->description ?? '...'}}
            @else
            @isset($record)
            <textarea name="ket_a[7]" placeholder="Tuliskan usia dan Penyakitnya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[7]',$record->healthScreening->find(7)->pivot->description ?? '')}}</textarea>
            @else    
            <textarea name="ket_a[7]" placeholder="Tuliskan usia dan Penyakitnya" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[7]')}}</textarea>
            @endisset
            @endisset
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>8.Pernah melakukan transfusi darah </b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(8)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice2 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(8)->pivot->choice == $item) checked="" @endIf value="{{$item}}" name="a[8]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a8yes" type="radio" value="ya" name="a[8]"
                        class="form-control-custom radio-custom">
                    <label for="a8yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a8no" type="radio" value="tidak" checked="" name="a[8]"
                        class="form-control-custom radio-custom">
                    <label for="a8no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a81k" type="radio" value="1 kali" name="a[8]"
                    class="form-control-custom radio-custom">
                <label for="a81k">1 kali</label>
                </div>
                <div class="i-checks">
                    <input id="a8ld1k" type="radio" value="Lebih dari 1 kali" name="a[8]"
                    class="form-control-custom radio-custom">
                <label for="a8ld1k">Lebih dari 1 kali</label>
                </div>
            </div>
            @endisset
            @endisset
            
        </div>
        <input type="hidden" name="ket_a[8]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>9.Kejang berulang</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(9)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice1 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(9)->pivot->choice == $item) checked="" @endIf value="{{$item}}" name="a[9]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
                
                
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a9yes" type="radio" value="ya" name="a[9]"
                        class="form-control-custom radio-custom">
                    <label for="a9yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a9no" type="radio" value="tidak" checked="" name="a[9]"
                        class="form-control-custom radio-custom">
                    <label for="a9no">Tidak</label>
                </div>
            </div>
            @endisset
            @endisset
            
            
        </div>
        <input type="hidden" name="ket_a[9]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>10.Memiliki penyakit lainnya</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(10)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice1 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(10)->pivot->choice == $item) checked="" @endIf value="{{$item}}" name="a[10]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a10yes" type="radio" value="ya" name="a[10]"
                        class="form-control-custom radio-custom">
                    <label for="a10yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a10no" type="radio" value="tidak" checked="" name="a[10]"
                        class="form-control-custom radio-custom">
                    <label for="a10no">Tidak</label>
                </div>
            </div>
            @endisset
            @endisset
            
            
        </div>
        <div class="form-group">
            <label>Jika ya sebutkan</label>
            @isset($show)
            {{$show->healthScreening->find(10)->pivot->description ?? '...'}}
            @else
            @isset($record)
            <textarea name="ket_a[10]" placeholder="Sebutkan" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[10]',$record->healthScreening->find(10)->pivot->description ?? '')}}</textarea>
            @else    
            <textarea name="ket_a[10]" placeholder="Sebutkan" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[10]')}}</textarea>
            @endisset
            @endisset
        </div>
    </div>

</div>

<div class="mt-3">
    <div class="text-center">
        <h5>Riwayat Imunisasi</h5>
    </div>
    <hr>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>1.Apakah kamu memiliki catatan imunisasi</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(11)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(11)->pivot->choice) checked="" @endif value="{{$item}}" name="a[11]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a11yes" type="radio" value="ya" name="a[11]"
                        class="form-control-custom radio-custom">
                    <label for="a11yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a11no" type="radio" value="tidak" checked="" name="a[11]"
                        class="form-control-custom radio-custom">
                    <label for="a11no">Tidak</label>
                </div>
            </div>
            @endisset
            @endisset
            
        </div>
        <input type="hidden" name="ket_a[11]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>2.Apakah pada saat bayi  mendapat imunisasi DPT sebanyak 3 kali lengkap</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(12)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(12)->pivot->choice) checked="" @endif value="{{$item}}" name="a[12]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a12yes" type="radio" value="ya" name="a[12]"
                        class="form-control-custom radio-custom">
                    <label for="a12yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a12no" type="radio" value="tidak" checked="" name="a[12]"
                        class="form-control-custom radio-custom">
                    <label for="a12no">Tidak</label>
                </div>
            </div>
            @endisset
            @endisset
            
        </div>
        <input type="hidden" name="ket_a[12]" value="">
    </div>
</div>

<div class="mt-3">
    <div class="text-center">
        <h5>Informasi Kesehatan Keluarga</h5>
    </div>
    <hr>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>1.Tuberkulosis ( TBC ) paru</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(13)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(13)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[13]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a13yes" type="radio" value="ya" name="a[13]"
                        class="form-control-custom radio-custom">
                    <label for="a13yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a13no" type="radio" value="tidak" checked="" name="a[13]"
                        class="form-control-custom radio-custom">
                    <label for="a13no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a13tt" type="radio" value="tidak tahu" name="a[13]"
                        class="form-control-custom radio-custom">
                    <label for="a13tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[13]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>2.Diabetes melitus / kencing manis</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(14)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(14)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[14]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a14yes" type="radio" value="ya" name="a[14]"
                        class="form-control-custom radio-custom">
                    <label for="a14yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a14no" type="radio" value="tidak" checked="" name="a[14]"
                        class="form-control-custom radio-custom">
                    <label for="a14no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a14tt" type="radio" value="tidak tahu" name="a[14]"
                        class="form-control-custom radio-custom">
                    <label for="a14tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[14]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>3.Hepatitis / sakit kuning</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(15)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(15)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[15]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a15yes" type="radio" value="ya" name="a[15]"
                        class="form-control-custom radio-custom">
                    <label for="a15yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a15no" type="radio" value="tidak" checked="" name="a[15]"
                        class="form-control-custom radio-custom">
                    <label for="a15no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a15tt" type="radio" value="tidak tahu" name="a[15]"
                        class="form-control-custom radio-custom">
                    <label for="a15tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[15]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>4.Asma / bengek</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(16)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(16)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[16]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a16yes" type="radio" value="ya" name="a[16]"
                        class="form-control-custom radio-custom">
                    <label for="a16yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a16no" type="radio" value="tidak" checked="" name="a[16]"
                        class="form-control-custom radio-custom">
                    <label for="a16no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a16tt" type="radio" value="tidak tahu" name="a[16]"
                        class="form-control-custom radio-custom">
                    <label for="a16tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[16]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>5.Storke / Lumpuh</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(17)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(17)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[17]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a17yes" type="radio" value="ya" name="a[17]"
                        class="form-control-custom radio-custom">
                    <label for="a17yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a17no" type="radio" value="tidak" checked="" name="a[17]"
                        class="form-control-custom radio-custom">
                    <label for="a17no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a17tt" type="radio" value="tidak tahu" name="a[17]"
                        class="form-control-custom radio-custom">
                    <label for="a17tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[17]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>6.Penyakit Jantung</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(18)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(18)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[18]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a18yes" type="radio" value="ya" name="a[18]"
                        class="form-control-custom radio-custom">
                    <label for="a18yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a18no" type="radio" value="tidak" checked="" name="a[18]"
                        class="form-control-custom radio-custom">
                    <label for="a18no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a18tt" type="radio" value="tidak tahu" name="a[18]"
                        class="form-control-custom radio-custom">
                    <label for="a18tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[18]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>7.Obesitas / Kegemukan</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(19)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(19)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[19]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a19yes" type="radio" value="ya" name="a[19]"
                        class="form-control-custom radio-custom">
                    <label for="a19yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a19no" type="radio" value="tidak" checked="" name="a[19]"
                        class="form-control-custom radio-custom">
                    <label for="a19no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a19tt" type="radio" value="tidak tahu" name="a[19]"
                        class="form-control-custom radio-custom">
                    <label for="a19tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[19]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>8.Tekanan darah tinggi</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(20)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(20)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[20]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a20yes" type="radio" value="ya" name="a[20]"
                        class="form-control-custom radio-custom">
                    <label for="a20yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a20no" type="radio" value="tidak" checked="" name="a[20]"
                        class="form-control-custom radio-custom">
                    <label for="a20no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a20tt" type="radio" value="tidak tahu" name="a[20]"
                        class="form-control-custom radio-custom">
                    <label for="a20tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[20]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>9.Kanker / Tumor ganas</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(21)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(21)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[21]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a21yes" type="radio" value="ya" name="a[21]"
                        class="form-control-custom radio-custom">
                    <label for="a21yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a21no" type="radio" value="tidak" checked="" name="a[21]"
                        class="form-control-custom radio-custom">
                    <label for="a21no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a21tt" type="radio" value="tidak tahu" name="a[21]"
                        class="form-control-custom radio-custom">
                    <label for="a21tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[21]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>10.Thalassemia</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(22)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(22)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[22]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a22yes" type="radio" value="ya" name="a[22]"
                        class="form-control-custom radio-custom">
                    <label for="a22yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a22no" type="radio" value="tidak" checked="" name="a[22]"
                        class="form-control-custom radio-custom">
                    <label for="a22no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a22tt" type="radio" value="tidak tahu" name="a[22]"
                        class="form-control-custom radio-custom">
                    <label for="a22tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[22]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>11.Haemofilia</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(23)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(23)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[23]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a23yes" type="radio" value="ya" name="a[23]"
                        class="form-control-custom radio-custom">
                    <label for="a23yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a23no" type="radio" value="tidak" checked="" name="a[23]"
                        class="form-control-custom radio-custom">
                    <label for="a23no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a23tt" type="radio" value="tidak tahu" name="a[23]"
                        class="form-control-custom radio-custom">
                    <label for="a23tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[23]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>12.Anemia</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(24)->pivot->choice}}
            @else
             @isset($record)
            <div class="col-sm-6">
                @foreach ($choice3 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(24)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[24]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a24yes" type="radio" value="ya" name="a[24]"
                        class="form-control-custom radio-custom">
                    <label for="a24yes">Ya</label>
                </div>
                <div class="i-checks">
                    <input id="a24no" type="radio" value="tidak" checked="" name="a[24]"
                        class="form-control-custom radio-custom">
                    <label for="a24no">Tidak</label>
                </div>
                <div class="i-checks">
                    <input id="a24tt" type="radio" value="tidak tahu" name="a[24]"
                        class="form-control-custom radio-custom">
                    <label for="a24tt">Tidak Tahu</label>
                </div>
            </div>                
            @endisset
            @endisset
           
        </div>
        <input type="hidden" name="ket_a[24]" value="">
    </div>
    
</div>

<div class="mt-3">
    <div class="text-center">
        <h5>Gaya Hidup</h5>
    </div>
    <hr>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>1.Apakah kamu makan pagi</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(25)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice4 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(25)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[25]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a25yes" type="radio" value="selalu" name="a[25]"
                        class="form-control-custom radio-custom">
                    <label for="a25yes">Selalu</label>
                </div>
                <div class="i-checks">
                    <input id="a25s" type="radio" value="kadang-kadang" checked="" name="a[25]"
                        class="form-control-custom radio-custom">
                    <label for="a25s">Kadang-kadang</label>
                </div>
                <div class="i-checks">
                    <input id="a25tt" type="radio" value="tidak pernah" name="a[25]"
                        class="form-control-custom radio-custom">
                    <label for="a25tt">Tidak pernah</label>
                </div>
            </div>
            @endisset
            @endisset
            
            
        </div>
        <div class="form-group">
            <label>Bila makan pagi berupa</label>
            @isset($show)
            {{$show->healthScreening->find(25)->pivot->description ?? '...'}}
            @else
            @isset($record)
            <textarea name="ket_a[25]" placeholder="Sebutkan" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[25]',$record->healthScreening->find(25)->pivot->description ?? '')}}</textarea>
            @else    
            <textarea name="ket_a[25]" placeholder="Sebutkan" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[25]')}}</textarea>
            @endisset
            @endisset
            
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>2.Apakah kamu jajan di sekolah</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(26)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice4 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(26)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[26]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a26yes" type="radio" value="selalu" name="a[26]"
                        class="form-control-custom radio-custom">
                    <label for="a26yes">Selalu</label>
                </div>
                <div class="i-checks">
                    <input id="a26s" type="radio" value="kadang-kadang" checked="" name="a[26]"
                        class="form-control-custom radio-custom">
                    <label for="a26s">Kadang-kadang</label>
                </div>
                <div class="i-checks">
                    <input id="a26tt" type="radio" value="tidak pernah" name="a[26]"
                        class="form-control-custom radio-custom">
                    <label for="a26tt">Tidak pernah</label>
                </div>
            </div>
            @endisset
            @endisset
            
            
        </div>
        <div class="form-group">
            <label>Bila ya, berupa</label>
            @isset($show)
            {{$show->healthScreening->find(26)->pivot->description ?? '...'}}
            @else
            @isset($record)
            <textarea name="ket_a[26]" placeholder="Sebutkan" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[26]',$record->healthScreening->find(26)->pivot->description ?? '')}}</textarea>
            @else    
            <textarea name="ket_a[26]" placeholder="Sebutkan" class="form-control" id="" cols="30"
                rows="2">{{old('ket_a[26]')}}</textarea>
            @endisset
            @endisset
            
        </div>
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>3.Apakah orang tua /  keluarga ada yang merokok</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(27)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice5 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(27)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[27]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a27yes" type="radio" value="ada" name="a[27]"
                        class="form-control-custom radio-custom">
                    <label for="a27yes">Ada</label>
                </div>
                <div class="i-checks">
                    <input id="a27s" type="radio" value="kadang-kadang" checked="" name="a[27]"
                        class="form-control-custom radio-custom">
                    <label for="a27s">Kadang-kadang</label>
                </div>
                <div class="i-checks">
                    <input id="a27tt" type="radio" value="tidak ada" name="a[27]"
                        class="form-control-custom radio-custom">
                    <label for="a27tt">Tidak ada</label>
                </div>
            </div>
            @endisset
            @endisset
            
            
        </div>
        <input type="hidden" name="ket_a[27]" value="">
    </div>
    <div class="mt-5 mb-5">
        <div class="form-group row">
            <label class="col-sm-6 form-control-label"><b>4.Apakah orang tua /  keluarga ada yang minum minuman beralkohol</b>
                <br><small class="text-primary"> </small></label>
            @isset($show)
                {{$show->healthScreening->find(28)->pivot->choice}}
            @else
            @isset($record)
            <div class="col-sm-6">
                @foreach ($choice5 as $item)
                <div class="i-checks">
                    <input id="a{{$x}}" type="radio" @if ($record->healthScreening->find(28)->pivot->choice == $item) checked="" @endif value="{{$item}}" name="a[28]"
                        class="form-control-custom radio-custom">
                    <label for="a{{$x++}}">{{$item}}</label>
                </div>    
                @endforeach
            </div>
            @else
            <div class="col-sm-6">
                <div class="i-checks">
                    <input id="a28yes" type="radio" value="ada" name="a[28]"
                        class="form-control-custom radio-custom">
                    <label for="a28yes">Ada</label>
                </div>
                <div class="i-checks">
                    <input id="a28s" type="radio" value="kadang-kadang" checked="" name="a[28]"
                        class="form-control-custom radio-custom">
                    <label for="a28s">Kadang-kadang</label>
                </div>
                <div class="i-checks">
                    <input id="a28tt" type="radio" value="tidak ada" name="a[28]"
                        class="form-control-custom radio-custom">
                    <label for="a28tt">Tidak ada</label>
                </div>
            </div>
            @endisset
            @endisset
            
            
        </div>
        <input type="hidden" name="ket_a[28]" value="">
    </div>
</div>