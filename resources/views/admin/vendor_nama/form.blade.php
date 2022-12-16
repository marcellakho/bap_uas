<div class="form-group {{ $errors->has('nama_vendor') ? 'has-error' : ''}}">
    <label for="nama_vendor" class="control-label">{{ 'Nama Vendor' }}</label>
    <input class="form-control" name="nama_vendor" type="text" id="nama_vendor" value="{{ isset($vendor_nama->nama_vendor) ? $vendor_nama->nama_vendor : ''}}" >
    {!! $errors->first('nama_vendor', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label for="alamat" class="control-label">{{ 'Alamat' }}</label>
    <input class="form-control" name="alamat" type="text" id="alamat" value="{{ isset($vendor_nama->alamat) ? $vendor_nama->alamat : ''}}" >
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('no_telp') ? 'has-error' : ''}}">
    <label for="no_telp" class="control-label">{{ 'No Telp' }}</label>
    <input class="form-control" name="no_telp" type="number" id="no_telp" value="{{ isset($vendor_nama->no_telp) ? $vendor_nama->no_telp : ''}}" >
    {!! $errors->first('no_telp', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
