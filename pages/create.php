    <?php
    require __DIR__ . '/../inc/header.php';
    ?>

    <div class="row  d-flex justify-content-center w-100">
        <div class="col-md-10 text-center shadow-lg   mt-3">
            <h1 class="text-center my-4 h4 text-success">
                CREATE NEW POST
            </h1>
            <div class="row d-flex justify-content-center">
                <div class="col-md-6 ">
                    <form action="" method="post">
                        <div class="form-group my-3 text-center px-5">
                            <input type="text" name="title" class="form-control" id="" placeholder="Blog Title">
                        </div>

                        <div class="form-group my-3 text-center px-5">
                            <input type="file" name="image_name" id="" classname="form-control w-100" style="color:green;">
                        </div>

                        <div class="form-group my-3 text-center px-5">
                            <textarea name="" id="" cols="20" rows="10" name="content" placeholder="Enter Content Here" class="form-control"></textarea>
                        </div>
                        <div class="form-group my-3 text-center px-5">
                            <button type="submit" class="text-light btn btn-success w-100">
                                Create new post
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <?php
    require __DIR__ . '/../inc/footer.php';
    ?>