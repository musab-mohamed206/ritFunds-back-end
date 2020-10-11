<div class="page">
  <table class="center" width="100%">
  <tr>
  <!-- Hide image -->
  <!-- <td style="text-align:right;">
  <img height="45" src="logo/logo3_png" />
  </td> -->

  <td style="text-align:left" width="255" height="100">

  </td>
  </tr>
  </table>


  <style>
  td { height: 25px !important;}
  body { font-size: 9pt; font-weight:950; }
  </style>
  <div style="height:200px;"></div>

  <table class="border">
    <tr class="ys_title_h">
      <td class="ys_title_h" colspan="2">بيانات توضيح اسم العميل و مالك العقار </td>
    </tr>
    <tr>
      <td class="ys_title ">الرقم الداخلي </td>
      <td class="ys_title2">{{$taqeem->taqeemid}}</td>
    </tr>
    <tr>
      <td class="ys_title ">تاريخ التكليف </td>
      <td class="ys_title2">{{$taqeem->taqeem_date}}</td>
    </tr>
    <tr>
      <td class="ys_title ">رقم الطلب </td>
      <td class="ys_title2">{{$taqeem->id}}</td>
    </tr>
    <tr>
      <td class="ys_title ">اسم العميل </td>
      <td class="ys_title2">{{$taqeem->taqeem_cusname}}</td>
    </tr>
    <tr>
      <td class="ys_title ">اسم مالك العقار</td>
      <td class="ys_title2">{{$taqeem->id}}</td>
    </tr>
    <tr>
      <td class="ys_title "> نوع العقار </td>
      <td class="ys_title2">
          {{$taqeem->name}}
      </td>
    </tr>
    <tr>
      <td class="ys_title ">المدينة </td>
      <td class="ys_title2">
          {{$taqeem->taqeem_basic_city}}
      </td>
    </tr>
    <tr>
      <td class="ys_title">الحي </td>
      <td class="ys_title2">
          {{$taqeem->taqeem_basic_town}}
      </td>
    </tr>
    <tr>
      <td class="ys_title ">رقم القطعة </td>
      <td class="ys_title2">{{$taqeem->taqeem_gen_qtahno}}</td>
    </tr>
    <tr>
      <td class="ys_title ">رقم المخطط </td>
      <td class="ys_title2">{{$taqeem->taqeem_gen_mkhtatno}}</td>
    </tr>
  </table>
</div>

