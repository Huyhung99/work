
<!-- navbar start -->
<nav class="navbar navbar-expand-lg navbar-light bg-blue">
  <a class="navbar-brand" href="https://hpmap.vn">
    <img src="https://hpmap.vn/sites/all/themes/leminhland/assets/img/hplands.png" width="40px"> <span class="title-navbar white">HPMAP.VN</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse hidden-sm" id="navbarSupportedContent">
    <form class="form-inline my-2 my-lg-0 mr-auto">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text bg-white" id="basic-addon1"><i class="fa fa-search"></i></span>
        </div>
        <input class="form-control modified input-search-map" placeholder="Nhập địa chỉ, tọa độ cần tra cứu">
      </div>
      <a id="btn-loc-bds" type="button" data-toggle="collapse" href="#" data-target="#TimKiemSPPC" aria-expanded="false" aria-controls="TimKiemSPPC">
        <i class="fas fa-filter"></i> Lọc tin BĐS
      </a>
<!--      <select class="form-control modified" placeholder="Tỉnh / Thành phố" id="tinh-thanhpho">-->
<!--        <option value="">-- Tỉnh / Thành phố --</option>-->
<!--      </select>-->
<!--      <select class="form-control modified" placeholder="Quận / Huyện" id="quan-huyen">-->
<!--        <option value="">-- Quận / Huyện --</option>-->
<!--      </select>-->
<!--      <select class="form-control modified" placeholder="Đường phố" id="duong-pho">-->
<!--        <option value="">-- Đường phố --</option>-->
<!--      </select>-->
<!--      <select class="form-control modified" id="khoang-gia">-->
<!--        <option value="">-- Khoảng giá --</option>-->
<!--      </select>-->
<!--      <select class="form-control modified" id="huong">-->
<!--        <option value="">--Hướng --</option>-->
<!--      </select>-->
<!--      <a class="btn btn-outline-success my-2 my-sm-0" href="#" id="btn-tim-kiem">Tìm kiếm</a>-->
    </form>
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">BẢNG HÀNG <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">DỰ ÁN</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
  </div>
</nav>
<div class="collapse" id="TimKiemSPPC">
  <div class="d-flex">
    <div class="dropdown mr-3">
      <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Phân loại
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
        <a class="dropdown-item" href="#">Mua bán</a>
        <a class="dropdown-item" href="#">Cho thuê</a>
        <a class="dropdown-item" href="#">Dự án</a>
      </div>
    </div>
    <div class="dropdown mr-3">
      <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Loại hình
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
        <a class="dropdown-item" href="#">Nhà - đất thổ cư</a>
        <a class="dropdown-item" href="#">Nhà - đất dự án</a>
        <a class="dropdown-item" href="#">Nhà - đất nông nghiệp</a>
      </div>
    </div>
    <div class="dropdown mr-3">
      <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Giá tiền
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset" id="drop-gia-tien">
        <form class="px-3 py-2">
          <div class="form-check">
            <label class="form-check-label" for="thoa-thuan">
              <input type="checkbox" class="form-check-input" value="Thỏa thuận" id="thoa-thuan"> Thỏa thuận
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label" for="tu0den2">
              <input type="checkbox" class="form-check-input" value="0 - 2" id="tu0den2">
              <= 2 triệu
            </label>
          </div>
        </form>
      </div>
    </div>
    <div class="dropdown mr-3">
      <a class="dropdown-toggle" href="#" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Diện tích
      </a>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
        <form class="px-3 py-2">
          <div class="form-check">
            <label class="form-check-label" for="duoi20">
              <input type="checkbox" class="form-check-input" value="0 - 2" id="duoi20">
              < 20 m²
            </label>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<input type="hidden" id="san-pham-tim-kiem" value="<?=implode(',', isset($_SESSION['san_pham']) ? $_SESSION['san_pham'] : [])?>">
<?php print $messages;?>
<div id="mapid"></div>
