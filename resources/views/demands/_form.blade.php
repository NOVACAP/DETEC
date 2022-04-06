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
                    <input type="text" name="address_demand" value="{{old('address_demand')}}">
                    
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

                <div class="col-md-12">
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">Atividades</label>
                      <div class="col-md-9">
                        <select id="activity_id" name="activity_id">
                            @foreach($activities as $activity)
                            <option value="{{$activity->id ,old('activity_id')}}">{{$activity->activity_name}}</option>
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
                        <button type="submit" class="btn btn-info">Criar</button>
    </div>
  </div>

 
