<script src="/assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="/assets/extra-libs/sparkline/sparkline.js"></script>
<!--Wave Effects -->
<script src="/dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<!-- <script src="/dist/js/pages/dashboards/dashboard1.js"></script> -->
<!-- Charts js Files -->
<script src="/assets/libs/flot/excanvas.js"></script>
<script src="/assets/libs/flot/jquery.flot.js"></script>
<script src="/assets/libs/flot/jquery.flot.pie.js"></script>
<script src="/assets/libs/flot/jquery.flot.time.js"></script>
<script src="/assets/libs/flot/jquery.flot.stack.js"></script>
<script src="/assets/libs/flot/jquery.flot.crosshair.js"></script>
<script src="/assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
<script src="/dist/js/pages/chart/chart-page-init.js"></script>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

    <form id="nowDel">
        @csrf
        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">Thông báo !!!</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            Bạn có muốn xóa <span class="text-danger" id="nameDel"></span> không ???
            <input type="hidden" id="idDel" name="idDel">
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="submit" class="btn btn-info">Xóa Ngay</button>
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Thoát</button>
        </div>
    </form>

    </div>
  </div>
</div>

<script>

    function getID(id, name) {
        // alert(name)
        // truyền id, name lên model
        $('#nameDel').text(name);
        $('#idDel').val(id);
    }

    $(document).ready(function(){
        $('#nowDel').on('submit', function(e){
            // chặn load form
            e.preventDefault();
        
            $.ajax({
                url: '/admin/user/delete',
                type: 'POST',
                data: $(this).serialize(),
                success: function(results){
                    // console.log(results);
                    if(results.msg == 1){
                        alert('Đã xóa !!!')
                        // tự động chuyển trang
                        window.location.href = '/admin/user';
                    }
                }
            });

            return false;
        })

        $('#userForm').on('submit', function(e){
            // chặn load form
            e.preventDefault();

            const password = $('#password').val();
            const cfpassword = $('#cfpassword').val();

            // kiểm tra dữ liệu
            if(password != cfpassword){
                alert('Xác nhận mật khẩu không đúng');
                return false;
            }

            // gửi ajax
            $.ajax({
                url: '/admin/user/register',
                type: 'POST',
                data: $(this).serialize(),
                success: function(results){
                    // console.log(results);
                    if(results.msg == 'ok'){
                        alert('Thêm thành công !!!')
                        // tự động chuyển trang
                        window.location.href = '/admin/user';
                    }
                }
            });

            return false;
        })
    })
</script>