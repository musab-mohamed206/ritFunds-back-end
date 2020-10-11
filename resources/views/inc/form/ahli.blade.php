<table class="center" width="100%">
    <tr>
        <td style="text-align:right;">
            <img height="55" src="logo/logo3_png.png" />
        </td>
        <td style="text-align:left" width="255">
            <table class="border">
                <tr>
                    <td>الرقم الداخلي</td>
                    <td>{{$taqeem->id}}</td>
                </tr>
                <tr>
                    <td>تاريخ التكليف</td>
                    <td>{{$taqeem->taqeem_orderno}}</td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table class="border">
    <tr class="ys_title_h">
        <td colspan="4">بيانات الملكية و العميل</td>
    </tr>
    <tr>
        <td class="ys_title">رقم التقرير</td>
        <td>{{$taqeem->id}}</td>
        <td class="ys_title">صلاحية التقيم</td>
        <td>شهرين من تاريخ التقييم</td>
    </tr>
    
    <tr>
        <td class="ys_title">اسم المالك</td>
        <td>{{$taqeem->taqeem_cusname}}</td>
        <td rowspan="2" class="ys_title">ملاحظات هامة</td>
        <td rowspan="2" class="ys_title4" width="343px">####</td>
    </tr>
    
    <tr>
        <td class="ys_title">اسم العميل</td>
        <td>{{$taqeem->taqeem_client_customer}}</td>
    </tr>
</table>

<style>
    body { font-size: 8pt; font-weight:950; }
</style>
    
<table class="border">
    <tr class="ys_title_h">
        <td colspan="8">بيانات الملكية و العميل</td>
    </tr>
    <tr>
        <td class="ys_title">نوع العقار</td>
        <td>{{$taqeem->type['name']}}</td>
        <td class="ys_title">رقم الصك</td>
        <td>{{$taqeem->taqeem_basic_sakkno}}</td>
        <td class="ys_title">تاريخه</td>
        <td>{{$taqeem->taqeem_basic_sakkdate}}</td>
        <td class="ys_title">كتابة العدل</td>
        <td>###</td>
    </tr>
    <tr>
        <td class="ys_title">تصريح البناء</td>
        <td>{{$taqeem->taqeem_basic_fs7no}}</td>
        <td class="ys_title">تاريخة</td>
        <td>{{$taqeem->taqeem_basic_fs7date}}</td>
        <td class="ys_title">حالة المبنى</td>
        <td>{{$property->propertyScope['name']}}</td>
        <td class="ys_title">شاغريته</td>
        <td>{{$property->vacantPropety['name']}}</td>
    </tr>
    
    <tr>
        <td class="ys_title">عمر العقار</td>
        <td>###</td>
        <td class="ys_title">رقم فرار الذرعة</td>
        <td>{{$taqeem->taqeem_user_defined017}}</td>
        <td class="ys_title">تاريخه</td>
        <td colspan="3">{{$taqeem->taqeem_user_defined018}}</td>
    </tr>
</table>
    
