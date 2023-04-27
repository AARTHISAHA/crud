<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/all.css">
    <link rel="stylesheet" href="./css/data.css">
</head>
<style>
    .nxt{
        display:none;
    }
    .nxt_act{
        display:block;
        margin-left:50px;
        align-items:center;
    }
    /* .nxt_1{
        display:none;
    }
    .nxt_act1{
        display:block;
        margin-left:50px;
    } */

</style>
<body>
    <div class="container">
        <div class="header ">
            <span class="indicator active"></span>
            <span class="indicator"></span>
            <span class="indicator"></span>

            <div class="content">
                <div class="content__box visible__no-animation step-1">
                    <div class="title">
                        <h5>Step 1</h5>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <div class="row">
                                <label for="exampleFormControlInput1" class="form-label my-3">The Profile is
                                    For?</label>
                                <div class="row my-3">

                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group" name="button" id="button">
                                        <div class="col-xl-4 ">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1"
                                                autocomplete="off" onclick="show1()">
                                            <label class="btn btn-outline-primary op_1" for="btnradio1">My Self</label>
                                        </div>
                                        <div class="col-xl-4 ">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2"
                                                autocomplete="off" onclick="show2()">
                                            <label class="btn btn-outline-primary op_2" for="btnradio2">My Sister</label>
                                        </div>
                                        <div class="col-xl-4 ">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3"
                                                autocomplete="off" onclick="show3()">
                                            <label class="btn btn-outline-primary op_3" for="btnradio3">My
                                                Brother</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row my-3">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <div class="col-xl-4 float-end">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio4"
                                                autocomplete="off" onclick="show4()">
                                            <label class="btn btn-outline-primary op_4" for="btnradio4">My Friend</label>
                                        </div>
                                        <div class="col-xl-4">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio5"
                                                autocomplete="off" onclick="show5()">
                                            <label class="btn btn-outline-primary op_5" for="btnradio5">My
                                                Daughter</label>
                                        </div>
                                        <div class="col-xl-4">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio6"
                                                autocomplete="off" onclick="show6()">
                                            <label class="btn btn-outline-primary op_6" for="btnradio6">My Son</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" id="button-1" class="submit-button btn btn-primary nxt ">Next</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content__box step-2">
                    <div class="title">
                        <h5>Step 2</h5>
                    </div>

                    <div class="body text-center">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label ">Gender</label>
                            <div class="row my-3">
                                <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                    <div class="col-xl-4 ">
                                        <input type="radio" class="btn-check" name="btnradios" id="btnradios7"
                                            autocomplete="off" onclick="show7()">
                                        <label class="btn btn-outline-primary op_7" for="btnradios7">Male</label>
                                    </div>
                                    <div class="col-xl-4 ">
                                        <input type="radio" class="btn-check" name="btnradios" id="btnradios8"
                                            autocomplete="off" onclick="show8()">
                                        <label class="btn btn-outline-primary op_8" for="btnradios8">Female</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" id="button-2" class="submit-button btn btn-primary nxt">Next</button>
                        </div>
                    </div>
                </div>
                <div class="content__box step-3">
                    <div class="title">
                        <h5>Step 3</h5>
                    </div>
                    <div class="body">
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" name="dob" id="dob" required>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Address</label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St" required>
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">Address 2</label>
                                <input type="text" class="form-control" name="address2" id="address2"
                                    placeholder="Apartment, studio, or floor" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">City</label>
                                <input type="text" class="form-control" name="city" id="city" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">State</label>
                                <select id="inputState" class="form-select"name="state" id="state"  required>
                                    <option selected>Choose...</option>
                                    <option>Tamilnadu</option>
                                    <option>Kerala</option>
                                    <option>Andhrapredesh</option>
                                    <option>Assam</option>
                                    <option>Karnataka</option>
                                    <option>Madhya Predesh</option>
                                    <option>Goa</option>
                                    <option>Gujrat</option>
                                    <option>Telangana</option>
                                    <option>Sikkim</option>
                                    <option>Odisha</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Zip</label>
                                <input type="text" class="form-control" name="zip" id="zip" required>
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" name="box" type="checkbox" id="box">
                                    <label class="form-check-label" for="gridCheck" required>
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <!-- <div class="col-12">
                              <button type="submit" class="btn btn-primary">Sign in</button>
                            </div> -->
                        </form>
                        <div>
                            <button type="submit" id="button-3" class="submit-button btn btn-primary"><a
                                    href="./matrimony.php" class="text-white fw-bold" name="submit" id="submit" >Submit</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="./js/jquery.js"></script>
    <script src="./jquery/jquery.js"></script>
    <script src="./jquery/jquery.validate.js"></script>

    <script src="./js/multi.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/all.js"></script>


<script>
$(document).ready(function(){

$(".op_1, .op_2, .op_3, .op_4, .op_5, .op_6, .op_7, .op_8").click(function(){
    // $(".nxt").css('display','block');
    $(".nxt").addClass("nxt_act");
    // alert("hii");

    
});






});
</script>






</body>

</html>