// user
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('addUserForm');

    form.addEventListener('submit', function (event) {
        var isValid = validateUserForm();

        if (!isValid) {
            event.preventDefault();
        }
    });

    function validateUserForm() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;
        var phone = document.getElementById('phone').value;
        var email = document.getElementById('email').value;
        var name = document.getElementById('name').value;
        var permission = document.getElementById('permission').value;

        var usernameError = document.getElementById('usernameError');
        var passwordError = document.getElementById('passwordError');
        var phoneError = document.getElementById('phoneError');
        var emailError = document.getElementById('emailError');
        var nameError = document.getElementById('nameError');
        var permissionError = document.getElementById('permissionError');

        // Reset thông báo lỗi
        usernameError.textContent = '';
        passwordError.textContent = '';
        phoneError.textContent = '';
        emailError.textContent = '';
        nameError.textContent = '';
        permissionError.textContent = '';

        var hasError = false;

        // Thêm điều kiện kiểm tra và hiển thị thông báo lỗi
    if (name === '') {
        nameError.textContent = 'Vui lòng nhập Tên sản phẩm';
        hasError = true;
    }

    if (price === '') {
        priceError.textContent = 'Vui lòng nhập giá sản phẩm';
        hasError = true;
    } else if (!isNumeric(price) || parseFloat(price) <= 0) {
        priceError.textContent = 'Vui lòng nhập giá sản phẩm hợp lệ';
        hasError = true;
    }

    if (price_sale === '') {
        price_saleError.textContent = 'Vui lòng nhập giảm giá';
        hasError = true;
    } else if (!isNumeric(price_sale) || parseFloat(price_sale) < 0 || parseFloat(price_sale) >= 100) {
        price_saleError.textContent = 'Vui lòng nhập giảm giá hợp lệ';
        hasError = true;
    }

    if (intro === '') {
        introError.textContent = 'Vui lòng nhập mô tả';
        hasError = true;
    }

        return !hasError;
    }
});

// categories
document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('addCateForm');

    form.addEventListener('submit', function (event) {
        var isValid = validateCateForm();

        if (!isValid) {
            event.preventDefault();
        }
    });

    function validateCateForm() {
        var name = document.getElementById('name').value;
        var nameError = document.getElementById('nameError');

        // Reset thông báo lỗi
        nameError.textContent = '';

        var hasError = false;

        // Thêm điều kiện kiểm tra và hiển thị thông báo lỗi
        if (name === '') {
            nameError.textContent = 'Vui lòng nhập Tên danh mục';
            hasError = true;
        }

        return !hasError;
    }
});

//product


    document.addEventListener('DOMContentLoaded', function () {
        var form = document.getElementById('addProductform');

        form.addEventListener('submit', function (event) {
            var isValid = validateProductForm();

            if (!isValid) {
                event.preventDefault();
            }
        });

        function validateProductForm() {
            var name = document.getElementById('name').value.trim();
            var price = document.getElementById('price').value.trim();
            var price_sale = document.getElementById('price_sale').value.trim();
            var intro = document.getElementById('intro').value.trim();

            var nameError = document.getElementById('nameError');
            var priceError = document.getElementById('priceError');
            var price_saleError = document.getElementById('price_saleError');
            var introError = document.getElementById('introError');

            // Reset thông báo lỗi
            nameError.textContent = '';
            priceError.textContent = '';
            price_saleError.textContent = '';
            introError.textContent = '';

            var hasError = false;

            // Thêm điều kiện kiểm tra và hiển thị thông báo lỗi
            if (name === '') {
                nameError.textContent = 'Vui lòng nhập Tên sản phẩm';
                hasError = true;
            }

            if (price === '') {
                priceError.textContent = 'Vui lòng nhập giá sản phẩm';
                hasError = true;
            }

            if (price_sale !== '' && (isNaN(price_sale) || parseFloat(price_sale) < 0 || parseFloat(price_sale) >= 100)) {
                price_saleError.textContent = 'Vui lòng nhập giảm giá hợp lệ';
                hasError = true;
            }

            if (intro === '') {
                introError.textContent = 'Vui lòng nhập mô tả';
                hasError = true;
            }

            return !hasError;
        }
    });

