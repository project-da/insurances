<!DOCTYPE html>
<html>

<head>
    <title>Investment</title>

    <!-- Import bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <!-- Import jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <!-- Import popper.js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <!-- Import javascript cdn -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- CSS stylesheet -->
    <link rel="stylesheet" href="assets\css\compare.css">
</head>

<body>

    <!-- h-100 takes the full height of the body-->
    <div class="container-fluid h-100">

        <!-- h-100 takes the full height 
                 of the container-->
        <div class="row h-100">
            <div class="col-2" id="green">
                <img src="assets\images\Client-2.jpg" alt="Logo" class="images"><br>

                <span class="name mt-3"> </span>
                <hr>

                <span class="name mt-2"> <strong> Invested Amount per month </strong> </span><br><br>
                <!-- Navigation links in sidebar-->

                <form action="/compare" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="min" value="500">&nbsp;
                    <input type="text" name="max">&nbsp;
                    <input type="submit" class="view" value="edit">
                </form>

                <hr>
                <span class="inserted">Change to <a href="#" class="inserted">yearly.</a>
                    <!---->
                </span> <br />
                <br />
                <label class="pay">You pay for:</label><br>
                <select name="pay" id="pays">
                    <option value="10 Years">10 Years</option>
                    <option value="7 Years">7 Years</option>
                    <option value="5 Years">5 Years</option>
                    <option value="One Time">One Time</option>
                </select>
                <hr>
                <div class="irr_block">
                    <span>Show Absolute Return</span>
                    <label class="toggle"><input _ngcontent-hqh-c9="" class="toggle-checkbox ng-untouched ng-valid ng-dirty" type="checkbox">
                        <div class="toggle-switch"></div>
                    </label>
                    <br> <span>Show TaxAdjusted Return</span>
                    <label class="toggle"><input _ngcontent-hqh-c9="" class="toggle-checkbox ng-untouched ng-pristine ng-valid" type="checkbox">
                        <div class="toggle-switch"></div>
                    </label>
                </div>
                <hr>
                <div class="compare"> Compare FD &amp;
                    <br>Guaranteed Plans
                </div>
                <div class=">"> <button type="button" data-toggle="modal" data-target="#exampleModal">
                        {{ __('>') }}
                    </button>
                </div>
            </div>
            <div class="col-10" style="padding: 0;">

                <!-- Top navbar -->
                <nav class="navbar navbar-expand-lg 
                                navbar-light bg-primary">

                    <button type="button" class="plantype" data-toggle="modal" data-target="#exampleModal1">
                        Plan type
                        <select name="plan" id="plan">
                            <option value="100% Guaranteed"> 100% Guaranteed</a></option>

                        </select></button>

                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="exampleModalLabel">Plan Type:</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <ul class="a">
                                    <li> <a href="{{ route('compare') }}" class="buy_link"> 100% Guaranteed</a></li>
                                    <li> <a href="{{ route('marketlinked') }}" class="buy_link"> Market Linked</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <label class="navbar">Get money as:</label>
                    <select name="past" id="past">
                        <option value="All plans">All plans</option>
                        <option value="Lumpsum">Lumpsum</option>
                        <option value="Income for 10 Yrs"> Income for 10 Yrs</option>
                        <option value="Income for 25 Yrs">Income for 25 Yrs</option>
                        <option value="Income for lifetime">Income for lifetime</option>
                    </select>
                </nav><br><br>
                <div>
                    <div class="row">
                        <div class="col-md-11">
                            <table class="table table-stripped table-bordered">

                                <tbody>
                                    @foreach($list as $item)
                                    <tr>
                                        <td width="2%">{{$item->id}}</td>
                                        <td width="25%"><br> <img src="{{ asset('uploads/images/'. $item->image) }}" alt="images"> &emsp; {{ $item->name }}</td>
                                        <td width="4%"><br>YouGet<br> {{ $item->youGive }}</td>
                                        <td width="4%"><br>youGive <br>{{ $item->YouGet }}</td>
                                        <td width="5%"><br>
                                            <a href="invest/{{ $item->id }}" class="btn btn-primary btn-xs"> Get Details</a>
                                            <!--<button type="button"class="btn btn-sm btn-success" data-toggle="modal" >{{__('Details') }}</button>-->
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        <div class="col-md-1">
                            <div class="container">
                                <hr>
                                <div class="Advantage"><strong>Advantage</strong></div>
                                <hr><br>
                                <img class="get" src="assets\images\get_extra.jpg">
                                <label class="get">Buy Online and Get Extra</label>
                                <h6 class="matlab">Matlab zyada fayda</h6><br>
                                <img class="get" src="assets\images\download.jpg">
                                <label class="get">100% Calls Recorded</label>
                                <h6 class="matlab">Honest Selling</h6><br>
                                <img class="get" src="assets\images\download2.jpg">
                                <label class="get">No Hidden Charges</label>
                                <h6 class="matlab">Full Transparency</h6><br>
                                <img class="get" src="assets\images\certified3.jpg">
                                <label class="get">Certified Advisors</label>
                                <h6 class="matlab">Keeping Customer First</h6><br>
                                <img class="get" src="assets\images\download4.jpga">
                                <label class="get">One click easy refund</label>
                                <h6 class="matlab">Hassle Free</h6><br>
                                <hr><br>
                                <img class="bulb" src="assets\images\bulb.svg">
                                <strong class="sky">Interest Rates </strong> have <strong class="red"> Consistently Fallen</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; in the last 5 years
                                <br><br>
                                <img class="graph" src="assets\images\Graphs.svg"><br><Br><br>
                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" style="width:70%"> Know More</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Return Comparison</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div _ngcontent-ohd-c74="" class="inner_container">
                        <div _ngcontent-ohd-c74="" class="guaranteed-vs-fd_wrp">


                            <div _ngcontent-ohd-c74="" class="guaranteed-vs-fd_sub_heading"><span _ngcontent-ohd-c74="">vs</span>
                                <div _ngcontent-ohd-c74="" class="guaranteed_milestone_plan">Guaranteed Savings<br _ngcontent-ohd-c74="" class="ng-star-inserted">Plan

                                </div>
                                <div _ngcontent-ohd-c74="" class="guaranteed_fixed_deposits"> Fixed Deposits </div>
                            </div>
                            <div _ngcontent-ohd-c74="" class="guaranteed_investment">

                                <p _ngcontent-ohd-c74="" class="ng-star-inserted">Your Investment Over 10 Years</p>

                                <h2 _ngcontent-ohd-c74="">₹ 1.2 Lacs</h2>
                            </div>
                            <div _ngcontent-ohd-c74="" class="guaranteed_investment_head"> Returns You Get </div>
                            <div _ngcontent-ohd-c74="" class="guaranteed_investment_tax_free_wrp">
                                <div _ngcontent-ohd-c74="" class="guaranteed_investment_tax_free">
                                    <b _ngcontent-ohd-c74="" class="ng-star-inserted">5.85%</b>
                                    <span _ngcontent-ohd-c74="">Tax Free</span>
                                </div>
                                <div _ngcontent-ohd-c74="" class="guaranteed_investment_taxable"><b _ngcontent-ohd-c74="">5.4%</b><span _ngcontent-ohd-c74="">Taxable</span></div>
                            </div>
                            <div _ngcontent-ohd-c74="" class="guaranteed_investment_head"> Returns After Tax </div>
                            <div _ngcontent-ohd-c74="" class="guaranteed_investment_tax_free_wrp">
                                <div _ngcontent-ohd-c74="" class="guaranteed_investment_tax_free">
                                    <b _ngcontent-ohd-c74="" class="ng-star-inserted">5.85%</b>

                                </div>
                                <div _ngcontent-ohd-c74="" class="guaranteed_investment_returns_after_tax">
                                    <ul _ngcontent-ohd-c74="">
                                        <li _ngcontent-ohd-c74=""><b _ngcontent-ohd-c74="">4.96%</b></li>
                                        <li _ngcontent-ohd-c74=""><b _ngcontent-ohd-c74="">4.50%</b></li>
                                        <li _ngcontent-ohd-c74=""><b _ngcontent-ohd-c74="">4.03%</b></li>
                                    </ul>
                                    <ul _ngcontent-ohd-c74="" class="tax_slab"><span _ngcontent-ohd-c74="">Tax Slab</span>
                                        <li _ngcontent-ohd-c74="">
                                            <p _ngcontent-ohd-c74="">10%</p>
                                        </li>
                                        <li _ngcontent-ohd-c74="">
                                            <p _ngcontent-ohd-c74="">20%</p>
                                        </li>
                                        <li _ngcontent-ohd-c74="">
                                            <p _ngcontent-ohd-c74="">30%</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div _ngcontent-ohd-c74="" class="guaranteed_investment_head"> In Case Of Death Your Family Gets </div>
                            <div _ngcontent-ohd-c74="" class="guaranteed_investment_tax_free_wrp">
                                <div _ngcontent-ohd-c74="" class="guaranteed_investment_tax_free"><b _ngcontent-ohd-c74="" class="ng-star-inserted">₹ 1.2 L</b>

                                </div>
                                <div _ngcontent-ohd-c74="" class="guaranteed_investment_taxable"><b _ngcontent-ohd-c74="">Zero</b></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </table>
    </div>
    <!--- //Modelbox---->
    </div>
</body>

</html>