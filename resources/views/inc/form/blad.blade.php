<div class="page">
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
            <td>{{$taqeem->taqeem_basic_sakkdate}}</td>
            <td>{{$taqeem->taqeem_basic_fs7no}}</td>
            <td>{{$taqeem->taqeem_basic_fs7date}}</td>
            <td>###</td>
            <td>{{$taqeem->type['name']}}</td>
            <td>{{$property->vacantPropety['name']}}</td>
        </tr>
    </table>
    <table class="border">
        <tr class="ys_title_h">
            <td colspan="9">بيانات أساسية عن العقار</td>
        </tr>
        <tr>
            <td class="ys_title">الموقع</td>
            <td class="ys_title">المدينة</td>
            <td>{{$taqeem->city['loc_city_name']}}</td>
            <td class="ys_title">الحي</td>
            <td>{{$taqeem->town['loc_town_name']}}</td>
            <td class="ys_title">رقم المخطط</td>
            <td>{{$taqeem->taqeem_gen_mkhtatno}}</td>
            <td class="ys_title">القطعة</td>
            <td>{{$taqeem->taqeem_gen_qtahno}}</td>
        </tr>
        <tr>
            <td class="ys_title" rowspan="2">حدود العقار</td>
            <td class="ys_title" >شمال</td>
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
            <td>{{$taqeem->taqeem_gen_7dw}}</td>
            <td class="ys_title">بطول</td>
            <td>{{$taqeem->taqeem_gen_7dwl}}</td>
        </tr>
    </table>
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
                <input type="checkbox" {{ ( $property->property_scope) == '5' ? 'checked="checked"' : '' }} />
                داخل النطاق
            </td>
            <td>
                <input type="checkbox" {{ ( $property->property_type) == '6' ? 'checked="checked"' : '' }} /> 
                سكني
            </td>
            <td>
                <input type="checkbox" {{ ( $property->streets_paved) == '14' ? 'checked="checked"' : '' }} />
                نعم 
            </td>
            <td>
                <input type="checkbox" {{ ( $property->streets_lit) == '15' ? 'checked="checked"' : '' }} />
                نعم 
            </td>
            <td>
                <input type="checkbox" {{ ( $property->water) == '1' ? 'checked="checked"' : '' }} />
                مياه
            </td>
            <td>
                <input type="checkbox" {{ ( $property->architectural_design) == '7' ? 'checked="checked"' : '' }} />
                ممتاز
            </td>
            <td>
                <input type="checkbox" {{ ( $property->attributed) == '10' ? 'checked="checked"' : '' }} />
                مرتفع
            </td>
            <td>
                <input type="checkbox" {{ ( $property->property_status) == '9' ? 'checked="checked"' : '' }}/>
                ممتاز
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" />
                المرحلة الأولى
            </td>
            <td>
            <input type="checkbox" />
            تجاري
            </td>
            <td>
                <input type="checkbox" />
                لا
            </td>
            <td>
                <input type="checkbox" />
                لا
            </td>
            <td>
                <input type="checkbox" {{ ( $property->telephone) == '1' ? 'checked="checked"' : '' }} />
                هاتف
            </td>
            <td>
                <input type="checkbox" />
                جيد
            </td>
            <td>
                <input type="checkbox" />
                مستوي
            </td>
            <td>
                <input type="checkbox" />
                جيد جدا
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" />
                المرحلة الثانية
            </td>
            <td>
                <input type="checkbox" />
                سكني تجاري
            </td>
            <td></td>
            <td></td>
            <td>
                <input type="checkbox" {{ ( $property->electricity) == '1' ? 'checked="checked"' : '' }} />
                كهرباء
            </td>
            <td>
                <input type="checkbox" />
                رديئ
            </td>
            <td>
                <input type="checkbox"/>
                منخفض
            </td>
            <td>
                <input type="checkbox" />
                جيد
            </td>
        </tr>
        <tr>	
            <td>
                <input type="checkbox" />
                خارج النطاق
            </td>
            <td>
                <input type="checkbox" />
                زراعي     
            </td>
            <td></td>
            <td></td>
            <td>
                <input type="checkbox" {{ ( $property->sanitation) == '1' ? 'checked="checked"' : '' }}/>
                صرف
            </td>
            <td></td>
            <td></td>
            <td>
                <input type="checkbox" />
                رديئ
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="checkbox" />
                صناعي
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
            <td colspan="2">{{$property->nearest_street}}</td>
            <td class="ys_title">علي بعد</td>
            <td>{{$property->after}}</td>
            <td class="ys_title">الجار مبني</td>
            <td colspan="2">
                <input type="checkbox" {{ ( $property->neighbor_built) == '16' ? 'checked="checked"' : '' }} /> مبني | <input type="checkbox" {{ ( $property->neighbor_built) != '16' ? 'checked="checked"' : '' }}/> غير مبني
            </td>
        </tr>
        <tr>
            <td class="ys_title">نوع المبنى</td>
            <td colspan="2">
                ####
            </td>
            <td class="ys_title">رقم المبنى</td>
            <td colspan="4">####</td>
        </tr>
    </table>
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
            <td>{{$finish->northernFacade['name']}}</td>
            <td class="ys_title">شرقية</td>
            <td>{{$finish->easternFacade['name']}}</td>
            <td class="ys_title">الاحواش</td>
            <td>{{$finish->groundFloor['name']}}</td>
            <td class="ys_title">المدخل</td>
            <td>{{$finish->entrancesFloor['name']}}</td>
        </tr>
        <tr>
            <td class="ys_title">جنوبية</td>
            <td>{{$finish->southFacade['name']}}</td>
            <td class="ys_title">غربية</td>
            <td>{{$finish->southFacade['name']}}</td>
            <td class="ys_title">الاستقبال</td>
            <td>{{$finish->receptionFloor['name']}}</td>
            <td class="ys_title">الغرف</td>
            <td>{{$finish->roomsFloor['name']}}</td>
        </tr>
        <tr>
            <td class="ys_title" >الأبواب الخارجية</td>
            <td>{{$finish->extrnalDoors['name']}}</td>
            <td class="ys_title" >الأبواب الداخلية</td>
            <td>{{$finish->interiorDoors['name']}}</td>
            <td class="ys_title">نوع العزل</td>
            <td colspan="3">{{$finish->typeInsulation['name']}}</td>
        </tr>
        
        <tr class="ys_title">
            <td>الهيكلالانشائي</td>
            <td>نوع الاسقف</td>
            <td colspan="4">يوجد بالمبنى</td>
            <td colspan="2">نوع التكيف</td>
        </tr>
        
        <tr> 
            <td>
                <input type="checkbox" {{ ($finish->structural_structure) == '' ? 'checked="checked"' : '' }} /> خرساني
            </td>
            <td>
                <input type="checkbox" {{ ($finish->type_of_bishop) == '' ? 'checked="checked"' : '' }} /> كمرات خشبية
            </td>
            <td>
                <input type="checkbox" {{ ($finish->electric_garage) == '1' ? 'checked="checked"' : '' }} /> كراج كهربائي
            </td>
            <td>
                <input type="checkbox" {{ ($finish->gates) == '1' ? 'checked="checked"' : '' }} /> بوابات
            </td>
            <td>
                <input type="checkbox" {{ ($finish->lifts) == '1' ? 'checked="checked"' : '' }} /> مصاعد
            </td>
            <td>###</td>
            <td class="ys_title">مركزي</td>
            <td>
                @if ($finish->central_adaptation == 1)
                    نعم
                @else
                    لا
                @endif
            </td>
        </tr>
    
        <tr>
            <td><input type="checkbox" {{ ($finish->structural_structure) == '' ? 'checked="checked"' : '' }} /> حوائط حاملة</td>
    
            <td><input type="checkbox" {{ ($finish->type_of_bishop) == '26' ? 'checked="checked"' : '' }} /> خرسانة مسلحة</td>
            <td>
                <input type="checkbox" {{ ($finish->electric_garage) == '1' ? 'checked="checked"' : '' }} /> سلالم
            </td>
            <td>
                <input type="checkbox" {{ ($finish->double_wall) == '1' ? 'checked="checked"' : '' }} /> حوائط مزدوجة
            </td>
            <td>
                <input type="checkbox" {{ ($finish->arabic_bath) == '1' ? 'checked="checked"' : '' }} /> حمام عربي
            </td>
            <td>###</td>
            <td class="ys_title">شباك</td>
            <td>
                @if ($finish->adaptation_of_nets == 1)
                    نعم
                @else
                    لا
                @endif
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" {{ ($finish->structural_structure) == '' ? 'checked="checked"' : '' }} /> مباني معدنية</td>
    
            <td><input type="checkbox" {{ ($finish->type_of_bishop) == '' ? 'checked="checked"' : '' }} /> كمرات حديدية</td>
            <td>
                <input type="checkbox" {{ ($finish->hidden_lighting) == '1' ? 'checked="checked"' : '' }} /> إضاءة مخفية
            </td>
            <td>
                <input type="checkbox" {{ ($finish->double_glass) == '1' ? 'checked="checked"' : '' }} /> زجاج مزدوج
            </td>
            <td>
                <input type="checkbox" {{ ($finish->lavatory_bath) == '1' ? 'checked="checked"' : '' }} /> حمام إفرنجي
            </td>
            <td>###</td>
            <td class="ys_title">منفصل</td>
            <td>
                @if ($finish->separate_adaptation == 1)
                    نعم
                @else
                    لا
                @endif
            </td>
        </tr>
        <tr>
            <td><input type="checkbox" {{ ($finish->structural_structure) == '' ? 'checked="checked"' : '' }} /> مباني خشبية</td>
                <td></td>
            <td colspan="2">
                <input type="checkbox" {{ ($finish->type_of_bishop) == '' ? 'checked="checked"' : '' }} /> جبس بالسقف
            </td>
            <td>
                <input type="checkbox" {{ ($finish->heaters) == '1' ? 'checked="checked"' : '' }}  /> سخانات</td>
            
            <td>###</td>
            <td class="ys_title">صحراوي</td>
            <td>
                @if ($finish->desert_adaptation == 1)
                    نعم
                @else
                    لا
                @endif
            </td>
        </tr>
    </table>
    <table class="border">
        <tr class="ys_title_h">
            <td colspan="6">خدمات الكهرباء و المياه بالمبنى</td>
        </tr>
        <tr>
            <td class="ys_title">الكهرباء</td>
            <td class="ys_title">عدد العدادات</td>
            <td class="checkbox2">{{$property->number_of_electricity_meters}}</td>
            <td class="ys_title">ارقم العدادات</td>
            <td class="checkbox2" colspan="2">{{$property->electricity_meter_numbers}}</td>
        </tr>
        <tr>
            <td class="ys_title">المياه</td>
            <td class="ys_title">عدد العدادات</td>
            <td class="checkbox2">{{$property->number_of_water_meters}}</td>
            <td class="ys_title">ارقم العدادات</td>
            <td class="checkbox2" colspan="2">{{$property->water_meter_numbers}}</td>
        </tr>
    </table>
