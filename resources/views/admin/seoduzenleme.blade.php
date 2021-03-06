@extends('admin.master')

@section('icerik')

<hr />
<ol class="breadcrumb" > 
    <li> <a href="{{URL::to('admin/genel')}}"><i class="entypo-folder"></i>Anasayfa</a> </li>
    <li> <a href="{{URL::to('admin/seo')}}">Seo Bilgileri</a> </li> 
    <li class="active"> <strong>Düzenleme</strong> </li> 
</ol> 
<h2>Seo Düzenleme</h2>
<div class="panel panel-primary">
    <div class="panel-body"> 
        <form role="form" action="{{action('AdminController@seoduzenleme',$seo->id)}}" id="form1" method="post" class="validate" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group pull-right"> 
                    <button type="submit" class="btn btn-green btn-icon icon-left">Kaydet<i class="entypo-check"></i></button>                                                                    
                </div>
            </div>
            <input type="hidden" name="_token" value="<?php echo csrf_token() ?>"/>
            <div class="panel minimal minimal-gray">
                <div class="panel-heading">
                    <div class="panel-options">
                        <ul class="nav nav-tabs bordered">
                            <li class="active">
                                <a href="#turkce" data-toggle="tab" aria-expanded="true"> 
                                    <span class="visible-xs"><i class="entypo-home"></i></span> 
                                    <span class="hidden-xs">Genel</span> 
                                </a> 
                            </li>
                        </ul> 
                    </div> 
                </div>
                <div class="panel-body"> 
                    <div class="tab-content"> 
                        <div class="tab-pane active" id="turkce">
                            <div class="form-group"> 
                                <label for="field-ta" class="col-sm-2 control-label">Title<span class="span_need">*</span></label> 
                                <div class="col-sm-10"> 
                                    <textarea class="form-control" id="field-ta" name="title" data-validate="required" data-message-required="Boş Bırakılamaz." placeholder="Title">{{$seo->title}}</textarea><br>
                                </div> <br>
                            </div>
                            <div class="form-group"> 
                                <label for="field-ta" class="col-sm-2 control-label">Keywords<span class="span_need">*</span></label> 
                                <div class="col-sm-10"> 
                                    <textarea class="form-control" id="field-ta" name="keywords" data-validate="required" data-message-required="Boş Bırakılamaz." placeholder="Keywords">{{$seo->keywords}}</textarea><br>
                                </div> <br>
                            </div>
                            <div class="form-group"> 
                                <label for="field-ta" class="col-sm-2 control-label">Description<span class="span_need">*</span></label> 
                                <div class="col-sm-10"> 
                                    <textarea class="form-control" id="field-ta" name="description" data-validate="required" data-message-required="Boş Bırakılamaz." placeholder="Description">{{$seo->description}}</textarea><br>
                                </div> <br>
                            </div>
                            <div class="form-group"> 
                                <label for="field-ta" class="col-sm-2 control-label">Metatag<span class="span_need">*</span></label> 
                                <div class="col-sm-10"> 
                                    <textarea class="form-control" id="field-ta" name="metatag" data-validate="required" data-message-required="Boş Bırakılamaz." placeholder="Metatag">{{$seo->metatag}}</textarea><br>
                                </div> <br>
                            </div>

                        </div>                        
                    </div> 
                </div> 
            </div>
        </form>
    </div> 
</div>

<!--<div class="modal fade" id="album-image-options">
    <div class="modal-dialog"> 
        <div class="modal-content">
            <div class="modal-body"> 
                <div class="row" style="height: 500px;"> 
                    <form enctype="multipart/form-data" action="http://codecanyon.stbeets.nl/form.php" method="post" role="form">
                        <div class="dropzone2" data-width="1200" data-height="420" data-ajax="false" data-originalsave="true" style="width: 600px; height: 210px;">
                            <input type="file" name="thumb" required="" style="position: absolute;">
                        </div>

                    </form> 
                </div> 
            </div> 
        </div> 
    </div> 
</div>-->
<div class="modal fade custom-width" id="album-image-options"> 
    <div class="modal-dialog" style="width: 56%" > 
        <div class="row"> 
            <form enctype="multipart/form-data" action="http://codecanyon.stbeets.nl/form.php" method="post" role="form">
                <div class="dropzone2" data-width="1200" data-height="420" data-ajax="false" data-originalsave="true" style="width: 900px; height: 315px;">
                    <input type="file" name="thumb" required="" style="position: absolute;">
                </div>

            </form> 
        </div> 
    </div>
</div>
@endsection
