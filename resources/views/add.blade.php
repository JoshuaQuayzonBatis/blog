{{Form::open(["url"=>'/product/add','method'=>'post'])}}
<fieldset>
    {{Form::label('pname','Product Name: ')}}
    {{Form::text('pname')}}
</fieldset>
<fieldset>
    {{Form::label('pname','Product Price: ')}}
    {{Form::number('pprice')}}
</fieldset>
<fieldset>
    {{Form::label('pname','Product Stocks: ')}}
    {{Form::number('pstocks')}}
</fieldset>
<fieldset>
    <input type="submit"/>
    <input type="reset"/>
</fieldset>
{{Form::close()}}