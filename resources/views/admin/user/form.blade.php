<div class="container-fluid">
   <div class="row">
      <div class="col-md-12">
         <div class="card">
            <div class="card">
               <form id="userForm">
                  @csrf
                  <div class="card-body">
                     <div class="form-group">
                        <label for="name">Tên</label>
                        <input
                           type="text"
                           id="name"
                           name="name"
                           class="form-control"/>
                     </div>
                     <div class="form-group">
                        <label for="email"
                           >Email</label
                           >
                        <input
                           type="email"
                           id="email"
                           name="email"
                           class="form-control"/>
                     </div>
                     <div class="form-group">
                        <label for="password">Mật Khẩu</label>
                        <input
                           type="password"
                           id="password"
                           name="password"
                           class="form-control"/>
                     </div>
                     <div class="form-group">
                        <label for="cfpassword">Xác Nhận Mật Khẩu</label>
                        <input
                           type="password"
                           id="cfpassword"
                           name="cfpassword"
                           class="form-control"/>
                     </div>
                  </div>
                  <div class="border-top">
                     <div class="card-body">
                        <button type="submit" class="btn btn-success text-white">
                        Lưu Lại
                        </button>
                        <a href="/admin/user" class="btn btn-danger text-white">
                        Thoát
                        </a>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>