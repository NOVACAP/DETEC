<div class="row">
    <div class="col-md-12">
      <div class="form-group row">
        <label for="first_name" class="col-md-3 col-form-label">Data de entrada</label>
        <div class="col-md-9">
          <input type="text" name="parliamentary" value="
          {{ old('parliamentary', $amendment->parliamentary)}}" id="amendment"
          class="form-control @error('amendment')
          is-invalid
          @enderror">
          @error('amendment')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
          @enderror
{{--
        </div>
      </div>

      <div class="form-group row">
        <label for="amendment" class="col-md-3 col-form-label">Emendas</label>
        <div class="col-md-9">
          <input type="text" name="amendment" value="
          {{ old('amendment', $amendment->amendment)}}" id="amendment"
          class="form-control @error('amendment')
          is-invalid
          @enderror">
          @error('amendment')
              <div class="invalid-feedback">
                  {{ $message }}
               </div>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="caption" class="col-md-3 col-form-label">Subtítulo</label>
        <div class="col-md-9">
          <input type="text" name="caption" value="
          {{ old('caption', $amendment->caption)}}" id="email"
          class="form-control @error('caption')
          is-invalid
          @enderror">
          @error('caption')
              <div class="invalid-feedback">
                  {{ $message }}
               </div>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="work_program" class="col-md-3 col-form-label">Programa de Trabalho</label>
        <div class="col-md-9">
          <input type="text" name="work_program" value="
          {{ old('work_program', $amendment->work_program)}}" id="work_program"
          class="form-control @error('work_program')
          is-invalid
          @enderror">
          @error('work_program ')
              <div class="invalid-feedback">
                  {{ $message }}
               </div>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="nature_of_expense" class="col-md-3 col-form-label">Natureza da Despesa</label>
        <div class="col-md-9">
          <input type="text" name="nature_of_expense" value="
          {{ old('nature_of_expense', $amendment->nature_of_expense)}}" id="nature_of_expense"
          class="form-control @error('nature_of_expense')
          is-invalid
          @enderror">
          @error('nature_of_expense')
              <div class="invalid-feedback">
                  {{ $message }}
               </div>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="price" class="col-md-3 col-form-label">Valor</label>
        <div class="col-md-9">
          <input type="text" name="price" value="
          {{ old('price', $amendment->price)}}" id="price"
          class="form-control @error('price')
          is-invalid
          @enderror">
          @error('price')
              <div class="invalid-feedback">
                  {{ $message }}
               </div>
          @enderror
        </div>
      </div>

      <div class="form-group row">
        <label for="viability" class="col-md-3 col-form-label">Viabilidade</label>
        <div class="col-md-9">
          <input type="text" name="viability" value="
          {{ old('viability', $amendment->viability)}}" id="viability"
          class="form-control @error('viability')
          is-invalid
          @enderror">
          @error('viability')
              <div class="invalid-feedback">
                  {{ $message }}
               </div>
          @enderror
        </div>
      </div>

      <hr>
      <div class="form-group row mb-0">
        <div class="col-md-9 offset-md-3">
            <button type="submit" class="btn btn-primary">{{$amendment->exists ? 'Atualizar' : 'Salvar'}}</button>
            <a href="{{ route('amendments.index')}}" class="btn btn-outline-secondary">Cancelar</a>
        </div>
      </div>
    </div>
  </div>

  --}}
