@extends('layouts.base')

@section('title', 'Cotizaciones')

@section('content')

<section class="home-container">    
        <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Lista de cotizaciones</h1>
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
                        {{Form::open(['route' => 'quotes.index', 'method' => 'GET'])}}
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input class="form-control" name="name" placeholder="Nombre" maxlength="50">
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
                                <div class="form-group col-lg-2">
                                    {{Form::label('Fecha Inicio ',null, ['class'=>'control-label'] )}}                                    
                                    <div class="input-group date" id="begin_date">
                                        <input type="text" class="form-control input-date" name="begin_date" placeholder="aaaa" maxlength="4" required/>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>                                      
                                </div>
                                <div class="form-group col-lg-2">
                                    {{Form::label('Fecha Fin ',null, ['class'=>'control-label'] )}}                                    
                                    <div class="input-group date" id="end_date">
                                        <input type="text" class="form-control input-date" name="end_date" placeholder="aaaa" maxlength="4" required/>
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                    </div>                                      
                                </div>
                            </div>
                            <div class="row">  
                                <div class="col-lg-9">
                                </div>
                                <div class="col-lg-3">
                                    <label >&nbsp;</label>
                                    <div class="form-group text-center">
                                        {{Form::submit('Buscar', ['class'=>'btn btn-success'])}}
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
                                        <input class="form-control" id="quote-search" name="q" placeholder="Buscar" required>
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
                                        <th>Nombre</th>                                         
                                        <th>Fecha</th>                                         
                                        <th>Marca</th>
                                        <th>Ver Detalle</th> 
                                        <th>Generar Póliza</th> 
                                    </tr> 
                                </thead> 
                                <tbody> 
                                    @foreach($quotes as $quote)
                                    <tr> 
                                        <td hidden><input type="text" value="{{$quote->id}}" name="arrIds[{{$quote->id}}]"></td>
                                        <td>{{$quote->name}}</td> 
                                        <td>{{$quote->date}}</td>
                                        <td>{{$quote->brand}}</td> 
                                        <td>
                                            aa<!-- <a href="" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#{{$customer->id}}" title="Eliminar"><i class="fa fa-remove"></i></a> -->
                                        </td> 
                                        <td>
                                            aa<!-- <a href="{{route('customer.edit', $customer->id)}}" class="btn btn-primary btn-xs" title="Editar"><i class="fa fa-pencil"></i></a> -->
                                        </td>
                                    </tr> 
                                    <!-- @include('pages.modals.delete', ['id'=> $customer->id, 'message' => '¿Esta seguro que desea eliminar este cliente?', 'route' => route('customer.delete', $customer->id)]) -->
                                    @endforeach
                                    
                                </tbody> 
                            </table>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

</section>

<script src="{{ URL::asset('build/js/quote.js')}}"></script>

@endsection