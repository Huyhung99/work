$(document).ready(function (){
  let mymap, myLocationLayerCircle, myLocation, markers ;
  function getKhuVuc($type, $idSelect, $parent, callback){
    $.ajax({
      url: 'https://app.hpmap.vn/service/get-khu-vuc',
      type: 'post',
      dataType: 'json',
      data: {
        type: $type,
        parent: $parent,
        uid: $("#input-uid").val(),
        token: $("#input-token").val(),
      },
      success: function (data){
        $($idSelect).html('<option value="">-- Chọn '+$type+' -- </option>');
        $.each(data, function (k, obj){
          $($idSelect).append(`<option value="`+obj.id+`">`+obj.name+`</option>`);
        });
      },
      error: function (r1, r2){
      }
    }).then(function (data){
      if(typeof callback === "function")
        callback();
    })
  }
  function getKhoangGia($type, $idSelect, callback){
    $.ajax({
      url: 'https://app.hpmap.vn/service/get-danh-muc',
      type: 'post',
      dataType: 'json',
      data: {
        type: $type,
        uid: $("#input-uid").val(),
        token: $("#input-token").val(),
      },
      success: function (data){
        $($idSelect).html('<option value="">-- Chọn '+$type+' -- </option>');
        $.each(data, function (k, obj){
          $($idSelect).append(`<option value="`+obj.id+`">`+obj.name+`</option>`);
        });
      },
      error: function (r1, r2){
      }
    }).then(function (data){
      if(typeof callback === "function")
        callback();
    })
  }

  if($("#edit-field-thanh-pho-und-0-value").length > 0){
    $("#edit-field-thanh-pho-und-0-value, #edit-field-quan-huyen-und-0-value, #edit-field-duong-pho-und-0-value").addClass('hidden').attr('type', 'hide');
    $("#edit-field-thanh-pho-und-0-value").parent().append('<select class="form-control" id="select-thanh-pho"></select>')
    $("#edit-field-quan-huyen-und-0-value").parent().append('<select class="form-control" id="select-quan-huyen"></select>')
    $("#edit-field-duong-pho-und-0-value").parent().append('<select class="form-control" id="select-duong-pho"></select>')
    // setTimeout(function (){
    //
    // }, 500)
    getKhuVuc('Thành phố', "#select-thanh-pho");
    $("#select-thanh-pho, #select-quan-huyen, #select-duong-pho").select2();
    setTimeout(function (){
      if($("#edit-field-thanh-pho-und-0-value").val() != ''){
        $("#select-thanh-pho").val($("#edit-field-thanh-pho-und-0-value").val()).trigger('change');
      }
    }, 500);
  }
  if($("#tinh-thanhpho").length > 0){
    getKhuVuc('Thành phố', "#tinh-thanhpho");
  }
  if($("#mapid").length > 0){
    $("html, body").css('height', '100%')
    $("html, body").css('max-height', '100%')
    $("html, body").css('overflow', 'hidden')
    $.ajax({
      url: 'https://app.hpmap.vn/service/khoi-tao-ban-do',
      type: 'post',
      dataType: 'json',
      data: {
        uid: $("#input-uid").val(),
        token: $("#input-token").val(),
      },
      beforeSend: function(){
        $("#drop-gia-tien form, #drop-dien-tich form, #list-loai-bds, #list-phan-loai-bds").html('');
      },
      success: function (data){
        $.each(data.giaTien, function (k, obj){
          $("#drop-gia-tien form").append(`<div class="form-check">
            <label class="form-check-label" for="gia-tien-`+k+`">
              <input type="checkbox" class="form-check-input" value="`+obj+`" id="gia-tien-`+k+`"> `+obj+`
            </label>
          </div>`)
        })
        $.each(data.dienTich, function (k, obj){
          $("#drop-dien-tich form").append(`<div class="form-check">
            <label class="form-check-label" for="dien-tich-`+k+`">
              <input type="checkbox" class="form-check-input" value="`+obj+`" id="dien-tich-`+k+`"> `+obj+`
            </label>
          </div>`)
        })
        $.each(data.loaiBDS, function (k, obj){
          $("#list-loai-bds").append(`<a class="dropdown-item" href="#">`+obj+`</a>`)
        })
        $.each(data.phanLoai, function (k, obj){
          $("#list-phan-loai-bds").append(`<a class="dropdown-item" href="#">`+obj+`</a>`)
        })
      },
      error: function (r1, r2){
      }
    }).then(function (data){
      if(typeof callback === "function")
        callback();
    })
    mymap = L.map('mapid');
    // var map = L.map('mapid').fitWorld();
    function onLocationFound(e) {
      var radius = e.accuracy;

      myLocationLayer = L.marker(e.latlng).addTo(mymap);
      myLocationLayer.bindPopup("You are within " + radius + " meters from this point").openPopup();
      //
      // myLocationLayerCircle = L.circle(e.latlng, {radius: 5000}, {
      //   fillOpacity: 0.1
      // }).addTo(mymap);

      // myLocationLayerCircle.remove();
      myLocationLayerCircle = L.circle(e.latlng, {radius: 1000, stroke: false}, {
        fillOpacity: 0.05
      }).addTo(mymap);
    }
    function onLocationError(e) {
      // alert(e.message);
    }
    L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&hl=vi&x={x}&y={y}&z={z}', {
      subdomains:['mt0', 'mt1', 'mt2', 'mt3'],
      maxNativeZoom:19,
      maxZoom:25
    }).addTo(mymap);
    markers = L.markerClusterGroup();

    mymap.attributionControl.setPrefix('Bản đồ &copy; <a href="https://hpmap.vn">HPLands - HPMap</a> contributors');
    mymap.locate({setView: true, maxZoom: 15});

    // L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
    //   attribution: 'Bản đồ &copy; <a href="https://hpmap.vn">HPLands - HPMap</a> contributors',
    //   maxZoom: 18,
    //   id: 'mapbox/streets-v11',
    //   tileSize: 512,
    //   zoomOffset: -1,
    // }).addTo(mymap);
    mymap.on('locationfound', onLocationFound);
    mymap.on('locationerror', onLocationError);

    // Load ds dữ liệu các sản phẩm có trên bản đồ
    $.ajax({
      url: 'https://app.hpmap.vn/service/get-san-pham',
      type: 'post',
      dataType: 'json',
      data: {
        san_pham_tim_kiem: $("#san-pham-tim-kiem").val(),
        uid: $("#input-uid").val(),
        token: $("#input-token").val(),
      },
      error: function (r1, r2){
      }
    }).then(function (data){
      $.each(data.dsSanPham, function (k, obj){
        var toado = obj.toa_do_vi_tri.split(', ');
        var one_marker = L.marker([toado[0].trim(), toado[1].trim()],{
          title: obj.tieu_de,
          riseOnHover: true,
          bubblingMouseEvents: true,
          icon:  L.divIcon({
            html: '<span class="">'+obj.id+'</span>'
          })
        })
          .bindTooltip('<b><a href="#" class="xem-chi-tiet" data-value="'+obj.nid+'">'+obj.tieu_de+'</a></b><br/>'+'Giá từ '+parseInt(obj.gia_tu).toLocaleString('vi'))
          .openTooltip();
        markers.addLayer(one_marker);
      })

      $.each(data.dsSanPhamTimKiem, function (k, obj){
        var toado = obj.toa_do_vi_tri.split(', ');
        var one_marker = L.marker([toado[0].trim(), toado[1].trim()],{
          title: obj.tieu_de,
          riseOnHover: true,
          bubblingMouseEvents: true,
          icon:  L.divIcon({
            html: '<span class="san-pham-tim-kiem">'+obj.id+'</span>'
          })
        })
          .bindTooltip('<b>'+obj.tieu_de+'</b><br/>'+'Giá từ '+parseInt(obj.gia_tu).toLocaleString('vi'))
          .openTooltip();
        markers.addLayer(one_marker);
      })
      mymap.addLayer(markers);

      $.each(data.loThuaDat, function (k, obj){
        L.polygon(obj.dinh)
          .bindTooltip("my tooltip text")
          .openTooltip()
          .addTo(mymap);
      })

      setTimeout(function (){
        $(".san-pham-tim-kiem").each(function (){
          $(this).parent().addClass('bg-green');
        })
      }, 1000);

      // var circle = L.circle([51.508, -0.11], {
      //   color: 'red',
      //   fillColor: '#f03',
      //   fillOpacity: 0.5,
      //   radius: 500
      // }).addTo(mymap);
    })
  }

  $(document).on('change', "#select-thanh-pho", function (){
    $("#edit-field-thanh-pho-und-0-value").val($(this).find(':selected').val());
    getKhuVuc('Quận huyện', "#select-quan-huyen", $(this).find(':selected').val(), function (){
      if($("#edit-field-quan-huyen-und-0-value").val() != ''){
        $("#select-quan-huyen").val($("#edit-field-quan-huyen-und-0-value").val()).trigger('change');
      }
    });
  });

  $(document).on('change', "#tinh-thanhpho", function (){
    getKhuVuc('Quận huyện', "#quan-huyen", $(this).find(':selected').val());
  });

  $(document).on('change', "#select-quan-huyen", function (){
    $("#edit-field-quan-huyen-und-0-value").val($(this).find(':selected').val());
    getKhuVuc('Đường phố', "#select-duong-pho", $(this).val(), function (){
      if($("#edit-field-duong-pho-und-0-value").val() != ''){
        $("#select-duong-pho").val($("#edit-field-duong-pho-und-0-value").val()).trigger('change');
      }
    });
  });

  $(document).on('change', "#quan-huyen", function (){
    getKhuVuc('Đường phố', "#duong-pho", $(this).val());
  });

  $(document).on('change', "#select-duong-pho", function (){
    $("#edit-field-duong-pho-und-0-value").val($(this).find(':selected').val());
  });

  if($("#khoang-gia").length > 0){
    getKhoangGia('Khoảng giá', '#khoang-gia');
  }

  if($("#huong").length > 0){
    getKhoangGia('Hướng', '#huong');
  }

  $(document).on('click', '#btn-tim-kiem-bds, #btn-tim-kiem', function (e){
    e.preventDefault();
    var redirect = false;
    if($(this).attr('id') != 'btn-tim-kiem')
      redirect = true;
    if(
      $('#tinh-thanhpho').val() == '' &&
      $('#quan-huyen').val() == ''&&
      $('#duong-pho').val() == '' &&
      $('#huong').val() == '' &&
      $('#khoang_gia').val() == ''
    )
      alert('Vui lòng chọn ít nhất 1 lựa chọn để tìm kiếm');
    else{
      $.ajax({
        url: 'https://hpmap.vn/tim-san-pham',
        dataType: 'json',
        type: 'post',
        beforeSend: function (){
          $.blockUI({ message: '<h4 style=""><img width="80px" src="https://hpmap.vn/sites/all/themes/leminhland/assets/img/loading2.gif" /> Vui lòng đợi trong giây lát...</h4>' });
        },
        data: {
          thanh_pho: $('#tinh-thanhpho').val(),
          quan_huyen: $('#quan-huyen').val(),
          duong_pho: $('#duong-pho').val(),
          khoang_gia: $('#khoang-gia').val(),
          huong: $('#huong').val(),
          uid: $("#input-uid").val(),
          token: $("#input-token").val(),
        },
        error: function(r1, r2){
          console.log(r1.responseText);
          $.unblockUI();
        },
        complete: function(){
          $.unblockUI();
        }
      }).then(function(response){
        $.unblockUI();
        if(redirect)
          window.location = 'https://hpmap.vn/ban-do-hang';
        else{

        }
      });
    }

  });

})
