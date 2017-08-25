@extends('layouts.base')

@section('title', 'Nueva Cotizacióm')

@section('content')

<section class="home-container">    
        <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Nueva Cotización</h1>
                </div>
                <!-- /.col-lg-12 -->
        </div>
       <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Cotización</h3>
                    </div>
                    <div class="panel-body">
                        {{Form::open(['route' => 'quotes.create', 'method' => 'GET'])}}
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label >Marca</label>
                                        <select class="form-control" name="brand">
                                            <option value="">Seleccione</option>                 
                                            <option value="1">Activa</option>                   
                                            <option value="2">Inactiva</option>                 
                                            <option value="3">Registrada</option>                   
                                            <option value="4">Cancelada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label >Modelo</label>
                                        <select class="form-control" name="model">
                                            <option value="">Seleccione</option>                 
                                            <option value="1">Activa</option>                   
                                            <option value="2">Inactiva</option>                 
                                            <option value="3">Registrada</option>                   
                                            <option value="4">Cancelada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-4">
                                    {{Form::label('Fecha Fabricación ',null, ['class'=>'control-label'] )}}                                    
                                    <div class="input-group date" id="fab_date">
                                        <input type="text" class="form-control input-date" name="fab_date" placeholder="aaaa" maxlength="4" required/>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>                                      
                                </div>
                            </div> 
                            <div class="row">    
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Monto</label>
                                        <div class="form-group input-group">
                                            <span class="input-group-addon">S/</span>
                                            <input type="text" class="form-control" name="amount" placeholder="Monto">
                                        </div>
                                    </div>
                                </div>  
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label >Uso</label>
                                        <select class="form-control" name="use">
                                            <option value="">Seleccione</option>                 
                                            <option value="1">Activa</option>                   
                                            <option value="2">Inactiva</option>                 
                                            <option value="3">Registrada</option>                   
                                            <option value="4">Cancelada</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Descuento</label>
                                        <div class="form-group input-group">
                                            <input type="text" class="form-control" name="discount" placeholder="Descuento">
                                            <span class="input-group-addon">%</span>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="row">  
                                <div class="col-lg-9">
                                </div>
                                <div class="col-lg-3">
                                    <label >&nbsp;</label>
                                    <div class="form-group text-center">
                                        {{Form::submit('Cotizar', ['class'=>'btn btn-success'])}}
                                        <a class="btn btn-default" href="#">Limpiar</a>
                                    </div>
                                </div>
                            </div>  
                            
                        {{Form::close()}}
                        <!-- <div class="row">
                            <div class="col-lg-8">
                                <form action="#" method="get">
                                    <div class="input-group">
                                         USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH 
                                        <input class="form-control" id="new-quote-search" name="q" placeholder="Buscar" required>
                                        <span class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </div>                                     
                        </div> -->
                        <div class="table-responsive">
                            <table class="table table-list-search table-striped responsive-utilities jambo_table bulk_action"> 
                                <thead> 
                                    <tr class="headings"> 
                                        <th>Conceptos</th>                                         
                                        <th>MAPFRE</th>                                         
                                        <th>PACIFICO</th>
                                        <th>RIMAC</th> 
                                        <th>POSITIVA</th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    @foreach($quotes as $quote)
                                    <tr> 
                                        <td hidden><input type="text" value="{{$quote->id}}" name="arrIds[{{$quote->id}}]"></td>
                                        <td>{{$quote->name}}</td> 
                                        <td>{{$quote->date}}</td>
                                        <td>{{$quote->brand}}</td> 
                                        <td>aa</td> 
                                        <td>aa</td>
                                    </tr> 
                                    @endforeach
                                    
                                </tbody> 
                            </table>
                        </div>

                        <div class="row">  
                            <div class="col-lg-9">
                            </div>
                            <div class="col-lg-3">
                                <label >&nbsp;</label>
                                    <div class="form-group text-center">
                                        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#send-quote" title="Enviar Cotización">Enviar Cotización</a> 
                                    </div>
                            </div>
                        </div>
                        @include('pages.modals.send-quote', ['message' => 'Completar los siguientes datos', 'route' => route('quotes.create'), 'method' => 'GET'])
                    
                    </div>
                </div>
            </div>
        </div>

</section>

<script src="{{ URL::asset('build/js/new_quote.js')}}"></script>

@endsection