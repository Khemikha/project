<div class=" container my-5">
  <div class=" card border-0 rounded-3 bg-white bg-opacity-75">
    <div class=" card-body">
      <p class=" fs-4 text-center">Sign Up</p>
      <?php include('./controller/register.php') ?>
      <form method="POST">
        <div class=" row-cols-2 row">
          <div class=" col">
            <div class=" mb-3">
              <label>คำนำหน้า <span class=" text-danger">*</span></label>
              <input type="text" class=" form-control" name="perfix">
            </div>
          </div>
          <div class=" col">
            <div class=" mb-3">
              <label>เพศ <span class=" text-danger">*</span></label>
              <select class="form-select" name="sex">
                <option value="m">ชาย</option>
                <option value="f">หญิง</option>
              </select>
            </div>
          </div>
          <div class=" col">
            <div class=" mb-3">
              <label>ชื่อ - นามสกุล <span class=" text-danger">*</span></label>
              <input type="text" class=" form-control" name="name">
            </div>
          </div>
          <div class=" col">
            <div class=" mb-3">
              <label>username <span class=" text-danger">*</span></label>
              <input type="text" class=" form-control" name="username">
            </div>
          </div>
          <div class=" col">
            <div class=" mb-3">
              <label>เบอร์โทรศัพท์ <span class=" text-danger">*</span></label>
              <input type="text" class=" form-control" name="phone">
            </div>
          </div>
          <div class=" col">
            <div class=" mb-3">
              <label>password <span class=" text-danger">*</span></label>
              <input type="text" class=" form-control" name="password">
            </div>
          </div>
          <div class=" col">
            <div class=" mb-3">
              <label>email <span class=" text-danger">*</span></label>
              <input type="email" class=" form-control" name="email">
            </div>
          </div>
        </div>
        <div class=" d-flex justify-content-end">
          <button class=" btn btn-glod-500 btn-lg" name="register"> Submit </button>
        </div>
      </form>
    </div>
  </div>
</div>