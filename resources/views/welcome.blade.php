@extends('template.master')

@section('content')
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">File Input</h6>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Default file input example</label>
                                <input class="form-control bg-dark" type="file" id="formFile">
                            </div>
                            <div class="mb-3">
                                <label for="formFileMultiple" class="form-label">Multiple files input example</label>
                                <input class="form-control bg-dark" type="file" id="formFileMultiple" multiple>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Small file input example</label>
                                <input class="form-control form-control-sm bg-dark" id="formFileSm" type="file">
                            </div>
                            <div>
                                <label for="formFileLg" class="form-label">Large file input example</label>
                                <input class="form-control form-control-lg bg-dark" id="formFileLg" type="file">
                            </div>
                        </div>                        
                    </div>
            <div class="col-sm-12 col-xl-6">
            </div>
            <div class="col-sm-12 col-xl-6">
            </div>
            <div class="col-sm-12 col-xl-6">
            </div>
            <div class="col-sm-12 col-xl-6">
            </div>
            <div class="col-sm-12 col-xl-6">
            </div>
            <div class="col-sm-12 col-xl-6">
            </div>
                </div>
            </div>
           

@endsection