<table class="border">
    <tr class="ys_title_h">
        <td colspan="11">البيانات الأساسية</td>
    </tr>
    <tr class="ys_title">
        <td colspan="2">الموقع</td>
        <td colspan="4">حدود العقار</td>
        <td>الموقع العام</td>
        <td>نوع العقار</td>
        <td>التصميم المعماري</td>
        <td>المنسوب</td>
        <td>الخدمات</td>
    </tr>
    
    <tr>
        <td>المدينة</td>
        <td>{{$taqeem->city['loc_city_name']}}</td>
        <td>شمالاً</td>
        <td>{{$taqeem->taqeem_gen_7dn}}</td>
        <td>طول</td>
        <td>{{$taqeem->taqeem_gen_7dnl}}</td>
        <td>
            <input type="checkbox" {{ ( $property->property_scope) == '5' ? 'checked="checked"' : '' }} />
            داخل النطاق
        </td>
        <td>
            <input type="checkbox" {{ ( $property->property_type) == '6' ? 'checked="checked"' : '' }} /> 
            سكني
        </td>
        <td><input type="checkbox" checked="checked"/> رديئ</td>
        <td>
            <input type="checkbox" {{ ( $property->attributed) == '10' ? 'checked="checked"' : '' }} />
            مرتفع
        </td>
        <td>
            <input type="checkbox" {{ ( $property->water) == '1' ? 'checked="checked"' : '' }} />
            مياه
        </td>
    </tr>
    <tr>
        <td>الحي</td>
        <td>{{$taqeem->town['loc_town_name']}}</td>
        <td>جنوباً</td>
        <td>{{$taqeem->taqeem_gen_7ds}}</td>
        <td>طول</td>
        <td>{{$taqeem->taqeem_gen_7dsl}}</td>
        <td><input type="checkbox" checked="checked"/> المرحلة الأولى</td>
        <td><input type="checkbox" checked="checked"/> تجاري</td>
        <td><input type="checkbox" checked="checked"/> جيد</td>
        <td><input type="checkbox" checked="checked"/> مستوي</td>
        <td>
            <input type="checkbox" {{ ( $property->telephone) == '1' ? 'checked="checked"' : '' }} />
            هاتف
        </td>
    </tr>
    <tr>
        <td>رقم المخطط</td>
        <td>{{$taqeem->taqeem_gen_mkhtatno}}</td>
        <td>شرقاً</td>
        <td>{{$taqeem->taqeem_gen_7de}}</td>
        <td>طول</td>
        <td>{{$taqeem->taqeem_gen_7del}}</td>
        <td><input type="checkbox" checked="checked"/> المرحلة الثانية</td>
        <td><input type="checkbox" checked="checked"/> سكني تجاري</td>
        <td><input type="checkbox" checked="checked"/> ممتاز</td>
        <td><input type="checkbox" checked="checked"/> منخفض</td>
        <td>
            <input type="checkbox" {{ ( $property->electricity) == '1' ? 'checked="checked"' : '' }} />
            كهرباء
        </td>
    </tr>
    <tr>
        <td>رقم القطعة</td>
        <td>{{$taqeem->taqeem_gen_qtahno}}</td>
        <td>غرباً</td>
        <td>{{$taqeem->taqeem_gen_7dw}}</td>
        <td>طول</td>
        <td>{{$taqeem->taqeem_gen_7dwl}}</td>
        <td><input type="checkbox" checked="checked"/> خارج النطاق</td>
        <td><input type="checkbox" checked="checked"/></td>
        <td></td>
        <td><input type="checkbox" checked="checked"/> مائل</td></td>
        <td>
            <input type="checkbox" {{ ( $property->sanitation) == '1' ? 'checked="checked"' : '' }}/>
            صرف
        </td>
    </tr>
        
    <tr>
        <td class="ys_title">اسم المخطط</td>
        <td>{{$taqeem->taqeem_gen_mkhtatno}}</td>
        <td class="ys_title">الشوارع</td>
        <td colspan="3"><input type="checkbox" {{ ( $property->streets_paved) == '14' ? 'checked="checked"' : '' }} /> مسفلتة | <input type="checkbox" {{ ( $property->streets_paved) != '14' ? 'checked="checked"' : '' }} /> غير مسفلتة</td>
        <td class="ys_title">أقرب شارع</td>
        <td colspan="4">'### على بعد ### متر</td>
    </tr>
</table>
    
