<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once('includes/meta.php') ?>

    <title>Create Blog | Ceasta</title>
</head>

<body>




    <?php include_once('includes/header.php') ?>
    <div class="d-flex main-layout show">
        <?php include_once('includes/sidebar.php') ?>


        <div class="main flex-grow-1">
            <div class="d-flex align-items-center justify-content-between">
                <h2>Create Blogs</h2>

            </div>
            <form class="mt-5">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/assets/js/script.js"></script>
</body>

</html>