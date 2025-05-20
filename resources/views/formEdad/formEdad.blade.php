
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Formulario de Edad</h3>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('formEdad.enviar')}}" method="POST" class="needs-validation" novalidate>
                        @csrf
                        <div class="mb-4">
                            <label for="edad" class="form-label fw-bold">Edad: </label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-calendar3"></i></span>
                                <input
                                    type="number"
                                    class="form-control form-control-lg"
                                    name="edad"
                                    id="edad"
                                    aria-describedby="helpId"
                                    placeholder="0-120"
                                    min="0"
                                    max="120"
                                    required
                                />
                                <div class="invalid-feedback">
                                    Por favor ingrese una edad válida.
                                </div>
                            </div>
                            <small id="helpId" class="form-text text-muted mt-2">Ingrese su edad para continuar</small>
                        </div>
                        
                        <div class="d-grid gap-2 mt-4">
                            <button
                                type="submit"
                                id="btnEnviar"
                                name="btnEnviar"
                                class="btn btn-primary btn-lg"
                            >
                                <i class="bi bi-send-fill me-2"></i> Enviar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>