@extends('layouts.app')

@section('content')  
       <header>
       
       
         <div>
           <div>
            <figure>
                <div>
                 <p style="text-align: center; background-color: rgb(153, 149, 149);  border-radius: 3px; margin-right: 20px;">
                    <img src="image/InShot_20220623_003316194.jpg" alt="سایت خانه اجاره" width="100%" height="300" > 
    
                  
                       <!-- <img src="image/.jInShot_20220623_003316194pg" alt="سایت خانه اجاره" width="100%" height="300" > -->
               
                       
                          جستجو :  <input class="input"  type="text"  dir="rtl" placeholder="نام شهر، خیابان، قیمت...  "/>                    
                        
                 </p>
                </div>
                <div>
                 <h3   dir="rtl"   style="background-color: rgb(243, 91, 86);   width: 98%; 
                  height: 35px; margin-right: 20px; border-radius: 3px;" >
                   ثبت آگهی انواع آپارتمان و ساختمان و ارتباط سریع و آسان بین صاحب خانه و مستاجر
                  </h3> 
                </div>
                <div>
                  <nav class="nav">
                    <a href="">صفحه اصلی</a>
                    <a href="">ثبت آگهی</a>
                    <a href="">اخبار</a>
                    <a href="">درباره ما</a>
                    <a href="">ارتباط با ما</a>
               
                  </nav>
                </div>  
            </figure>
           </div>   
          </div>   
       </header>
       <h4   dir="rtl"   style="background-color: rgb(243, 91, 86);   width: 250px; 
                  height: 35px;  margin-right: 20px;" > 
                  جستجوی خانه برای اجاره
       </h4>           
       <select class="form-select"  style="width: 250px;  margin-right: 20px;  ">
        <option selected id="ostan">استان</option>
        <option ostan="1">تهران</option>
        <option ostan="2">یزد</option>
        <option ostan="3">مشهد</option>
        <option ostan="4">اصفهان</option>
        </select>
        <select class="form-select"  style="width: 250px; margin-right: 20px; ">
            <option selected id="shahr">شهر</option>
            <option shahr="1">یزد</option>
            <option shahr="2">بافق</option>
            <option shahr="3">مهریز</option>
            <option shahr="4">میبد</option>
        </select>
        <select class="form-select"  style="width: 250px;  margin-right: 20px;">
            <option selected id="khiaban">خیابان</option>
            <option khiaban="1">مناجات</option>
            <option khiaban="2">وحشی بافقی</option>
            <option khiaban="3">15 خرداد</option>
            <option khiaban="4">دارایی</option>
        </select>
        <select class="form-select" style="width: 250px;  margin-right: 20px;">
            <option selected id="metraj">متراژ</option>
            <option metraj="1">کمتر از 50 متر</option>
            <option metraj="2">بین 50 تا 150 متر </option>
            <option metraj="3"> بین 150 تا 300 متر</option>
            <option metraj="4">بیشتر از 300 متر</option>
        </select>
    
        <div style="width: 150px; height: 80px;  margin-right: 30px;">
            <div><P>طبقه</P></div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="t"  id="tabagh0"checked >
                <label class="form-check-label" for="tabagh0">
                  مهم نیست
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio"   name="t" id="tabagh1">
                <label class="form-check-label" for="tabagh1">
                  زیر زمین
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio"  name="t" id="tabagh2" >
                <label class="form-check-label" for="tabagh2">
                  همکف
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio"  name="t" id="tabagh3" >
                <label class="form-check-label" for="tabagh3">
                  طبقات بالا
                </label>
              </div>
        </div>
    
        <br>
        <br>
        <br>
        <div style="width: 150px; height: 80px; margin-right: 30px;">
            <div><P>اتاق</P></div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="o"  id="otagh0" checked >
                <label class="form-check-label" for="otagh0">
                  مهم نیست
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio"   name="o" id="otagh1">
                <label class="form-check-label" for="otagh1">
                  یک خوابه 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio"  name="o" id="otagh2" >
                <label class="form-check-label" for="otagh2">
                  دو خوابه
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio"  name="o" id="otagh3" >
                <label class="form-check-label" for="otagh3">
                  سه خوابه 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio"  name="o" id="otagh4" >
                <label class="form-check-label" for="otagh4">
                  چهار خوابه 
                </label>
              </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <div  style="width: 150px; height: 80px; margin-right: 30px;">
               <div><p>امکانات</p></div>
               <div class="form-check">
                <input class="form-check-input" type="checkbox"  id="sadeh" checked>
                <label class="form-check-label" for="sadeh">
                  مهم نیست
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="park">
                <label class="form-check-label" for="park">
                  پارکینگ 
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox"  id="asan" >
                <label class="form-check-label" for="asan">
                  آسانسور
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox"  id="anbar" >
                <label class="form-check-label" for="anbar">
                  انباری 
                </label>
              </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        
        <select class="form-select" style="width: 250px; margin-right: 20px; ">
            <option selected id="rahn">رهن</option>
            <option rahn="1">کمتر از 20 ملیون</option>
            <option rahn="2">بین 20 تا 80 ملیون</option>
            <option rahn="3">بین 80 تا 140 ملیون</option>
            <option rahn="4">بیشتر 140 ملیون</option>
        </select>
        <select class="form-select"  style="width: 250px;  margin-right: 20px;">
            <option selected id="eja">اجاره</option>
            <option eja="1">کمتر از 2 ملیون</option>
            <option eja="2">بین 2 تا 5 ملیون</option>
            <option eja="3">بین 5 تا 8 ملیون</option>
            <option eja="4">بیشتر 8 ملیون</option>
        </select>
        <br>
        <input type="checkbox" class="btn-check" id="search"  checked autocomplete="off">
        <label class="btn btn-primary" for="btn-check-2" style="width: 250px; margin-right: 20px;">جستجو</label>
    
    
        <center>
        <div style=" margin-right: 70px;">
            
            <h1  dir="rtl"   style="background-color: rgb(243, 91, 86);   width: 1150px; 
            height: 50px; margin-right: 90px; ">ثبت آگهی خانه</h1>
    
            <div>
                <form>
                    <div class="row">
                        <div class="col">
                            <select class="form-select"  style="width: 250px;  margin-right: 20px;  ">
                                <option selected id="ostan1">استان</option>
                                <option ostan1="1">تهران</option>
                                <option ostan1="2">یزد</option>
                                <option ostan1="3">مشهد</option>
                                <option ostan1="4">اصفهان</option>
                                </select>
    
                        </div>
                        <div class="col">
                            <select class="form-select"  style="width: 250px; margin-right: 20px; ">
                                <option selected id="shahr1">شهر</option>
                                <option shahr1="1">یزد</option>
                                <option shahr1="2">بافق</option>
                                <option shahr1="3">مهریز</option>
                                <option shahr1="4">میبد</option>
                            </select>
    
                        </div>
    
    
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">
                            <select class="form-select"  style="width: 250px;  margin-right: 20px;">
                                <option selected id="khiaban1">خیابان</option>
                                <option khiaban1="1">مناجات</option>
                                <option khiaban1="2">وحشی بافقی</option>
                                <option khiaban1="3">15 خرداد</option>
                                <option khiaban1="4">دارایی</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="form-select"  style="width: 250px;  margin-right: 20px;">
                                <option selected id="metraj1">متراژ</option>
                                <option metraj1="1">کمتر از 50 متر</option>
                                <option metraj1="2">بین 50 تا 150 متر </option>
                                <option metraj1="3"> بین 150 تا 300 متر</option>
                                <option metraj1="4">بیشتر از 300 متر</option>
                            </select>
    
                        </div>
    
                        
    
                    </div>
                    <br>
                    <br>
    
                    <div class="row">
                        <div class="col">
                            <div style="width: 150px; height: 80px;  margin-right: 150px;">
                                <div><P>طبقه</P></div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"   name="t" id="tabagh1">
                                    <label class="form-check-label" for="tabagh1">
                                      زیر زمین
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio"  name="t" id="tabagh2" >
                                    <label class="form-check-label" for="tabagh2">
                                      همکف
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio"  name="t" id="tabagh3" >
                                    <label class="form-check-label" for="tabagh3">
                                      طبقات بالا
                                    </label>
                                  </div>
                            </div>
                        </div>
                        <div class="col">
                            <div style="width: 150px; height: 80px;  margin-right: 30px;" >
                                <div><P>اتاق</P></div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"   name="o" id="otagh1">
                                    <label class="form-check-label" for="otagh1">
                                      یک خوابه 
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio"  name="o" id="otagh2" >
                                    <label class="form-check-label" for="otagh2">
                                      دو خوابه
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio"  name="o" id="otagh3" >
                                    <label class="form-check-label" for="otagh3">
                                      سه خوابه 
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio"  name="o" id="otagh4" >
                                    <label class="form-check-label" for="otagh4">
                                      چهار خوابه 
                                    </label>
                                  </div>
                            </div>
    
                        </div>
                        <div class="col">
                            <div  style="width: 150px; height: 80px; margin-right: 30px;">
                                <div><p>امکانات</p></div>
                               
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox" id="park">
                                 <label class="form-check-label" for="park">
                                   پارکینگ 
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox"  id="asan" >
                                 <label class="form-check-label" for="asan">
                                   آسانسور
                                 </label>
                               </div>
                               <div class="form-check">
                                 <input class="form-check-input" type="checkbox"  id="anbar" >
                                 <label class="form-check-label" for="anbar">
                                   انباری 
                                 </label>
                               </div>
                         </div>
                        </div>
                        
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">
                            <p>قیمت اجاره(ریال) :</p>
                        <input type="integer" id="eja1">
    
                        </div>
                        <div class="col">
                            <p>قیمت رهن(ریال) :</p>
                        <input type="integer" id="rahn1">
    
                        </div>
    
                    </div>
                    <div>
                        <p>توضیحات:</p>
                        <input type="text" id="tozih"  style=" width: 600px; height:80px "  >
        
                    </div>
                    <br>
                    <div>
                        <p>شماره تماس:</p>
                        <input type="text" id="tamas"   >
                    </div>
    
                    <br>
                    <br>
                    <button class="btn btn primary" style="width: 20%; height: 80px; margin-right: 50px;">ثبت</button>
                </form>
            </div>
    
    
        </div>
        </center>
@endsection