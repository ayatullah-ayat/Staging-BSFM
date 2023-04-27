<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .row {
            margin-right: -15px;
            margin-left: -15px;
        }

        /* Optional: Clearfix hack to fix float issues */
        .row::after {
            content: "";
            display: table;
            clear: both;
        }

        [class*="col-"] {
            float: left;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }

        .col-3 {
            width: 25%;
            float: left
        }

        .col-4 {
            width: 33.33333%;
            float: left
        }

        .col-5 {
            width: 41.66667%;
            float: left
        }

        .col-6 {
            width: 50%;
            float: left
        }

        .col-7 {
            width: 58.33333%;
            float: left
        }

        .col-8 {
            width: 66.66667%;
            float: left
        }

        .col-9 {
            width: 75%;
            float: left
        }

        .col-10 {
            width: 83.33333%;
            float: left
        }

        .col-11 {
            width: 91.66667%;
            float: left
        }

        .col-12 {
            width: 100%;
            float: left
        }

        .text-bold {
            font-weight: bold;
        }

        .office-address {
            font-size: 10px;
            font-family: 'barlow', sans-serif;
        }

        div,
        p,
        h1,
        h2,
        h3,
        h4,
        h5,
        tr,
        td {
            font-family: 'barlow', sans-serif;
        }
        .inv-fcolumn {
            font-size: 13px;
        }
        .text-center {
            text-align: center;
        }

        .text-right {
            text-align: right;
        }

        .ml-15 {
            margin-left: 15px;
        }

        .address-section {
            margin: 0 35px;
        }

        .bg-green {
            background-color: green;
        }

        .order-table {
            margin-top: 20px;
            margin-left: 25px;
            margin-right: 35px;
        }

        .table {
            width: 100%;
            margin-bottom: 18px;
            border-collapse: collapse;
        }

        .table thead tr td {
            font-size: 14px;
            font-weight: bold;
        }

        .table tbody tr td {
            font-size: 12px;
        }

        .overall-calculation {
            margin: 10px 70px;
        }
    </style>
</head>

