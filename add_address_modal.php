<!-- Modal -->
<div class="modal fade addressModal" id="addressModal" tabindex="-1" aria-labelledby="addressModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header border-none">
        <h5 class="modal-title" id="addressModalLabel">Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-regular fa-xmark-circle"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <div class="location_searchBox d-flex align-items-center mb-3">
                <span class="search"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Enter a location">
                <button type="button" class="btn"><i class="fa-solid fa-location-crosshairs"></i></button>
            </div>
            <div class="google_mapArea mb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d57649.24165947274!2d89.80296927275398!3d25.435668932006553!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1722570978938!5m2!1sen!2sbd" width="100%" height="180px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="d-flex align-items-center mb-3">
                <span class="f-s14 text_cyan"><i class="fa fa-location-dot"></i></span>
            </div>
            <div class="formGroup mb-4">
                <label>Apartment & Flat No</label>
                <textarea name="apartment_no" class="form-control textareaStyle" rows="2"></textarea>
            </div>
            <div class="address_typeArea">
                <h6 class="m-0 title">Add Label</h6>
                <div class="active_buttonGroup">
                    <div class="btnGroup">
                        <input type="radio" class="d-none" name="address_type" id="home" value="home" >
                        <label for="home" class="addressType_label d-flex align-items-center">
                            <span class="type_icon"><i class="fa fa-home"></i></span>
                            <h6>Home</h6>
                        </label>
                    </div>
                    <div class="btnGroup">
                        <input type="radio" class="d-none" name="address_type" id="work" value="work" >
                        <label for="work" class="addressType_label d-flex align-items-center">
                            <span class="type_icon"><i class="fa-solid fa-briefcase"></i></span>
                            <h6>Work</h6>
                        </label>
                    </div>
                    <div class="btnGroup">
                        <input type="radio" class="d-none" name="address_type" id="other" value="other" >
                        <label for="other" class="addressType_label other_type_btn d-flex align-items-center">
                            <span class="other_icon"><i class="fa-solid fa-ellipsis"></i></span>
                            <h6>Other</h6>
                        </label>
                    </div>
                </div>
                <div class="othersNameInput">
                    <input type="text" class="form-control" placeholder="Type label name...">
                </div>
                <button type="submit" class="btn formSubmit_btn">Confirm Location</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>