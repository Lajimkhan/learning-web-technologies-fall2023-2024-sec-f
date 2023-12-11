<?php
$page_title = "Add Product";
?>

<section>
    <div class="layout-container">
        <div class="layout-row">
            <div class="form-area">
                <h3>Add Product</h3>
                <form action="#" method="post" id="product_form" enctype="multipart/form-data" onsubmit="addProduct(event)">

                    <label for="image_url">Upload Image</label><input type="file" name="image_url" id="image_url">
                    <label for="product_name">Product Name</label><input type="text" name="product_name" id="product_name">
                    <label for="description">Description</label><textarea name="description" id="description"></textarea>
                    <label for="price">Price</label><input type="text" name="price" id="price">

                    <p><?php if(isset($error_message)){echo $error_message;} ?></p>
                    <p><?php if(isset($success_message)){echo $success_message;} ?></p>

                    <input type="submit" value="Submit" name="submit">

                </form>
                <div id="show_message"></div>
            </div>
        </div>
    </div>
</section>

<script>
    // Adding product with AJAX
    function addProduct(event) {
        event.preventDefault();

        let image_url = document.getElementById('image_url').value;
        let product_name = document.getElementById('product_name').value;
        let description = document.getElementById('description').value;
        let price = document.getElementById('price').value;

        if (image_url == '' || product_name == '' || description == '' || price == '') {
            document.getElementById('show_message').innerHTML = '<p class="error_msg">All fields are required.</p>';
        } else {
            let formData = new FormData(document.getElementById('product_form'));

            formData.append('action', 'add_product');

            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', '../controller/productsController.php', true);

            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('show_message').innerHTML = this.responseText;
                    document.getElementById('image_url').value = '';
                    document.getElementById('product_name').value = '';
                    document.getElementById('description').value = '';
                    document.getElementById('price').value = '';

                }
            }

            xhttp.send(formData);
        }
    }
</script>
