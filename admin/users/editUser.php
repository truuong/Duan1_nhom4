<section class="content">
      <div class="container-fluid">
        <div class="row">
                <div class="col-lg-12">
                <h3 style="text-align:center">Cập nhật thông tin</h3>
                        <form method="post" id="updateuser">
                            <label for="name">Họ tên</label>
                            <input type="text" value="cuong" name="name" class="form-control">

                            <label for="phone">Số điện thoại</label>
                            <input type="number" value="123456" name="phone" class="form-control">

                            <label for="email">Email</label>
                            <input type="text" value="cuonghcpc04375@fpt.edu.vn" name="email" class="form-control">

                            <label for="password">Mật khẩu</label>
                            <input type="text" name="password" class="form-control">

                            <label for="active">Trạng thái</label>
                            <div class="input-group">
                                <select name="active" style="height: 38px;" class="w-100">
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Khóa</option>
                                </select>
                            </div>

                            <label for="permission">Quyền</label>
                            <div class="input-group mb-3">
                                <select name="permission" style="height: 38px;" class="w-100">
                                    <option value="0">Admin</option>
                                    <option value="1">Người dùng</option>
                                </select>
                            </div>

                            <button type="submit" name="updateuser" class="btn btn-danger">Cập nhật</button>
                        </form>
                </div>
            </div>
      </div>
</section>