<body>
    <htmlpageheader name="myheader">
        <div class="row">
            <div class="col-6">
                <img width="200px" height="50px" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Logo_TV_2015.svg" alt="Micromedia_Logo">
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div class="text-bold" style="font-size: 10px">HQ</div>
                        <div class="office-address">Anik Plaza, Level 8 & 9, House # 155, Block # A,
                            Section # 12, Mirpur, Dhaka-1212, Bangladesh
                            Hotline: +88 096 77 666 888
                        </div>
                    </div>
                    <div class="col-6" style="padding-top: 12px;">
                        <div style="font-size:12px">Vat Registration No.</div>
                        <div style="font-size:12px">003131714-0401</div>
                        <div class="text-bold">MUSHOK 6.3</div>
                    </div>
                </div>
            </div>
        </div>
    </htmlpageheader>

    <htmlpagefooter name="page-footer">
        <div class="footer">
            <div class="row">
                <div class="col-3" style="margin-left: 15px;">
                    <img height="48px" src="data:image/png;base64,{{ DNS1D::getBarcodePNG('5522235', 'I25+') }}" alt="barcode">
                </div>
                <div class="col-4" style="margin-left: 15px; line-height: 18px;">
                    <div style="font-size: 18px;">THANK YOU FOR CHOOSING US</div>
                    <div style="font-size: 9px;">YOUR FEEDBACK KEEPS US IMPROVING</div>
                    <div style="font-size: 12px;">info@micromediabd.com</div>
                </div>
                <div class="col-4" style="text-align: right;">
                    <div style="font-size: 11px;">VISIT US. micromediabd.com</div>
                    <div style="font-size: 12px;">SUPPORT. +88 096 77 666 888</div>
                </div>
            </div>
            <div class="text-bold" style="font-size: 10px; line-height: 16px; margin-top:5px">Return Policy</div>
            <div style="font-size: 10px; line-height: 16px;">1. If any defect is found (damaged/ defective/ wrong product) after opening the box, inform the FABRILIFE “Customer Relationship Management Department” (through inbox or
                hotline +8809677666888) as soon as possible along with a picture/ video proof. 2. Return process must be initiated within 3 days of receiving the parcel. 2. Product quality needs
                to be in the original condition. Products must not be used, worn, altered, or washed. 3. Fabrilife Box, Product hand tags, polybags, and the original invoice must be returned along
                with the products. 4. Exchange delivery cost may be applicable. 5. Promotional offers are not applicable for returned products.</div>
            <div style="font-size: 10px; line-height: 16px;">
                <span class="text-bold">Disclaimer:</span> This document & any information transmitted with it are confidential & intended solely for the use of the individual or entity to whom they are addressed. If you have
                received this document in error or are not the named addressee, you should not disseminate, distribute or copy this document. Please notify the author by replying to
                info@fabrilife.com and destroy this document
            </div>
            <div style="font-size: 10px; line-height: 16px;"><span class="text-bold">Copyright</span> &copy; 2023 Micromedia. All Rights Reserved</div>
        </div>
    </htmlpagefooter>
    <sethtmlpageheader name="myheader" value="on" show-this-page="1" />

    <div class="address-section">
        <div class="row">
            <div class="col-6">
                <div class="text-bold" style="font-size: 12px;">Delivery Address</div>
                <div class="text-bold" style="margin: 4px 0">TEST USER</div>
                <div style="font-size:small;">Test Address , Chuadanga</div>
                <div class="text-bold" style="margin-top:5px;">8 3 8 3 8 3 8 3 8 3</div>
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="col-6">
                        <div style="font-size: 28px; font-weight: bold;">Invoice</div>
                    </div>
                    <div class="col-6">_</div>
                    <div class="col-6 text-bold inv-fcolumn">Invoice ID:</div>
                    <div class="col-6" style="font-size:14px;">F20230409-LGIR-GC:</div>

                    <div class="col-6 text-bold inv-fcolumn" style="margin-top: 8px;">Date:</div>
                    <div class="col-6" style="font-size:14px;">2023-04-09</div>
                    
                    <div class="col-6 text-bold inv-fcolumn">Item Count:</div>
                    <div class="col-6" style="font-size:14px;">4</div>
                    
                    <div class="col-6 text-bold inv-fcolumn" style="margin-top: 8px;">Payment:</div>
                    <div class="col-6 text-bold" style="font-size:18px;">Cash On Delivery</div>
                    
                    <div class="col-6 text-bold inv-fcolumn">Payable:</div>
                    <div class="col-6 text-bold" style="font-size:18px;">BDT 2,500.0</div>
                    
                    <div class="col-12" style="margin-top: 15px;">
                        <img height="48px" src="data:image/png;base64,{{ DNS1D::getBarcodePNG('552223333335', 'I25+') }}" alt="barcode">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="order-table">
        <table class="table">
            <thead style="padding-bottom: 45px;">
                <tr>
                    <td width="5%">#</td>
                    <td width="45%" align="left">Product</td>
                    <td width="10%">Color</td>
                    <td width="10%">Size</td>
                    <td width="10%">Price</td>
                    <td width="10%">Qty</td>
                    <td width="10%">Total</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="7" style="height: 8px;"></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Fabrilife Mens Premium Designer Edition T Shirt - Memento</td>
                    <td>White</td>
                    <td>M</td>
                    <td>630.0</td>
                    <td>2</td>
                    <td>200</td>
                </tr>

                <tr>
                    <td colspan="7" style="height: 8px;"></td>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Fabrilife Mens Premium Designer Edition T Shirt - Memento</td>
                    <td>White</td>
                    <td>M</td>
                    <td>630.0</td>
                    <td>2</td>
                    <td>200</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="overall-calculation text-right" style="line-height: 28px;">
        <div class="text-bold" style="font-size: 14px;">Sub Total: BDT 2,400.0</div>
        <div style="font-size: small;">Shipping Fee: BDT 100.0</div>
        <div style="font-size: small;">Discount: BDT 0.0</div>
        <div style="line-height: 28px;margin-top: 8px;margin-bottom: 6px;">
            <div class="text-bold" style="font-size: 14px; line-height: 18px;">Total: BDT 2,500.0</div>
            <div style="font-size: small;line-height: 18px;">(Including VAT)</div>
        </div>
        <div style="font-size: small;">In Words: Two Thousand, Five Hundred Tk Only</div>
    </div>

    <sethtmlpagefooter name="page-footer" />
</body>

</html>