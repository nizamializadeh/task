<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <table class="table table-striped">
        <tbody>

        <tr>
            <td colspan="1">
                <form class="well form-horizontal" id="form_validation" >
                    @csrf
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Ticarət Mərəzi</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphdicon-dhomse"></i></span><input  value="{{$shop->name}}" readonly id="addressLine2" name="zona"  class="form-control" required="true" value="" type="text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Sektor</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphdicon-dhomse"></i></span><input  value="{{$shop->sectorname}}" readonly id="addressLine2" name="zona"  class="form-control" required="true" value="" type="text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Zona</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphdicon-dhomse"></i></span><input  value="{{$shop->zona}}" readonly id="addressLine2" name="zona"  class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Magaza N</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicdson-home"></i></span><input  value="{{$shop->shopn}}" readonly id="city" name="shopn" placeholders="City" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Magaza adı</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicdon-home"></i></span><input  value="{{$shop->shopname}}" readonly id="state" name="shopname" placeholders="State/Province/Region" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Sahibi ad,soyad</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicodn-home"></i></span><input  value="{{$shop->owner}}" readonly id="postcode" name="owner" placeholders="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Vön</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphidcon-home"></i></span><input  value="{{$shop->von}}" readonly id="postcode" name="von" placeholders="Postal Code/ZIP" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Fin kodu</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicdon-envelope"></i></span><input  value="{{$shop->fin}}" readonly id="email" name="fin" placeholders="Email" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Satdığı malın növləri</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon">
                                        <i class="glypdhicon glyphdicon-user"></i>
                                    </span>
                                        <select  name="mall_id" id="select1" class="form-control" >
                                            @foreach($kindofproducts as $kindofproduct)
                                                <option value="{{$kindofproduct->name}}">{{$kindofproduct->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Mobil telefon</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphidcon glyphdicon-earphone"></i></span><input  value="{{$shop->mobil}}" readonly id="phoneNumber" name="mobil" placeholders="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">E-mail ünvanı</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glypdhicon gldyphicon-earphone"></i></span><input  value="{{$shop->mail}}" readonly id="phoneNumber" name="mail" placeholders="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Tarix</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glypdhicon glyphidcon-earphone"></i></span><input  value="{{$shop->date}}" readonly id="phoneNumber" name="date" placeholders="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Müqavilə N</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glypdhicon glydphicon-earphone"></i></span><input  value="{{$shop->muqvilen}}" readonly id="phoneNumber" name="muqvilen" placeholders="Phone Number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Foto</label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group"><span class="input-group-addon"><i class="glyphdicon glyphdicon-earphone"></i></span>
                                    <img width="75  " class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$shop->image)}}">
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
</div>

