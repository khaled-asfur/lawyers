<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>الزبائن</title>
        <link rel="stylesheet" href="../css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../css/publicStyle.css"/>
        <link rel="stylesheet" href="../css/customers.css"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    </head>
    <body dir="rtl">
        
        <!--start header-->
        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                 
                <div class="navbar-header">
                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </button>
                    <a class="navbar-brand" href="#"><i class="fas fa-gavel"></i> نظام المحامين</a>
                    <img src="../image/2.jpeg" class="image-header" width="40px" height="40px" id="image-laywer">
                </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                          <li><a href="records.php">الجلسات</a></li>
                          <li><a href="caseEnded.html">القضايا المنتهية </a></li>
                          <li><a href="financial%20Records.html">الأمور المالية</a></li>
                          <li><a href="../php/Lowyer.php">المستخدمين</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">مرحبا بعودتك!
                                <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="material-icons">settings</i>الاعدادت</a></li>
                                      <li><a href="../php/logout.php "><i class="material-icons">&#xE314;</i>خروج</a></li>
                                    </ul>
                            </li>
                        </ul>
                    </div>
                  </div>
            </nav>
        </header>
        <!--end header-->
        
        <!--start section search-->
        <section class="sec-search">
            <div class="container text-center">
                <div class="row">
                    <div id="div1">lololol </div>
                    <form class="form-search">
                        <input type="text" placeholder="ادخل رقم الهوية او اسم العميل" name="search-name-Id" autocomplete="on"/>
                        <button class="btn btn-primary">ابحث<i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="row">
                    <form class="form-search">
                        <input type="text" placeholder="ادخل رقم القضية" name="search-numberCase" autocomplete="on"/>
                        <button class="btn btn-primary">ابحث<i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="row">
                    <button class="btn btn-primary" id="btn-addNewCustomer">اضافة عميل جديد<i class="fas fa-plus"></i></button>
                </div>
            </div>
        </section>
        <!--end section search-->
        
        <!--start section table--->
        <section class="sec-table">
            <div class="container">
                <table class="table-section table-bordered table-condensed table-hover">
                    <thead class="thead-light">
                        <th>#الرقم</th>
                        <th>الاسم </th>
                        <th>رقم الهوية</th>
                        <th>رقم القضية</th>
                        <th>تمت </th>
                        <th>الأحداث</th>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">#1</th>
                            <td><input type="text" value="احمد السيد" name="name-customer" /></td>
                            <td><input type="text" value="29785631" name="IdIdentifiction"/></td>
                            <td><input type="text" value="1" name="numberOfCase"/></td>
                            <td><button name="done" ><i class="fas fa-check-circle"></i></button></td>
                            <td class="actions">
                                <button type="button" class="btn btn-primary edit-button">
                                    <i class="fas fa-edit" style="margin-left:5px"></i>تعديل 
                                </button>
                                <button type="button" class="btn btn-info view-button">
                                    <i class="fas fa-eye" style="margin-legt:5px"></i>تفاصيل
                                </button>
                                <button type="button"  class="btn btn-danger delete-button">
                                    <i class="fas fa-trash-alt" style="margin-left:5px"></i>حذف
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#1</th>
                            <td><input type="text" value="احمد السيد" name="name-customer" /></td>
                            <td><input type="text" value="29785631" name="IdIdentifiction"/></td>
                            <td><input type="text" value="1" name="numberOfCase"/></td>
                            <td><button name="done" ><i class="fas fa-check-circle"></i></button></td>
                            <td class="actions">
                                <button type="button" class="btn btn-primary edit-button">
                                    <i class="fas fa-edit" style="margin-left:5px"></i>تعديل 
                                </button>
                                <button type="button" class="btn btn-info view-button">
                                    <i class="fas fa-eye" style="margin-left:5px"></i>تفاصيل
                                </button>
                                <button type="button"  class="btn btn-danger delete-button">
                                    <i class="fas fa-trash-alt" style="margin-left:5px"></i>حذف
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#1</th>
                            <td><input type="text" value="احمد السيد" name="name-customer" /></td>
                            <td><input type="text" value="29785631" name="IdIdentifiction"/></td>
                            <td><input type="text" value="1" name="numberOfCase"/></td>
                            <td><button name="done" ><i class="fas fa-check-circle"></i></button></td>
                             <td class="actions">
                                <button type="button" class="btn btn-primary edit-button">
                                    <i class="fas fa-edit" style="margin-left:5px"></i>تعديل 
                                </button>
                                <button type="button" class="btn btn-info view-button">
                                    <i class="fas fa-eye" style="margin-left:5px"></i>تفاصيل
                                </button>
                                <button type="button"  class="btn btn-danger delete-button">
                                    <i class="fas fa-trash-alt" style="margin-left:5px"></i>حذف
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">#1</th>
                            <td><input type="text" value="احمد السيد" name="name-customer" /></td>
                            <td><input type="text" value="29785631" name="IdIdentifiction"/></td>
                            <td><input type="text" value="1" name="numberOfCase"/></td>
                            <td><button name="done" ><i class="fas fa-check-circle"></i></button></td>
                            <td class="actions">
                                <button type="button" class="btn btn-primary edit-button">
                                    <i class="fas fa-edit" style="margin-left:5px"></i>تعديل 
                                </button>
                                <button type="button" class="btn btn-info view-button">
                                    <i class="fas fa-eye" style="margin-left:5px"></i>تفاصيل
                                </button>
                                <button type="button"  class="btn btn-danger delete-button">
                                    <i class="fas fa-trash-alt" style="margin-left:5px"></i>حذف
                                </button>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2">يظهر 3 من 10</td>
                            <td colspan="4" class="nextPrevoiusButton">
                            <button type="button" value="arrowLeft" id="arrowRight" class="btn btn-light" disabled><i class="fas fa-angle-double-right"></i></button>
                            <button type="button" value="1" class="btn btn-light" >1</button>
                            <button type="button" value="1" class="btn btn-light">2</button>
                            <button type="button" value="1" class="btn btn-light">3</button>
                            <button type="button" value="arrowLeft" id="arrowLeft" class="btn btn-light"><i class="fas fa-angle-double-left"></i></button>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </section>
        <!--end section table-->
        
        <!--start dialog add customers-->
        <section class="overlay sec-addcustomer" id="addsec">
                <div class="container">
                    <span class="close-btn"><i onclick="document.getElementById('addsec').style.display='none'" class="fa fa-window-close" aria-hidden="true"></i></span>
                    <div class="row text-center">
                        <form class="form-search">
                            <input type="text" placeholder="ادخل الاسم " name="search-by-name-customer"/>
                            <button class="btn btn-primary">ابحث<i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    <div class="row text-center">
                        <form class="form-search">
                            <input type="text" placeholder="ادخل رقم الهوية" name="search-by-IdIdentification-customer"/>
                            <button class="btn btn-primary">ابحث<i class="fas fa-search"></i></button>
                        </form>
                    </div>
                    
                    <div class="row">
                            <ul class="progressbar" id="progressbar">
                                <li class="active">الخطوة الأولى</li>
                                <li>الخطوة الثانية</li>
                                <li>الخطوة الثالثة</li>
                                <li>الخطوة الرابعة</li>
                            </ul>
                    </div>
                    
                    <div class="row">
                        <div class="form-devision">
                            <form action="" method="post">
                                
                                <fieldset>
                                    <h2 class="super-title">بيانات الزبون </h2>
                                    <h3 class="sub-title">من فضلك يجب ادخال كل البيانات الضرورية</h3>
                                    <input type="text" id="first-name-customer" value="" placeholder="الاسم الاول " required/>
                                    <input type="text" id="father-name-customer" value="" placeholder="اسم الأب " required/>
                                    <input type="text" id="grandfather-name-customer" value="" placeholder="اسم الجد " required/>
                                    <input type="text" id="family-name-customer" value="" placeholder="اسم العائلة" required/>
                                    <input type="text" id="identification-customer" value="" placeholder="رقم الهوية" required/>
                                    <input type="text" id="contact-number-customer" value="" placeholder="رقم الجوال"/>
                                    <input type="text"  id="address-customer" value="" placeholder="العنوان"/>
                                    <textarea id="note-about-customer" value="" placeholder="ملاحظات "></textarea>
                                    <button type="button" id="client_btn" class="btn btn-success next" >التالي </button>
                                </fieldset>
                                
                                <fieldset>
                                    <h2 class="super-title">تفاصيل الخصم </h2>
                                    <h3 class="sub-title">قم بادخال المعلومات الشخضية للخصم</h3>
                                    <input type="text" id="name-discount" value="" placeholder="اسم الخصم"/>
                                    <input type="text" id="number-discount" value="" placeholder="رقم الخصم"/>
                                    <input type="text" id="address-discount" value="" placeholder="عنوان الخصم"/>
                                    <textarea type="text" id="note-discount" value="" placeholder="ملاحظات "></textarea>
                                    <button type="button" class="btn btn-success previous">السابق</button>
                                    <button type="button" id="discount_btn" class="btn btn-success next" >التالي </button>
                                </fieldset>
                                
                                <fieldset>
                                    <h2 class="super-title">بيانات وكيل الخصم </h2>
                                    <h3 class="sub-title">قم بادخال بيانات وكيل الخصم</h3>
                                    <input type="text" id="agent-name" placeholder="اسم وكيل الخصم"/>
                                    <input type="text" id="number-agent" placeholder="رقم وكيل  الخصم"/>
                                    <input type="text" id="address-agent" placeholder="عنوان وكيل  الخصم"/>
                                    <textarea id="note-agent" placeholder="ملاحظات"></textarea>
                                    <button type="button" class="btn btn-success previous">السابق</button>
                                    <button type="button" id="discount_agent_btn" class="btn btn-success next" >التالي </button>
                                </fieldset>
                                
                                <fieldset>
                                    <h2 class="super-title">بيانات المحكمة </h2>
                                    <h3 class="sub-title">قم بادخال  بيانات المحكمة</h3>
                                    <input type="text" id="address-court" placeholder="عنوان المحكمة"/>
                                    <input type="text" id="number-session" placeholder="رقم القضية "/>
                                    <input type="text" id="name-court" placeholder="اسم المحكمة"/>
                                    <input type="text" id="theme-court" placeholder="موضوع الدعوى"/>
                                    <input type="text" id="value-court" placeholder="قيمة الدعوى"/>
                                    <input type="date" id="date-court" placeholder="تاريخ الدعوى"/>
                                    <button type="button" class="btn btn-success previous">السابق</button>
                                    <button type="submit" id="court_btn" class="btn btn-success submit">حفظ</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
        </section>
        <!--end dialog add customers-->
        
        <!--show details Dialog-->
        <section class="sec-show-details" >
            <div class="overlay" id="show-details">
                <div class="container">
                    <h1 class="super-title">تفاصيل القضية</h1>
                    <div class="close-icons">
                        <span>
                            <i onclick="document.getElementById('show-details').style.display='none'" class="fas fa-times"></i>
                        </span>
                    </div>
                    <div class="row">
                        <h2 class="title-section">بيانات الزبون</h2><hr>
                        <div class="info">
                            <label class="sub-title">اسم الزبون</label>
                            <input class="info-value" type="text" value="" name="name-customer"/>
                        </div>
                        <div class="info">
                            <label class="sub-title">رقم الجوال </label>
                            <input class="info-value" type="text" value="" name="number-customer"/>
                        </div>
                        <div class="info">
                            <label class="sub-title">رقم الهوية </label>
                            <input class="info-value" type="text" value="" name="Id-customer"/>
                        </div>
                        <div class="info">
                            <label class="sub-title">العنوان </label>
                            <input class="info-value" type="text" value="" name="address-customer"/>
                        </div>
                        <div class="info">
                            <label class="sub-title">ملاحظات  </label>
                            <textarea name="note-customer" placeholder="" class="info-value"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="title-section">تفاصيل الخصم </h2><hr>
                        <div class="info">
                            <label class="sub-title">اسم الخصم</label>
                            <input class="info-value" type="text" value="" name="name-dis"/>
                        </div>
                        <div class="info">
                            <label class="sub-title">رقم الخصم </label>
                            <input class="info-value" type="text" value="" name="number-dis"/>
                        </div>
                        <div class="info">
                            <label class="sub-title"> عنوان الخصم </label>
                            <input class="info-value" type="text" value="" name="address-dis"/>
                        </div>
                        <div class="info">
                            <label class="sub-title">ملاحظات  </label>
                            <textarea name="note-dis" placeholder="" class="info-value"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="title-section"> بيانات وكيل الخصم </h2><hr>
                        <div class="info">
                            <label class="sub-title">اسم وكيل الخصم</label>
                            <input class="info-value" type="text" value="" name="name-agent"/>
                        </div>
                        <div class="info">
                            <label class="sub-title">رقم  وكيل الخصم </label>
                            <input class="info-value" type="text" value="" name="number-agnet"/>
                        </div>
                        <div class="info">
                            <label class="sub-title"> عنوان  وكيل الخصم </label>
                            <input class="info-value" type="text" value="" name="address-agent"/>
                        </div>
                        <div class="info">
                            <label class="sub-title">ملاحظات  </label>
                            <textarea name="note-agent" placeholder="" class="info-value"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <h2 class="title-section">بيانات المحكمة </h2><hr>
                       <div class="info">
                            <label class="sub-title">اسم المحكمة</label>
                            <input class="info-value" type="text" value="" name="name-court"/>
                        </div>
                        <div class="info">
                            <label class="sub-title">عنوان المحكمة</label>
                            <input class="info-value" type="text" value="" name="address-court"/>
                        </div>
                        <div class="info">
                            <label class="sub-title">رقم القضية في المحكمة</label>
                            <input class="info-value" type="text" value="" name="value-court"/>
                        </div>
               
                        <div class="info">
                            <label class="sub-title"> موضوع الدعوى</label>
                            <input class="info-value" type="text" value="" name="theme-issue"/>
                        </div>
                        <div class="info">
                            <label class="sub-title">قيمة الدعوى</label>
                            <input class="info-value" type="text" value="" name="value-issue"/>
                        </div>
                            <div class="info">
                            <label class="sub-title">تاريخ الورود</label>
                            <input class="info-value" type="date" value="" name="date-agent"/>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>
        <!--end show details Dialog-->
        
        <!--start footer-->
        <footer>
            <span>
                copyRigth 2018 Medical Clinic.All rigth reserved
                <i class="fa fa-copyright"></i>
            </span>
        </footer>
        <!--end footer-->
    </body>
    <script src="../js/jquery-3.3.1.min.js"></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/nicescroll.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.10/js/all.js" integrity="sha384-slN8GvtUJGnv6ca26v8EzVaR9DC58QEwsIk9q1QXdCU8Yu8ck/tL/5szYlBbqmS+" crossorigin="anonymous"></script>
    <script src="../js/customer.js"></script>
</html>