</div>
<div class="page">
    <table class="border">
        <tr class="ys_title_h">
            <td class="ys_title_h" colspan="4">تقويم الاراضي و المباني</td>
            <td class="ys_title_h" colspan="5">في حالة تقويم عمارة سكنية او تجارية يتم تحديد</td>
        </tr>
        <tr>
            <td class="ys_title" >الاستعمال</td>
            <td class="ys_title">المساحة م2</td>
            <td class="ys_title">سعر المتر</td>
            <td class="ys_title">الاجمالي</td>
            <td class="ys_title">عدد الشقق</td>
            <td>###</td>
            <td class="ys_title  ">اجارها</td>
            <td>###</td>
            <td class="ys_title">ريال سعوي</td>
        </tr>
        <tr>
            <td>مساحة الارض</td>
            <td>{{$taqeem->taqeem_value_land}}</td>
            <td>{{$price->land_price}}</td>
            <td>{{$price->land_total}}</td>
            <td class="ys_title  ">عدد المحلات</td>
            <td>###</td>
            <td class="ys_title ">اجارها</td>
            <td>###</td>
            <td class="ys_title">ريال سعوي</td>
        </tr>
        <tr>
            <td>القبو</td>
            <td>{{$price->basement}}</td>
            <td>{{$price->basement_price}}</td>
            <td>{{$price->basement_total}}</td>
            <td class="ys_title">عدد المكاتب</td>
            <td>###</td>
            <td class="ys_title  ">اجارها</td>
            <td>###</td>
            <td class="ys_title">ريال سعوي</td>
        </tr>
        <tr>
            <td>الدور الارضي</td>
            <td>{{$price->ground_floor}}</td>
            <td>{{$price->ground_floor_price}}</td>
            <td>{{$price->ground_floor_total}}</td>
            <td class="ys_title" colspan="3">اجمالي الاجارات السنوية للعقار</td>
            <td>###</td>
            <td class="ys_title">ريال سعوي</td>
        </tr>
            <tr>
            <td>الدور الاول</td>
            <td>{{$price->first_floor}}</td>
            <td>{{$price->first_floor_price}}</td>
            <td>{{$price->first_floor_total}}</td>
            <td class="ys_title" colspan="3">نسبة الدخل</td>
            <td>###</td>
            <td class="ys_title">بالمائة</td>
        </tr>
            <tr>
            <td>الدور المتكرر</td>
            <td>{{$price->recurring_role}}</td>
            <td>{{$price->recurring_role_price}}</td>
            <td>{{$price->recurring_role_total}}</td>
            <td colspan="5">هل العقار بة بعض التشطيبات لم تكتمل او يحتاج صيانة او به شقوق ؟</td>  
        </tr>
        <tr>
            <td>الملحق الأرضي </td>
            <td>{{$price->ground_annex}}</td>
            <td>{{$price->ground_annex_price}}</td>
            <td>{{$price->ground_annex_total}}</td>
            <td ><input type="checkbox" checked="checked"/> لا | <input type="checkbox" checked="checked"/> نعم </td>
            <td class="ys_title" colspan="4">في حالة الاجابة بنعم يتم التوضيح</td>
            
        </tr>
            <tr>
            <td>الملحق العلوي</td>
            <td>{{$price->top_attachment}}</td>
            <td>{{$price->top_attachment_price}}</td>
            <td>{{$price->top_attachment_total}}</td>
            <td rowspan="8" colspan="5">###</td>
        </tr>
            <tr>
            <td>الاسوار</td>
            <td>{{$price->fences}}</td>
            <td>{{$price->fences_price}}</td>
            <td>{{$price->fences_total}}</td> 
        </tr>
            <tr>
            <td>المسبح</td>
            <td>{{$price->swimming_pool}}</td>
            <td>{{$price->swimming_pool_price}}</td>
            <td>{{$price->swimming_pool_total}}</td>
        </tr>
            <tr>
            <td>الحديقة</td>
            <td>{{$price->garden}}</td>
            <td>{{$price->garden_price}}</td>
            <td>{{$price->garden_total}}</td>
        </tr>
            <tr>
            <td>مواقف سيارات</td>
            <td>{{$price->parking}}</td>
            <td>{{$price->parking_price}}</td>
            <td>{{$price->parking_total}}</td>
        </tr>
        <tr>
            <td>اخرى</td>
            <td>{{$price->other}}</td>
            <td>{{$price->other_price}}</td>
            <td>{{$price->other_total}}</td>
        </tr>
            <tr> 
            <td class="ys_title">اجمالي تكاليف المباني</td>
            <td colspan="2">###</td>
            <td>ريال</td>
        </tr>
            <tr>
            <td class="ys_title">اجمالي قيمة الارض</td>
            <td colspan="2">{{$price->land_total}}</td>
            <td>ريال</td>
            
        </tr>
            <tr>
            <td class="ys_title">الاجمالي</td>
            <td colspan="2">{{$price->total}}</td>
            <td class="ys_title">ريال سعودي</td>
            <td colspan="2"> تكاليف الصيانة التقديرية</td>
            <td colspan="2">{{$price->estimated_maintenance_cost}}</td>
            <td class="ys_title">ريال</td>
        </tr>
            <tr>
            <td class="ys_title">القيمة كتابة</td>
            <td class="droid-arabic-naskh" colspan="8" style=" font-weight:bold; font-size: 9pt;">###</td>
        </tr>
    </table>
</div>