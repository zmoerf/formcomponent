# Use
```php
<?php
{{ Form::open(array('url' => 'backdoor/store', 'class' => 'col-md-8 col-md-offset-2')) }}
<div class="box-body">
    {{ Form::baseCheckbox('Pilih Checkbox', [
                        (object)['name'=> 'separator', 'value'=> 0, 'checked' => false, 'state' => 'success'],
                        (object)['name'=> 'enabled', 'value'=> 1, 'checked' => false, 'state' => 'Unsuccess']
                      ] ) }}
    {{ Form::baseCheckboxInline('Pilih Checkbox Inline', [
                    (object)['name'=> 'separator', 'value'=> 0, 'checked' => false, 'state' => 'success'],
                    (object)['name'=> 'enabled', 'value'=> 1, 'checked' => false, 'state' => 'Unsuccess']
                  ] ) }}
{{ Form::baseFile('pilih_file', null)   }}
{{ Form::baseTextarea('Text Area', null, ['required']) }}
{{ Form::baseSelect('Pilih Select', $module, ['id' => 'module_id', 'required']) }}
{{ Form::baseInput('nama_kapal', null, ['id' => 'all_ship_name', 'required  '])   }}
{{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
</div>
{{ Form::close() }}

// ...
