@extends('dashboard.layouts.main')
@section('contenido')
    <div class="container-fluid">
        <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Productos</h1>
        <a href="#" data-toggle="modal"data-target="#modalAdd" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-upload fa-sm text-white-50"></i> Agregar Producto</a>
    </div>
    </div>
    <!-- MODAL AGREGAR-->
    <div class="modal" tabindex="-1" role="dialog" id="modalAdd">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Agregar Producto</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="from-group">
                  <label for="">Nombre</label>
                  <input type="text" class="form-control" placeholder="Nombre Producto">
              </div>
              <div class="from-group">
                <label for="">Descripcion</label>
                <input type="text" class="form-control" placeholder="Descripcion">
            </div>
            <div class="from-group">
                <label for="">Precio Base</label>
                <input type="numeric" class="form-control" placeholder="Precio Base">
            </div>
            <div class="from-group">
                <label for="">imagen</label>
                <input type="file" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Blockchain Type</label>
                <select name="" id="" class="form-control">
                    <option value="Etherium">Etherium</option>
                    <option value="Polygon">Polygon</option>
                    <option value="Klaytn">Klaytn</option>

                </select>
            </div>
            <div class="form-group">
                <label for="">Categoria</label>
                <select name="" id="" class="form-control">

                </select>
            </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary"> <i class="fa fa-save"></i> Guardar</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
@endsection