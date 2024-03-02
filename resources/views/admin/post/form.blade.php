<div class="container-fluid">
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Forms Control</h4>
                  <div class="form-group">
                     <label for="hue-demo">Hue</label>
                     <input
                        type="text"
                        id="hue-demo"
                        class="form-control demo"
                        data-control="hue"
                        value="#ff6161"
                        />
                  </div>
                  <div class="form-group">
                     <label for="position-bottom-left"
                        >Bottom left (default)</label
                        >
                     <input
                        type="text"
                        id="position-bottom-left"
                        class="form-control demo"
                        data-position="bottom left"
                        value="#0088cc"
                        />
                  </div>
                  <div class="form-group">
                     <label for="position-top-right">Top right</label>
                     <input
                        type="text"
                        id="position-top-right"
                        class="form-control demo"
                        data-position="top right"
                        value="#0088cc"
                        />
                  </div>
                  <label>Datepicker</label>
                  <div class="input-group">
                     <input
                        type="text"
                        class="form-control mydatepicker"
                        placeholder="mm/dd/yyyy"
                        />
                     <div class="input-group-append">
                        <span class="input-group-text h-100"
                           ><i class="mdi mdi-calendar"></i
                           ></span>
                     </div>
                  </div>
                  <label class="mt-3">Autoclose Datepicker</label>
                  <div class="input-group">
                     <input
                        type="text"
                        class="form-control"
                        id="datepicker-autoclose"
                        placeholder="mm/dd/yyyy"
                        />
                     <div class="input-group-append">
                        <span class="input-group-text h-100"
                           ><i class="mdi mdi-calendar"></i
                           ></span>
                     </div>
                  </div>
               </div>
               <div class="border-top">
                  <div class="card-body">
                     <button type="submit" class="btn btn-success text-white">
                     Save
                     </button>
                     <button type="submit" class="btn btn-primary">Reset</button>
                     <button type="submit" class="btn btn-info">Edit</button>
                     <button type="submit" class="btn btn-danger text-white">
                     Cancel
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>