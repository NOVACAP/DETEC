<div class="row">
    <div class="col-md-12">
      <div class="form-group row">
        <label for="first_name" class="col-md-3 col-form-label">Data de entrada</label>
        <div class="col-md-9">
          <input type="date" name="date_input_demand" value="{{old('date_input_demand')}}">
          
          {{--value="
          {{ old('date_input_demand', $demand->date_input_demand)}}" 
          class="form-control @error('amendment')
          is-invalid
          @enderror">
         @error('amendment')
               <div class="invalid-feedback">
                  {{ $message }}
               </div>
          @enderror
            --}}
        </div>
      </div>
      
      
        <div class="form-group row">
          <label for="first_name" class="col-md-3 col-form-label">Data de distribuição</label>
          <div class="col-md-9">
            <input type="date" name="date_distribution_demand" value="{{old('date_distribution_demand')}}">
            
            {{--value="
            {{ old('date_input_demand', $demand->date_input_demand)}}" 
            class="form-control @error('amendment')
            is-invalid
            @enderror">
           @error('amendment')
                 <div class="invalid-feedback">
                    {{ $message }}
                 </div>
            @enderror
              --}}
          </div>
        </div>
        
        
            <div class="form-group row">
              <label for="first_name" class="col-md-3 col-form-label">Data de distribuição</label>
              <div class="col-md-9">
                <input type="date" name="delivery_demand" value="{{old('delivery_demand')}}">
                
                {{--value="
                {{ old('date_input_demand', $demand->date_input_demand)}}" 
                class="form-control @error('amendment')
                is-invalid
                @enderror">
               @error('amendment')
                     <div class="invalid-feedback">
                        {{ $message }}
                     </div>
                @enderror
                  --}}
              </div>
            </div>

            
                <div class="form-group row">
                  <label for="first_name" class="col-md-3 col-form-label">Endereço</label>
                  <div class="col-md-9">
                    <textarea type="text" name="address_demand" value="{{old('address_demand')}}">{{old('address_demand')}} </textarea>
                    
                    {{--value="
                    {{ old('date_input_demand', $demand->date_input_demand)}}" 
                    class="form-control @error('amendment')
                    is-invalid
                    @enderror">
                   @error('amendment')
                         <div class="invalid-feedback">
                            {{ $message }}
                         </div>
                    @enderror
                      --}}
                  </div>
                </div>

                
                

                   
                        <div class="form-group row">
                          <label for="first_name" class="col-md-3 col-form-label">Região Administrativa</label>
                          <div class="col-md-9">
                            <select id="administrative_region_id" name="administrative_region_id">
                                @foreach($administrativeRegions as $administrativeRegion)
                                <option value="{{$administrativeRegion->id ,old('administrative_region_id')}}">{{$administrativeRegion->administrative_region_name}}</option>
                                @endforeach
                            </select>
                         
                            {{--value="
                            {{ old('date_input_demand', $demand->date_input_demand)}}" 
                            class="form-control @error('amendment')
                            is-invalid
                            @enderror">
                           @error('amendment')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                            @enderror
                              --}}
                          </div>
                        </div>
                   

                      
                            <div class="form-group row">
                              <label for="first_name" class="col-md-3 col-form-label">Interessado</label>
                              <div class="col-md-9">
                                <select id="interested_id" name="interested_id">
                                    @foreach($interesteds as $interested)
                                    <option value="{{$interested->id ,old('interested_id')}}">{{$interested->interested_name}}</option>
                                    @endforeach
                                </select>
                             
                                {{--value="
                                {{ old('date_input_demand', $demand->date_input_demand)}}" 
                                class="form-control @error('amendment')
                                is-invalid
                                @enderror">
                               @error('amendment')
                                     <div class="invalid-feedback">
                                        {{ $message }}
                                     </div>
                                @enderror
                                  --}}
                             </div>
                        </div>
                        <div class="form-group row">
                          <label for="first_name" class="col-md-3 col-form-label">Área temática</label>
                          <div class="col-md-9">
                            <select id="interested_id" name="interested_id">
                                @foreach($thematicAreas as $thematicArea)
                                <option value="{{$thematicArea->id ,old('thematic_areas_id')}}">{{$thematicArea->thematic_area_name}}</option>
                                @endforeach
                            </select>
                         
                            {{--value="
                            {{ old('date_input_demand', $demand->date_input_demand)}}" 
                            class="form-control @error('amendment')
                            is-invalid
                            @enderror">
                           @error('amendment')
                                 <div class="invalid-feedback">
                                    {{ $message }}
                                 </div>
                            @enderror
                              --}}
                         </div>
                    </div>

                        <div class="form-group">
                          <label for="techniqueAreas">Área tecnica:</label>
                          <div class="form-group">
                            @foreach ($techniqueAreas as $techniqueArea)
                              <div class="form-group">
                                  <input type="checkbox" name="technique_area_id" value="{{$techniqueArea -> id }}"> {{$techniqueArea -> technique_area_name }}
                                </div>  
                            @endforeach
                            </div>
                        </div>

                        <div class="form-group">
                          <label for="techniqueAreas">Atividades:</label>
                            <div class="form-group">
                              @foreach ($activities as $activity)
                                <div class="form-group">
                                    <input type="checkbox" name="activity_id" value="{{$activity -> id }}"> {{$activity -> activity_name}}
                                  </div>  
                              @endforeach
                          </div> 
                      
                             
                        <button type="submit" class="btn btn-info">Criar</button>

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
    </div>
  </div>

 