<table class="border">
    <tr class="ys_title_h">
        <td colspan="9">وصف تشطيبات العقار والأعمال الإنشائية</td>
        </tr>
        <tr class="ys_title">
        <td colspan="2">نوع الواجهات</td>
        <td colspan="2">نوع الأرضيات</td>
        <td colspan="2">مميزات العقار</td>
        <td>نوع التكييف</td>
        <td>الهيكل الإنشائي</td>
        <td>نوع الأسقف</td>
    </tr>
    
    <tr>
        <td>الشمالية</td>
        <td>{{$finish->northernFacade['name']}}</td>
        <td>الأحواش</td>
        <td>{{$finish->groundFloor['name']}}</td>
        <td>
            <input type="checkbox" {{ ($finish->double_wall) == '1' ? 'checked="checked"' : '' }} /> حوائط مزدوجة
        </td>
        <td>
            <input type="checkbox" {{ ($finish->electric_garage) == '1' ? 'checked="checked"' : '' }} /> سلالم
        </td>
        <td>
            <input type="checkbox" {{ ($finish->central_adaptation) == '1' ? 'checked="checked"' : '' }} /> مركزي
        </td>
        <td>
            <input type="checkbox" {{ ($finish->structural_structure) == '' ? 'checked="checked"' : '' }} /> خرساني
        </td>
        <td>
            <input type="checkbox" {{ ($finish->type_of_bishop) == '26' ? 'checked="checked"' : '' }} /> خرسانة مسلحة
        </td>
    </tr>
    
    <tr>
        <td>الغربية</td>
        <td>{{$finish->southFacade['name']}}</td>
        <td>الإستقبال</td>
        <td>{{$finish->receptionFloor['name']}}</td>
        <td>
            <input type="checkbox" {{ ($finish->double_glass) == '1' ? 'checked="checked"' : '' }} /> زجاج مزدوج
        </td>
        <td>
            <input type="checkbox" {{ ($finish->electric_garage) == '1' ? 'checked="checked"' : '' }} /> كراج كهربائي
        </td>
        <td>
            <input type="checkbox" {{ ($finish->separate_adaptation) == '1' ? 'checked="checked"' : '' }} /> منفصل
        </td>
        <td>
            <input type="checkbox" {{ ($finish->structural_structure) == '' ? 'checked="checked"' : '' }} /> حوائط حاملة
        </td>
        <td>
            <input type="checkbox" {{ ($finish->type_of_bishop) == '' ? 'checked="checked"' : '' }} /> كمرات حديدية
        </td>
    </tr>
    
    <tr>
        <td>الشرقية</td>
        <td>{{$finish->easternFacade['name']}}</td>
        <td>المدخل</td>
        <td>{{$finish->entrancesFloor['name']}}</td>
        <td>
            <input type="checkbox" {{ ($finish->type_of_bishop) == '' ? 'checked="checked"' : '' }} /> جبس بالسقف
        </td>
        <td><input type="checkbox" checked="checked"/> كراج عادي</td>
        <td><input type="checkbox" {{ ($finish->adaptation_of_nets) == '1' ? 'checked="checked"' : '' }} /> شباك</td>
        <td>
            <input type="checkbox" {{ ($finish->structural_structure) == '' ? 'checked="checked"' : '' }} /> مباني معدنية
        </td>
        <td>
            <input type="checkbox" {{ ($finish->type_of_bishop) == '' ? 'checked="checked"' : '' }} /> كمرات خشبية
        </td>
    </tr>

    <tr>
        <td>الجنوبية</td>
        <td>{{$finish->southFacade['name']}}</td>
        <td>الغرف</td>
        <td>{{$finish->roomsFloor['name']}}</td>
        <td>
            <input type="checkbox" {{ ($finish->hidden_lighting) == '1' ? 'checked="checked"' : '' }} /> إضاءة مخفية
        </td>
        <td>
            <input type="checkbox" {{ ($finish->gates) == '1' ? 'checked="checked"' : '' }} /> بوابات
        </td>
        <td><input type="checkbox"/> مركب</td>
        <td>
            <input type="checkbox" {{ ($finish->structural_structure) == '' ? 'checked="checked"' : '' }} /> مباني خشبية
        </td>
        <td><input type="checkbox"/> أخرى</td>
    </tr>

    <tr>
        <td class="ys_title" colspan="2">الأبواب الخارجية</td>
        <td colspan="2">{{$finish->extrnalDoors['name']}}</td>
        <td><input type="checkbox" checked="checked"/> مصاعد (###)</td>
        <td><input type="checkbox" checked="checked"/> سخانات (###)</td>
        <td><input type="checkbox" /> غير مركب</td>
        <td></td>
        <td></td>
    </tr>
    
    <tr>
        <td class="ys_title" colspan="2">الأبواب الداخلية</td>
        <td colspan="2">{{$finish->interiorDoors['name']}}</td>
        <td><input type="checkbox" checked="checked"/> حمام عربي (###)</td>
        <td><input type="checkbox" checked="checked"/> حمام إفرنجي (###)</td>
        <td><input type="checkbox" /> توصيلات فقط</td>
        <td class="ys_title">نوع العزل</td>
        <td>{{$finish->typeInsulation['name']}}</td>
    </tr>
</table>
    
<table class="border">
    <tr>
        <td style="width:475px; vertical-align:top; padding:0;">
        <table class="border" style="border:none;" width="100%">
        <tr class="ys_title_h">
        <td colspan="11">تقييم الأراضي والمباني</td>
    </tr>
    <tr class="ys_title">
        <td width="105"></td>
        <td>الصالات</td>
        <td>معيشة</td>
        <td>نوم</td>
        <td>طعام</td>
        <td>مطابخ</td>
        <td>حمام</td>
        <td>مستودع</td>
        <td>المساحة بالمتر</td>
        <td>سعر المتر</td>
        <td>السعر الإجمالي</td>
    </tr>
    
    <tr>
        <td>الأرض</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>{{$taqeem->taqeem_value_land}}</td>
        <td>{{$price->land_price}}</td>
        <td>{{$price->land_total}}</td>
    </tr>
    <tr>
        <td>###</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>{{$price->basement}}</td>
        <td>{{$price->basement_price}}</td>
        <td>{{$price->basement_total}}</td>
    </tr>
    <tr>
        <td>الدور الأرضي</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>{{$price->ground_floor}}</td>
        <td>{{$price->ground_floor_price}}</td>
        <td>{{$price->ground_floor_total}}</td>
    </tr>
    <tr>
        <td>الدور الأول</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>{{$price->first_floor}}</td>
        <td>{{$price->first_floor_price}}</td>
        <td>{{$price->first_floor_total}}</td>
    </tr>
    <tr>
        <td>الدور المتكرر</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>{{$price->recurring_role}}</td>
        <td>{{$price->recurring_role_price}}</td>
        <td>{{$price->recurring_role_total}}</td>
    </tr>
    <tr>
        <td>الملحق الأرضي</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>{{$price->ground_annex}}</td>
        <td>{{$price->ground_annex_price}}</td>
        <td>{{$price->ground_annex_total}}</td>
    </tr>
    <tr>
        <td>الملحق العلوي</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>{{$price->top_attachment}}</td>
        <td>{{$price->top_attachment_price}}</td>
        <td>{{$price->top_attachment_total}}</td>
    </tr>
    <tr>
        <td>الأسوار</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>{{$price->fences}}</td>
        <td>{{$price->fences_price}}</td>
        <td>{{$price->fences_total}}</td> 
    </tr>
    <tr>
        <td>المسبح</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>###</td>
        <td>{{$price->swimming_pool}}</td>
        <td>{{$price->swimming_pool_price}}</td>
        <td>{{$price->swimming_pool_total}}</td>
    </tr>
    <tr>
        <td colspan="8"> إجمالي مساحة المباني </td>
        <td colspan="3">###</td>
    </tr>
    <tr>
        <td colspan="8">إجمالي تكاليف المباني</td>
        <td colspan="3">###</td>
    </tr>
    <tr>
        <td colspan="8">إجمالي تكاليف الأرض</td>
        <td colspan="3">###</td>
    </tr>
    <tr>
        <td colspan="8">اجمالي قيمة العقار بطريقة التكليف</td>
        <td colspan="3">###</td>
    </tr>
    <tr class="ys_title">
        <td colspan="11">التقييم النهائي</td>
    </tr>
    <tr>
        <td colspan="12" style=" font-weight:bold; font-size: 12pt;">سعر التقييم النهائي :(###) convert_number_to_words(###) ريال </td>
    </tr>
</table>
    
</td><td style="width:275px; vertical-align:top; padding:0;">
    
    <table class="border" style="border:none;" width="100%">
        
        <tr class="ys_title_h">
            <td colspan="4">خدمات الكهرباء والمياة بالمبنى</td>
        </tr>
        <tr>
            <td>عدد عدادات الكهرباء</td>
            <td>(###)</td>
            <td>عدد عدادات المياه</td>
            <td>(###)</td>
        </tr>
        <tr>
            <td>رقم العداد</td>
            <td>###</td>
            <td>رقم العداد</td>
            <td>###</td>
        </tr>
        <tr>
            <td colspan="4">في حالة وجود أكثر من عداد تكتب الأرقام وترفق مع التقييم</td>
        </tr>
        <tr class="ys_title_h">
            <td colspan="4">في حالة تقييم عمارة سكنية أو تجارية يتم تحديد</td>
        </tr>
        <tr>
            <td colspan="4">عدد الشقق (### ) إيجارها (###) ريال</td>
        </tr>
        <tr>
            <td colspan="4">عدد المحلات التجارية (###) إيجارها (###) ريال</td>
        </tr>
        <tr>
            <td colspan="4">إجمالي الإيجارات السنوية (###) ريال</td>
        </tr>
        <tr>
            <td colspan="2"><input type="checkbox" /> العقار مؤجر بالقيمة الموضحة أعلاه</td>
            <td colspan="2"><input type="checkbox" /> العقار جديد ومتوقع إيجاره كما هو موضح أعلاه</td>
        </tr>
        <tr class="ys_title_h">
            <td colspan="4">هل العقار به بعض التشطيبات لم تكتمل أو يحتاج لصيانة أو به شقوق</td>
        </tr>
        <tr>
            <td colspan="4"><input type="checkbox" checked="checked"/> لا | <input type="checkbox" checked="checked"/> نعم ، في حالة الإجابة بـ ( نعم ) يتم التوضيح</td>
        </tr>
        <tr>
            <td colspan="4">###</td>
        </tr>
        <tr>
        <td colspan="4">تكاليف الصيانة التقديرية (###) ريال</td>
        </tr>
        
    </table> 
</td>
</tr>
</table>