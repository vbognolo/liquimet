<?php
declare(strict_types = 1);

$id = intval($_GET['id_partial']);
$partial = $model->getPartial()->get($id);

$editPartForm = 
        '<input type="hidden" name="id_partial" id="idPart" value="{{ partial.id_partial }}" />' 
            
            .'<div class="row form-group m-auto align-middle mb-2">' 
                .'<div class="col-sm-4 my-auto mx-auto" style="text-align: center">
                    <label for="destPart" class="form-control-label my-auto"> Destinazione: </label>
                </div>' 
                
                .'<div class="col-sm-8 mx-auto" style="text-align: center">
                    <input type="text" name="destination" aria-label="destination" id="destPart" value="{{ partial.destination }}" class="form-control mx-auto" />
                </div>' 
            .'</div>' 
            
            .'<div class="row form-group m-auto align-middle mb-2">' 
                .'<div class="col-sm-4 my-auto mx-auto" style="text-align: center">
                    <label for="exw" class="form-control-label my-auto"> EXW: </label>
                </div>' 
                
                .'<div class="col-sm-8 mx-auto" style="text-align: center">
                    <select class="form-control" name="exw" id="exwPart">
                        <option class="opt-type" value="{{ partial.exw|upper }}" id="exwOpt">
                            {{ partial.exw|upper }}
                        </option>   
                                
                        <option value="FOS" class="opt-type"> 
                            FOS
                        </option>
                                    
                        <option value="DESTINO" class="opt-type"> 
                            DESTINO
                        </option>
                    </select>
                </div>' 
            .'</div>' 
            
            .'<div class="row form-group m-auto align-middle mb-2">' 
                .'<div class="col-sm-4 my-auto mx-auto" style="text-align: center">
                    <label for="date" class="form-control-label my-auto"> Data: </label>
                </div>' 
                
                .'<div class="col-sm-8 mx-auto" style="text-align: center">
                    <input type="text" name="date" id="datePart" value="{{ partial.date }}" class="form-control date" />
                </div>' 
            .'</div>' 
            
            .'<div class="row form-group m-auto align-middle mb-2">' 
                .'<div class="col-sm-4 my-auto mx-auto" style="text-align: center">
                    <label for="place" class="form-control-label my-auto"> Luogo: </label>
                </div>' 
                
                .'<div class="col-sm-8 mx-auto" style="text-align: center">
                    <input type="text" name="place" id="placePart" value="{{ partial.place }}" class="form-control mx-auto" />
                </div>' 
            .'</div>' 
                        
            .'<div class="row form-group m-auto align-middle mb-2">' 
                .'<div class="col-sm-4 my-auto mx-auto" style="text-align: center">
                    <label for="q_unloaded" class="form-control-label my-auto"> Quantità scaricata: </label>
                </div>' 
                
                .'<div class="col-sm-8 mx-auto" style="text-align: center">
                    <input type="text" name="q_unloaded" id="qtyPart" value="{{ partial.q_unloaded }}" class="form-control mx-auto" />
                </div>' 
            .'</div>' 
                        
            .'<div class="row form-group m-auto align-middle mb-2">' 
                .'<div class="col-sm-4 my-auto mx-auto" style="text-align: center">
                    <label for="invoice" class="form-control-label my-auto"> Fattura: </label>
                </div>' 
                
                .'<div class="col-sm-8 mx-auto" style="text-align: center">
                    <input type="text" name="invoice" id="invoicePart" value="{{ partial.invoice }}" class="form-control mx-auto" />
                </div>' 
            .'</div>';