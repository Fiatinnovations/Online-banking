@include('inc.header')

<div class="content-box">
    <div class="row">
        <div class="col-sm-4"></div>
        <div  class="col-sm-4">
            <div class="element-wrapper">

                <div style="padding-left: 5%" class="element-box">
                        {!! Form::open(['method'=>'POST','action'=>'BeneficiaryController@store']) !!}
                    {{Form::token()}}

                        <h5 class="form-header">Enter Beneficiary Details</h5>
                    @include('errors.validationerrors')

                        <div class="row">
                            <div class="col-sm-6">
                            <div class="form-group">
                                {!! Form::label('bank_id','Bank:') !!}
                                {!! Form::select('bank_id',$banks,'',['class'=>'form-control']) !!}

                            </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Account Number:</label>
                                    <input class="form-control"   type="text" name="account_number" >
                                    <div class="help-block form-text with-errors form-control-feedback"></div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Account Name:</label>
                                    <input class="form-control"   type="text" name="account_name" >
                                </div>
                            </div>
                        </div>
                    <div class="row">
                        <div class="col-sm-6">

                        </div>


                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div style="padding-left: 5%; padding-bottom: 20px;">
                                <a href="{{url('/')}}"><button class="btn  btn-secondary" type="submit">Return Home</button></a>
                            </div>
                        </div>

                        <div>
                            <div style="padding-left: 18%">
                                <button class="btn btn-primary" type="submit">Create Beneficiary</button>
                            </div></div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@include('inc.footer')