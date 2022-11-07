<!doctype html>
<html lang="en">
<head>
    <meta charset="urf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <!--bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="checkoutform.css">
    <title> POS sytem </title>
</head>
<body>
	<div class="modal_container_K" id="modal_container_K">
                <div class="modal_K"> 
                    <div class="tab-pane fade" id="pills-checkout" role="tabpanel" aria-labelledby="pills-checkout-tab"></div>
                        <h1>Check out</h1>
                        <div class="row mb-3">
                            <label for="colFormLabelLg" class="col-sm-4  col-form-label col-form-label-lg">Customer's Name</label>
                            <div class="col-sm-8">

                                <div class="row g-3">
                                    <div class="col">
                                    <input type="text" class="rounded-pill form-contro form-control-lg" placeholder="First name" aria-label="First name" id="fn">
                                    </div>
                                    <div class="col">
                                    <input type="text" class="rounded-pill form-contro form-control-lg" placeholder="Last name" aria-label="Last name" id="ln">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="colFormLabelLg" class="col-sm-4  col-form-label col-form-label-lg">Telephone's number</label>
                            <div class="col-sm-8">
                                <input type="tel" class="rounded-pill form-contro form-control-lg" id="telephonenumber" placeholder="phone">
                            </div>
                        </div>
                        <!--Amount of order-->
                        <div class="row  mb-3">
                            <label for="colFormLabelLg" class="col-sm-4  col-form-label col-form-label-lg">Total of amount($)</label>
                            <div class="col-sm-8">
                                <input type="number" step="0.01" class="rounded-pill form-contro l form-control-lg text-center" style="border:none; background: none;" id="amount" name="amount" placeholder="amount" disabled>
                            </div>
                        </div>
                        <!--Note-->
                        <div class="row  mb-3">
                            <label for="colFormLabelLg" class="col-sm-4  col-form-label col-form-label-lg">Note for this order</label>
                            <div class="col-sm-8">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Note</label>
                                </div>
                            </div>
                        </div>
                        <!--Payment button-->
                        <li>
                            <form action="./payment.html" method="post">
                                <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill" onclick="passValues();" >Payment</button>
                            </form>
                        </li>
                        <li>
                            <form>
                                <button id="closecheckout" type="submit" onclick="passValues();" class="btn btn-primary btn-lg w-100 rounded-pill">Cancel checkout</button>
                            </form>
                        </li>
                    </div>
                </div>
</body>