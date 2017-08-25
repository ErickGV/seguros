<div id="send-quote" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Enviar Cotización</h4>
            </div>
            <div class="modal-body">
                <p>{{ $message }}</p>
                <div class="row">  
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre">
                        </div>
                    </div>  
                </div>  
                <div class="row">  
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Correo</label>
                            <input type="email" class="form-control" name="email" placeholder="email@seguros.com">
                        </div>
                    </div>  
                </div>  
                <div class="row">  
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Telefono</label>
                            <input type="text" class="form-control" name="telephone" placeholder="999 999 999">
                        </div>
                    </div>  
                </div>  
                <div class="row">  
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label>Aseguradora</label>
                            <select class="form-control" name="use">
                                <option value="">Seleccione</option>                 
                                <option value="1">RIMAC</option>                   
                                <option value="2">HDI</option>                 
                                <option value="3">MAPFRE</option>                   
                                <option value="4">PACIFICO</option>
                                <option value="4">POSITIVA</option>
                            </select>
                        </div>
                    </div>  
                </div>  
            </div>
            <div class="modal-footer">
                {{ Form::button('Cancelar', ['class' => 'btn btn-default', 'data-dismiss' => 'modal'])}}
                <a href="{{ $route }}">
                    {{ Form::button('Eliminar', ['class' => 'btn btn-danger'])}}
                </a>
            </div>
        </div>
    </div>
</div>