<?php include 'include/header.php' ?>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h2 class="text-center fw-bolder">Even & Odd</h2>
                    </div>
                    <div class="card-body">
                        <form action="?page=get-series" method="post">



                            <div class="row">
                                <label for="firstValue" class="col-md-3">First Number</label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="Enter Value " name="first_value">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="lastValue" class="col-md-3">Second Number </label>
                                <div class="col-md-9">
                                    <input type="number" class="form-control" placeholder="Enter value" name="last_value">
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="" class="col-md-3">Option</label>
                                <div class="col-md-9">
                                    <label for=""><input type="radio" name="option" value="even"> Even </label>
                                    <label for=""><input type="radio" name="option" value="odd"> Odd </label>
                                    <label for=""><input type="radio" name="option" value="add-series"> Add of Series </label>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <label for="totalValue" class="col-md-3">Total Values</label>
                                <div class="col-md-9">
                                    <textarea type="number" class="form-control" rows="5" readonly><?php echo isset($totalValue) ? $totalValue : '' ?>
                                    </textarea>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="">
                                    <input type="submit" class="btn btn-success col-md-12 rounded-0" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'include/footer.php' ?>