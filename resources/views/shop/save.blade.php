<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <table class="table table-striped">
        <tbody>

        <tr>
            <td colspan="1">
                <form class="well form-horizontal" id="form_validation" action="{{route('ShopSave.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Ticarət Mərəzi</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                        <i class="glypdhicon glyphdicon-user"></i>
                                    </span>
                                    <select name="mall_id" id="select1" class="form-control" >
                                        <option value="">Sec..</option>
                                        @foreach($malls as $mall)
                                            <option value="{{$mall->id}}">{{$mall->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Sektor</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                        <i class="glydphicon glyphicon-dhome"></i></span>
                                    <select name="sector_id" id="select2" class="form-control">
                                        <option value="">Sec..</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Zona</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphdicon-dhomse"></i></span><input id="addressLine2" name="zona"  class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Magaza N</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicdson-home"></i></span><input id="city" name="shopn" placeholders="City" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Magaza adı</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicdon-home"></i></span><input id="state" name="shopname" placeholders="State/Province/Region" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Sahibi ad,soyad</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicodn-home"></i></span><input id="postcode" name="owner" placeholders="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Vön</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphidcon-home"></i></span><input id="postcode" name="von" placeholders="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Fin kodu</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicdon-envelope"></i></span><input id="email" name="fin" placeholders="Email" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Satdığı malın növləri</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon">
                                        <i class="glyphicon glyphidcon-earphone"></i></span>
                                    <select name="kindof[]" id="" class="form-control" multiple>
                                        <option value="">Sec..</option>
                                        @foreach($kindofproducts as $kindofproduct)
                                            <option  value="{{$kindofproduct->id}}">{{$kindofproduct->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Mobil telefon</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphidcon glyphdicon-earphone"></i></span><input id="phoneNumber" name="mobil" placeholders="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">E-mail ünvanı</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glypdhicon gldyphicon-earphone"></i></span><input id="phoneNumber" name="mail" placeholders="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tarix</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glypdhicon glyphidcon-earphone"></i></span><input id="phoneNumber" name="date" placeholders="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Müqavilə N</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glypdhicon glydphicon-earphone"></i></span><input id="phoneNumber" name="muqvilen" placeholders="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Foto</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphdicon glyphdicon-earphone"></i></span><input id="phoneNumber" name="image" placeholders="Phone Number" class="form-control" required="true" value="" type="file"></div>
                            </div>
                        </div>
                        <button class="btn btn-danger" >Yadda Saxla</button>
                    </fieldset>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
</div>
{{--<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>--}}
<script>

    $('#select1').on('change',function (e) {
        var select_id =e.target.value;
        $.get('/ajax-set?select_id='+select_id,function (data) {
            $('#select2').empty();
            $.each(data,function (index,selectObj) {
                console.log(selectObj);
                $('#select2').append('<option value="'+selectObj.id  +'">'+selectObj.name+'</option>');
            });
        });
    });
</script>
