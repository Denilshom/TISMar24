{{-- <div class="form-group">
    <div>
        <h2>Seleccionar Area/Sub-area</h2>
        <br>
    </div>
    <div class="checkbox">
        <select name="" id="">
        <label for="">
            <option value="">Area</option>
            <option value="">Subarea</option>
        </label>
        </select>
    </div>
    <br>
    <div class="checkbox">
        <select name="" id="">
        <label for="">
            <option value="">Area</option>
            <option value="">Subarea</option>
        </label>
        </select>
    </div>
</div> --}}

<br>
<div class="form-group">
    {!!Form:: label ('Nombre ')!!}
    {!!Form::text('name_area',null, ['class'=>'form-control', 'placeholder'=>'Ingresar area'])!!}
</div>

{{-- <div class="form-group">
    {!!Form:: label ('Sub-area')!!}
    {!!Form::text('name_subarea',null, ['class'=>'form-control', 'placeholder'=>'Ingrese sub-area'])!!}
</div> --}}
