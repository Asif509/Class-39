<?php include 'include/header.php'?>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center fw-bolder">Add Student Form</h2>
                    </div>
                    <div class="card-body">
                        <form action="route.php?page=create-student" method="post" enctype="multipart/form-data">
                            <div class="row mt-2">
                                <label for="" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for="" class="col-md-4">Email</label>
                                <div class="col-md-8">
                                    <input type="email" name="email" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for="" class="col-md-4">Mobile</label>
                                <div class="col-md-8">
                                    <input type="text" name="mobile" class="form-control">
                                </div>
                            </div>


                            <div class="row mt-2">
                                <label for="" class="col-md-4">Image</label>
                                <div class="col-md-8">
                                    <input type="file" name="image" class="form-control">
                                </div>
                            </div>

                            <div class="row mt-2">
                                <label for="" class="col-md-4"></label>
                                <div class="col-md-8">
                                    <input type="submit"  class="btn btn-success" value="Save Student">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include 'include/footer.php'?>