<div class="page">
  <table class="center" width="100%">
    <tr>
      <td style="text-align:right;">
        <!-- hide image <img height="45" src="logo/logo3_png.png" /> -->
      </td>

      <td style="text-align:left" width="255">
        <table class="border">
          <tr>
            <td>الرقم الداخلي</td>
            <td>{{$taqeem->taqeemid}}</td>
          </tr>
          <tr>
            <td>رقم التكليف</td>
            <td>{{$taqeem->taqeem_orderno}}</td>
          </tr>
          <tr>
            <td>تارخ التكليف</td>
            <td>{{$taqeem->taqeem_date}}</td>
          </tr>
          <tr>
            <td>اسم العميل</td>
            <td>{{$taqeem->taqeem_cusname}}</td>
          </tr>
          <tr>
            <td>صلاحية التقيم</td>
            <td>شهرين من تاريخ التقييم</td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

  <p style="font-size: 15px; color: #242a30;">السادة / {{$taqeem->taqeem_cusname}}<br/>
  بالإشارة إلى تكليفنا بتقييم العقار المؤرخ في {{$taqeem->taqeem_date}} ورقم {{$taqeem->taqeemid}}   نرفق لكم فيما يلي نتيجة معاينة وتقييم
        وذالك علي النحو التالي :
  </p>

  <table class="border">
    <tr>
      <td class="ys_title">رقم الصك</td>
      <td class="ys_title">تاريخه</td>
      <td class="ys_title">رقم الفسح</td>
      <td class="ys_title">تاريخه</td>
      <td class="ys_title">عمر المبنى</td>
      <td class="ys_title">نوع المبنى</td>
      <td class="ys_title">شاغرية العقار</td>
    </tr>
    <tr>
      <td>{{$taqeem->taqeem_basic_sakkno}}</td>
      <td>{{$taqeem->taqeem_basic_sakkdated}}</td>
      <td>{{$taqeem->taqeem_basic_fs7no}}</td>
      <td>{{$taqeem->taqeem_basic_fs7date}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
    </tr>
  </table>
  <div style="height:10px;"></div>
  
  <table class="border">
    <tr class="ys_title_h">
      <td colspan="9">بيانات أساسية عن العقار</td>
    </tr>
    <tr>
      <td class="ys_title">الموقع</td>
      <td class="ys_title">المدينة</td>
      <td>{{$taqeem->taqeem_basic_city}}</td>
      <td class="ys_title">الحي</td>
      <td> {{$taqeem->taqeem_basic_town}}</td>
      <td class="ys_title">رقم المخطط</td>
      <td>{{$taqeem->taqeem_gen_mkhtatno}}</td>
      <td class="ys_title">اقطعة</td>
      <td>{{$taqeem->taqeem_gen_qtahno}}</td>
    </tr>
    <tr>
      <td class="ys_title" rowspan="2">حدود العقار</td>
      <td class="ys_title">شمال</td>
      <td>{{$taqeem->taqeem_gen_7dn}}</td>
      <td class="ys_title">بطول</td>
      <td>{{$taqeem->taqeem_gen_7dnl}}</td>
      <td class="ys_title" >شرق</td>
      <td>{{$taqeem->taqeem_gen_7de}}</td>
      <td class="ys_title">بطول</td>
      <td>{{$taqeem->taqeem_gen_7del}}</td>
    </tr>
    <tr>
      <td class="ys_title" >جنوب</td>
      <td>{{$taqeem->taqeem_gen_7ds}}</td>
      <td class="ys_title">بطول</td>
      <td>{{$taqeem->taqeem_gen_7dsl}}</td>
      <td class="ys_title" >غرب</td>
      <td> {{$taqeem->taqeem_gen_7dw}}</td>
      <td class="ys_title">بطول</td>
      <td>{{$taqeem->taqeem_gen_7dw1}}</td>
    </tr>
  </table>

  <div style="height:10px;"></div>
  <table class="border">
    <tr>
        <td class="ys_title">نطاق العقار</td>
        <td class="ys_title">نوع العقار</td>
        <td class="ys_title">الشوارع مسفلته</td>
        <td class="ys_title">الشوارع مضاءة</td>
        <td class="ys_title">الخدمات</td>
        <td class="ys_title">تصميم معماري</td>
        <td class="ys_title">المنسوب</td>
        <td class="ys_title">حالة المبنى</td>
    </tr>
    <tr>
      <td>
        <input type="checkbox"/> داخل النطاق
      </td>
      <td>
        <input type="checkbox"/> سكني
      </td>
      <td>
        <input type="checkbox"/> نعم 
      </td>
      <td>
        <input type="checkbox"/> نعم 
      </td>
      <td>
        <input type="checkbox"/> مياه
      </td>
      <td>
        <input type="checkbox"/> ممتاز
      </td>
      <td>
        <input type="checkbox"/> مرتفع
      </td>

      <td>
        <input type="checkbox"/> ممتاز
      </td>
    </tr>
    <tr>
      <td><input type="checkbox"/> المرحلة الأولى
      </td>
      <td>
      <input type="checkbox"/> تجاري
      </td>
      <td>
        <input type="checkbox"/> لا
      </td>
      <td>
        <input type="checkbox"/> لا
      </td>

      <td>
        <input type="checkbox"/> هاتف
      </td>
      <td>
        <input type="checkbox"/> جيد
      </td>
      <td>
        <input type="checkbox"/> مستوي
      </td>
      <td>
          <input type="checkbox"/> جيد جدا
      </td>
    </tr>
    <tr>
      <td>
        <input type="checkbox"/> المرحلة الثانية
      </td>
      <td>
        <input type="checkbox"/> سكني تجاري
      </td>
      <td></td>
      <td></td>
      <td>
      <input type="checkbox"/> كهرباء
      </td>
      <td>
      <input type="checkbox"/> رديئ
      </td>
      <td>
        <input type="checkbox"/> منخفض
      </td>
      <td>
        <input type="checkbox"/> جيد
      </td>
    </tr>
    <tr>	
      <td>
        <input type="checkbox"/> خارج النطاق
      </td>
      <td>
        <input type="checkbox"/> زراعي
          
      </td>
      <td></td>
      <td></td>
      <td>
        <input type="checkbox"/> صرف
      </td>
      <td></td>
      <td></td>
      <td>
        <input type="checkbox"/> رديئ
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input type="checkbox"/> صناعي
      </td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
        <td class="ys_title">اقرب شارع تجاري</td>
        <td colspan="2">{{$taqeem->id}}</td>
        <td class="ys_title">علي بعد</td>
        <td >{{$taqeem->id}}</td>
        <td class="ys_title">الجار مبني</td>
        <td colspan="2">
          <input type="checkbox"/> مبني | <input type="checkbox"/> غير مبني
        </td>
      </tr>
      <tr>
        <td class="ys_title">نوع المبنى</td>
        <td colspan="2">{{$taqeem->id}}</td>
        <td class="ys_title">رقم المبنى</td>
        <td colspan="4">{{$taqeem->id}}</td>
      </tr>
  </table>

  <div style="height:10px;"></div>



  <table class="border">
    <tr class="ys_title_h">
      <td colspan="8">وصف تشطيبات العقار والاعمال الانشائية</td>
    </tr>
    <tr class="ys_title">
      <td colspan="4">نوع الواجهات</td>
      <td colspan="4">نوع الارضيات</td>
    </tr>
    <tr>
      <td class="ys_title">شمالية</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">شرقية</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">الاحواش</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">المدخل</td>
      <td>{{$taqeem->id}}</td>
    </tr>
    <tr>
      <td class="ys_title">جنوبية</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">غربية</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">الاستقبال</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">الغرف</td>
      <td>{{$taqeem->id}}</td>
    </tr>
    <tr class="ys_title">
      <td>الهيكلالانشائي</td>
      <td>نوع الاسقف</td>
      <td colspan="4">يوجد بالمبنى</td>
      <td colspan="2">نوع التكيف</td>
    </tr>
    <tr> 
      <td>
        <input type="checkbox"/> خرساني
      </td>
      <td>
      <input type="checkbox"/> كمرات خشبية
      </td>
      <td>
        <input type="checkbox"/> كراج كهربائي
      </td>
      <td>
        <input type="checkbox"/> بوابات
      </td>
      <td>
        <input type="checkbox"/> مصاعد
      </td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">مركزي</td>
      <td>{{$taqeem->id}}</td>
    </tr>

    <tr>
      <td><input type="checkbox"/> حوائط حاملة</td>
      <td><input type="checkbox"/> خرسانة مسلحة</td>
      <td>
        <input type="checkbox"/> سلالم
      </td>
      <td>
        <input type="checkbox"/> حوائط مزدوجة
      </td>
      <td>
        <input type="checkbox"/> حمام عربي
      </td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">شباك</td>
      <td>{{$taqeem->id}}</td>
    </tr>
    <tr>
      <td><input type="checkbox"/> مباني معدنية</td>
      <td><input type="checkbox"/> كمرات حديدية</td>
      <td>
        <input type="checkbox"/> إضاءة مخفية
      </td>
      <td>
        <input type="checkbox"/> زجاج مزدوج
      </td>
      <td>
        <input type="checkbox"/> حمام إفرنجي
      </td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">منفصل</td>
      <td>{{$taqeem->id}}</td>
    </tr>
    <tr>
      <td><input type="checkbox"/> مباني خشبية</td>
      <td></td>
      <td colspan="2">
        <input type="checkbox"/> جبس بالسقف
      </td>
      <td>
        <input type="checkbox"/> سخانات
      </td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">صحراوي</td>
      <td>{{$taqeem->id}}</td>
    </tr>
  </table>

  <div style="height:10px;"></div>
  <table class="border">
      <tr class="ys_title_h">
        <td colspan="6">خدمات الكهرباء و المياه بالمبنى</td>
      </tr>
      <tr>
        <td class="ys_title">الكهرباء</td>
        <td class="ys_title">عدد العدادات</td>
        <td class="checkbox2">{{$taqeem->id}}</td>
        <td class="ys_title">ارقم العدادات</td>
        <td class="checkbox2" colspan="2">{{$taqeem->id}}</td>
      </tr>
      <tr>
        <td class="ys_title">المياه</td>
        <td class="ys_title">عدد العدادات</td>
        <td>{{$taqeem->id}}</td>
        <td class="ys_title">ارقم العدادات</td>
        <td colspan="2">{{$taqeem->id}}</td>
      </tr>
      <tr>
        <td class="ys_title">تم اطلاق التيار</td>
        <td colspan="5">{{$taqeem->id}}</td>
      </tr>
    </table>

  <div style="height:10px;"></div>

  <style>
    td { height: 31px !important;}
  </style>

  <div style="height:105px;"></div>

  <table class="border">
    <tr class="ys_title_h">
      <td class="ys_title_h" colspan="4" >تقويم الاراضي و المباني</td>
      <td class="ys_title_h" colspan="5" >في حالة تقويم عمارة سكنية او تجارية يتم تحديد</td>
    </tr>
    <tr>
      <td class="ys_title">الاستعمال</td>
      <td class="ys_title">المساحة م2</td>
      <td class="ys_title">سعر المتر</td>
      <td class="ys_title">الاجمالي</td>
      <td class="ys_title">عدد الشقق</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">اجارها</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}} ريال</td>
    </tr>
    <tr>
      <td>مساحة الارض</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">عدد المحلات</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">اجارها</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}} ريال</td>
    </tr>
    <tr>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td> {{$taqeem->id}}</td>
      <td class="ys_title">عدد المكاتب</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title">اجارها</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}} ريال</td>
    </tr>
    
    <tr>
      <td>الدور الارضي</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title" colspan="3">اجمالي الاجارات السنوية للعقار</td>
      <td>{{$taqeem->id}}</td>
      <td> ريال سعودي</td>
    </tr>
    <tr>
      <td>الدور الاول</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td class="ys_title" colspan="3">نسبة الدخل</td>
      <td>{{$taqeem->id}}</td>
      <td>بالمائة</td>
    </tr>
    <tr>
      <td>الدور المتكرر</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td colspan="5">هل العقار بة بعض التشطيبات لم تكتمل او يحتاج صيانة او به شقوق ؟</td>
    </tr>
    <tr>
      <td>الملحق الأرضي</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td><input type="checkbox"  /> لا | <input type="checkbox"  /> نعم </td>
      <td colspan="4">في حالة الاجابة بنعم يتم التوضيح</td>
    </tr>
    <tr>
      <td> الملحق العلوي</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td rowspan="6" colspan="5">{{$taqeem->id}}</td>
    </tr>
      <tr>
      <td>الاسوار</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
    </tr>
      <tr>
      <td>المسبح</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
    </tr>
      <tr>
      <td>الحديقة</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
    </tr>
      <tr>
      <td>مواقف سيارات</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
    </tr>
      <tr>
      <td>اخرى</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
      <td>{{$taqeem->id}}</td>
    </tr>
    <tr>
      <td>اجمالي تكاليف المباني</td>
      <td colspan="2">{{$taqeem->id}}</td>
      <td>ريال</td>
      <td colspan="2">الحد اﻷدنى للعقار</td>
      <td colspan="2">{{$taqeem->id}}</td>
      <td>ريال</td>
    </tr>
    <tr>
      <td>اجمالي قيمة الارض</td>
      <td colspan="2">{{$taqeem->id}}</td>
      <td>ريال</td>
      <td colspan="2">الحد اﻷعلى للعقار</td>
      <td colspan="2">{{$taqeem->id}}</td>
      <td>ريال</td>
    </tr>
    <tr>
      <td>الاجمالي</td>
      <td colspan="2">{{$taqeem->id}}</td>
      <td>ريال سعودي</td>
      <td colspan="2">تكاليف الصيانة التقديرية</td>
      <td colspan="2">{{$taqeem->id}}</td>
      <td>ريال</td>
    </tr>
      <tr>
      <td>القيمة كتابة</td>
      <td colspan="8">{{$taqeem->id}}</td>
    </tr>
  </table>
</div>