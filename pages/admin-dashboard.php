<?php

require '../config/dbcon.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login-admin.php");
    exit();
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <script src="../assets/js/admin-dashboard.js" defer></script>

    <style>
        html,
        body {
            max-width: 100%;
            overflow-x: hidden;
            height: 100vh;
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }
    </style>
</head>

<body>
    <div class="table m-0 p-0 ">
        <div class="row mx-5 my-3">
            <div class="col-12">
                <div class="row">
                    <div class="col-8">
                        <h1 class="text-start">Admin Dashboard (kulang pa nung multiplier)</h1>
                    </div>
                    <div class="col-4 text-end">
                        <button id="quit-btn" class="btn btn-danger">Quit Button</button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 text-primary">
                        <h4>Add winner</h4>
                    </div>
                    <div class="col-sm-6">
                        <label for="type" class="form-label">Type of Sports <span class="text-danger" title="required" style="cursor: pointer;">*</span></label>
                        <select name="" id="type" class="form-select">
                            <option value="none" selected disabled>Select A Sport</option>
                            <option value="Combat">Combat Sports</option>
                            <option value="Racket">Racket Sports</option>
                            <option value="Ball">Ball Sports</option>
                            <option value="Mind">Mind & E-Sports</option>
                        </select>
                    </div>

                    <div class="col-sm-6 d-none" id="category-div">
                        <label for="category" class="form-label">Category <span class="text-danger" title="required" style="cursor: pointer;">*</span></label>
                        <select name="" id="category" class="form-select">
                            <option value="none" selected disabled>Select A Category</option>
                        </select>
                    </div>

                    <div id="winners-div" class="d-none">
                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12">
                            <h3>Gold <span class="text-danger" title="required" style="cursor: pointer;">*</span></h3>
                            <div class="d-flex ">
                                <label for="gold-winner" class="form-label pe-2">1st</label>
                                <select name="" id="gold-winner" class="form-select gold-winner">
                                    <option value="none" selected disabled>Select Winner</option>
                                    <option value="1">CA</option>
                                    <option value="2">COED</option>
                                    <option value="3">CET</option>
                                    <option value="4">CM</option>
                                    <option value="5">DRT</option>
                                    <option value="6">BTVC</option>
                                    <option value="7">FFHNAS</option>
                                    <option value="8">IAS</option>
                                    <option value="9">ICS</option>
                                    <option value="10">IVM</option>
                                </select>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 col-md-6">
                                    <label for="gold-participant1" class="form-label">Participant 1:</label>
                                    <input type="text" placeholder="(Optional)" class="form-control" id="gold-participant1">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="gold-participant2" class="form-label">Participant 2:</label>
                                    <input type="text" placeholder="(Optional)" class="form-control" id="gold-participant2">
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12">
                            <h3>Silver <span class="text-danger" title="required" style="cursor: pointer;">*</span></h3>
                            <div class="d-flex">
                                <label for="silver-winner" class="form-label pe-2">2nd:</label>
                                <select name="" id="silver-winner" class="form-select silver-winner">
                                    <option value="none" selected disabled>Select Winner</option>
                                    <option value="1">CA</option>
                                    <option value="2">COED</option>
                                    <option value="3">CET</option>
                                    <option value="4">CM</option>
                                    <option value="5">DRT</option>
                                    <option value="6">BTVC</option>
                                    <option value="7">FFHNAS</option>
                                    <option value="8">IAS</option>
                                    <option value="9">ICS</option>
                                    <option value="10">IVM</option>
                                </select>
                            </div>
                            <div class="row mt-2">
                                <div class="col-12 col-md-6">
                                    <label for="silver-participant1" class="form-label">Participant 1:</label>
                                    <input type="text" placeholder="(Optional)" class="form-control" id="silver-participant1">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="silver-participant2" class="form-label">Participant 2:</label>
                                    <input type="text" placeholder="(Optional)" class="form-control" id="silver-participant2">
                                </div>
                            </div>

                        </div>

                        <div class="col-12">
                            <hr>
                        </div>
                        <div class="col-12">
                            <div class="row mt-2">
                                <div class="d-flex flex-row justify-content-between">
                                    <div>
                                        <h3>Bronze</h3>
                                    </div>
                                    <div>
                                        <button class="btn btn-success" id="add-another-silver">Add Another Silver</button>
                                        <button class="btn btn-secondary d-none" id="remove-another-silver">Remove Another Silver</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="d-flex">
                                        <label for="bronze-winner" class="form-label pe-2">3rd:</label>
                                        <select name="" id="bronze-winner" class="form-select bronze-winner">
                                            <option value="none" selected disabled>Select Winner</option>
                                            <option value="1">CA</option>
                                            <option value="2">COED</option>
                                            <option value="3">CET</option>
                                            <option value="4">CM</option>
                                            <option value="5">DRT</option>
                                            <option value="6">BTVC</option>
                                            <option value="7">FFHNAS</option>
                                            <option value="8">IAS</option>
                                            <option value="9">ICS</option>
                                            <option value="10">IVM</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label for="bronze-participant1" class="form-label">Participant 1:</label>
                                        <input type="text" placeholder="(Optional)" class="form-control" id="bronze-participant1">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label for="bronze-participant2" class="form-label">Participant 2:</label>
                                        <input type="text" placeholder="(Optional)" class="form-control" id="bronze-participant2">
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="col-12" id="additional-silver">

                        </div>

                        <div>
                            <hr>
                        </div>
                        <div class="col-12 text-end ">
                            <button class="btn btn-success fs-3" id="save-btn">Save Changes</button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>