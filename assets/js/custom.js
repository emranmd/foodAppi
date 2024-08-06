/*/~~~~~~~~~~~~ Langues Dropdown_btn ~~~~~~~~~~~~~ /*/

var button = document.querySelector('.dropdown_btn');
if (button) {
    var dropdown_list = document.querySelector('.dropdown_listArea');
    // console.log(dropdown_list);
    button.addEventListener('click', function () {
        btn.classList.toggle('active');
    })

    window.addEventListener('click', function(s){
        if (!dropdown_list.contains(s.target)) {
            if (!button.contains(s.target)) dropdown_list.classList.remove('active');
        }
    })
}

/*/~~~~~~~~~~~~ Langues Dropdown_btn ~~~~~~~~~~~~~ /*/

/*/~~~~~~~~~~~~ cart_active_area ~~~~~~~~~~~~~ /*/

var click_button = document.querySelectorAll('.click_button');
if (click_button) {
    var openWrap = document.querySelector('.openWrap');
    var mainContentArea = openWrap.querySelector('.mainContentArea');
    var close_cart = document.querySelectorAll('.close_cart');
    // console.log(close_cart);
    click_button.forEach( btn => {
        btn.addEventListener('click', function () {
            openWrap.classList.add('active');
        });
    })

    close_cart.forEach( close =>{
        close.addEventListener('click', function () {
            openWrap.classList.remove('active');
        })
    })
    
}

/*/~~~~~~~~~~~~ cart_active_area ~~~~~~~~~~~~~ /*/

/*/~~~~~~~~~~~~ Increment&Decrement_area ~~~~~~~~~~~~~ /*/

var quantity_btn = document.querySelectorAll('.quantity_btn');
if (quantity_btn) {
    quantity_btn.forEach( btn =>{
        btn.addEventListener('click', function () {
            var is_plus = btn.classList.contains('increment_btn');
            var input = btn.parentElement.querySelector('input');
            var value = Number(input.value);
            if (is_plus) {
                input.value = value + 1;
            }else if(value > 1){
                input.value = value - 1;
            }
        })
    } )
}

/*/~~~~~~~~~~~~ Increment&Decrement_area ~~~~~~~~~~~~~ /*/

/*/~~~~~~~~~~~~ searchItems_btn_area ~~~~~~~~~~~~~ /*/

var searchItems_btn = document.querySelectorAll('.searchItems_btn');
if (searchItems_btn) {
    searchItems_btn.forEach( button =>{
        button.addEventListener('click', function () {
            this.classList.toggle('active');
        })
    })
}

/*/~~~~~~~~~~~~ searchItems_btn_area ~~~~~~~~~~~~~ /*/

/*/~~~~~~~~~~~~ verticalSystembtn_area ~~~~~~~~~~~~~ /*/

let vertical_btn = document.querySelectorAll('.vertical_systemBtn')
if (vertical_btn) {
    vertical_btn.forEach( button =>{
        button.addEventListener('click', function () {
            vertical_btn.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            let is_row = button.classList.contains('vertical_row');
            let vertical_system = document.querySelector('.vertical_system');
            if (is_row) {
                vertical_system.classList.add('verticalRowSystem');
            }else{
                vertical_system.classList.remove('verticalRowSystem');
            }
        })
    } )
}

/*/~~~~~~~~~~~~ verticalSystembtn_area ~~~~~~~~~~~~~ /*/

/*/~~~~~~~~~~~~ verticalSystembtn_area ~~~~~~~~~~~~~ /*/

// let page_active = window.location.pathname;
// if (page_active) {
//     let nav_link = document.querySelectorAll('.nav_link');
//     nav_link.forEach( page => {
    
//         if (page.href.includes(`${page_active}`)) {
//             page.classList.add('active');
//         }
//     });
    
// }

/*/~~~~~~~~~~~~ verticalSystembtn_area ~~~~~~~~~~~~~ /*/

/*/~~~~~~~~~~~~ addressType_btn_area ~~~~~~~~~~~~~ /*/

let addressType_btn = document.querySelectorAll('.addressType_label');
if (addressType_btn) {
    let othersName = document.querySelector('.othersNameInput');
    addressType_btn.forEach( btn => {
        btn.addEventListener('click', function () {
            addressType_btn.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');
            let is_other_btn = btn.classList.contains('other_type_btn');
            if (is_other_btn) {
                othersName.classList.add('active');
            }else{
                othersName.classList.remove('active');
            }
        })
    })
}

/*/~~~~~~~~~~~~ addressType_btn_area ~~~~~~~~~~~~~ /*/

/*/~~~~~~~~~~~~ tab_label_btn_area ~~~~~~~~~~~~~ /*/

let tab_label_btn = document.querySelectorAll('.tab_label_btn');
if (tab_label_btn) {
    let tab_pane = document.querySelectorAll('.tab_pane');
    // console.log(tab_pane);
    tab_label_btn.forEach( btn =>{

        btn.addEventListener('click', function(){
            tab_label_btn.forEach( button => button.classList.remove('active'));
            this.classList.add('active');
            tab_pane.forEach( text => text.classList.remove('active'));

            let data_id = btn.getAttribute('data-id');
            let tab_panes = document.querySelector(`.${data_id}`);
            tab_panes.classList.add('active');
        })

    })
}



let cart_switch_btn = document.querySelectorAll('.cart_switch_label');
if (cart_switch_btn) {
    let address_show = document.querySelectorAll('.customer_address');
    // console.log(address_show);
    cart_switch_btn.forEach( btn =>{

        btn.addEventListener('click', function(){
            cart_switch_btn.forEach( button => button.classList.remove('active'));
            this.classList.add('active');
            address_show.forEach( text => text.classList.remove('active'));

            let data_id = btn.getAttribute('data-id');
            let show_address = document.querySelectorAll(`.${data_id}`);
            show_address.forEach( text => text.classList.add('active'));
            // console.log(show_address);
        })

    });
}


let timeFrameBtn = document.querySelectorAll('.timeFrame_btn');
if (timeFrameBtn) {
    let time_frame = document.querySelectorAll('.delivery_timeFrame');

    // console.log(time_frame);
    timeFrameBtn.forEach( btn =>{
        btn.addEventListener('click', function () {
            timeFrameBtn.forEach( timeBtn => timeBtn.classList.remove('active'));
            this.classList.add('active');
            
            time_frame.forEach( btn=> btn.classList.remove('active'));

            let data_id = btn.getAttribute('data-id');
            let open_timeFrame = document.querySelector(`.${data_id}`)
            // console.log(open_timeFrame);
            open_timeFrame.classList.add('active');

        })
    })
    
}

/*/~~~~~~~~~~~~ tab_label_btn_area ~~~~~~~~~~~~~ /*/

/*/~~~~~~~~~~~~ profileOpen_btn_area ~~~~~~~~~~~~~ /*/

let open_profile = document.querySelector('.open_profile');
if (open_profile) {
    let close_profile = document.querySelector('.close_profile');
    let profile_section = document.querySelector('.profile_section');
    let language_btn = document.querySelector('.language_btn');
    // console.log(dropdown_btn);
    open_profile.addEventListener('click', function () {
        profile_section.classList.add('active');
    })
    close_profile.addEventListener('click', function () {
        profile_section.classList.remove('active');
    })
    language_btn.addEventListener('click', function () {
        profile_section.classList.remove('active');
    })
}



/*/~~~~~~~~~~~~ profileOpen_btn_area ~~~~~~~~~~~~~ /*/