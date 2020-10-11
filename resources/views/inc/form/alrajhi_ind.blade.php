<div class="page">
    <style>
        table { line-height: 0.99; }
    </style>
        
    <p style="color: #242a30; font-size: 10px;">السادة /## 
    نرفق لكم فيما يلي نتائج معاينة و تقيم العقار &#160;&nbsp;&nbsp;&nbsp;المحترمين  &#160;&nbsp;&nbsp;&nbsp;
    </p>

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
            <td><input type="checkbox" checked="checked"  /> 
            </td>
            <td></td>
            <td></td>
            <td>
                <input type="checkbox" {{ ( $property->sanitation) == '1' ? 'checked="checked"' : '' }}/>
                صرف
            </td>
        </tr>
        
        <tr>
            <td class="ys_title">الشوارع</td>
            <td colspan="5"><input type="checkbox" {{ ( $property->streets_paved) == '14' ? 'checked="checked"' : '' }} /> مسفلتة | <input type="checkbox" {{ ( $property->streets_paved) != '14' ? 'checked="checked"' : '' }} /> غير مسفلتة | <input type="checkbox" {{ ( $property->streets_lit) == '15' ? 'checked="checked"' : '' }} /> مضاءة | <input type="checkbox" {{ ( $property->streets_lit) != '15' ? 'checked="checked"' : '' }} /> غير مضاءة</td>
            <td class="ys_title">الجار</td>
            <td><input type="checkbox" {{ ( $property->neighbor_built) == '16' ? 'checked="checked"' : '' }} /> مبني | <input type="checkbox" {{ ( $property->neighbor_built) != '16' ? 'checked="checked"' : '' }} /> غير مبني</td>
            <td class="ys_title">أقرب شارع</td>
            <td colspan="2">{{$property->nearest_street}} على بعد {{$property->after}} متر</td>
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
            <td colspan="2">###</td>
            <td><input type="checkbox" checked="checked"/> مصاعد</td>
            <td><input type="checkbox" checked="checked"/> سخانات</td>
            <td><input type="checkbox" /> غير مركب</td>
            <td></td>
            <td></td>
        </tr>
        
        <tr>
            <td class="ys_title" colspan="2">الأبواب الداخلية</td>
            <td colspan="2">{{$finish->extrnalDoors['name']}}</td>
            <td><input type="checkbox" checked="checked"/> حمام عربي</td>
            <td><input type="checkbox" checked="checked"/> حمام إفرنجي</td>
            <td><input type="checkbox" /> توصيلات فقط</td>
            <td class="ys_title">نوع العزل</td>
            <td>{{$finish->typeInsulation['name']}}</td>
        </tr>
    </table> 
        
    <table class="border">
        <tr>
            <td style="width:375px; vertical-align:top; padding:0;">
                
                <table class="border" style="border:none;" width="100%">
                    <tr class="ys_title_h">
                        <td colspan="4">تقييم الأراضي والمباني</td>
                        </tr>
                        <tr class="ys_title">
                        <td></td>
                        <td>المساحة بالمتر</td>
                        <td>سعر المتر</td>
                        <td>الإجمالي</td>
                    </tr>
                    
                    <tr>
                        <td>الأرض</td>
                        <td>{{$taqeem->taqeem_value_land}}</td>
                        <td>{{$price->land_price}}</td>
                        <td>{{$price->land_total}}</td>
                    </tr>
                    <tr>
                        <td>القبو</td>
                        <td>{{$price->basement}}</td>
                        <td>{{$price->basement_price}}</td>
                        <td>{{$price->basement_total}}</td>
                    </tr>
                    <tr>
                        <td>###</td>
                        <td>{{$price->ground_floor}}</td>
                        <td>{{$price->ground_floor_price}}</td>
                        <td>{{$price->ground_floor_total}}</td>
                    </tr>
                    <tr>
                        <td>الدور الأول</td>
                        <td>{{$price->first_floor}}</td>
                        <td>{{$price->first_floor_price}}</td>
                        <td>{{$price->first_floor_total}}</td>
                    </tr>
                    <tr>
                        <td>الدور المتكرر</td>
                        <td>{{$price->recurring_role}}</td>
                        <td>{{$price->recurring_role_price}}</td>
                        <td>{{$price->recurring_role_total}}</td>
                    </tr>
                    <tr>
                        <td>الملحق الأرضي</td>
                        <td>{{$price->ground_annex}}</td>
                        <td>{{$price->ground_annex_price}}</td>
                        <td>{{$price->ground_annex_total}}</td>
                    </tr>
                    <tr>
                        <td>الملحق العلوي</td>
                        <td>{{$price->top_attachment}}</td>
                        <td>{{$price->top_attachment_price}}</td>
                        <td>{{$price->top_attachment_total}}</td>
                    </tr>
                    <tr>
                        <td>الأسوار</td>
                        <td>{{$price->fences}}</td>
                        <td>{{$price->fences_price}}</td>
                        <td>{{$price->fences_total}}</td> 
                    </tr>
                    <tr>
                        <td>الحديقة</td>
                        <td>{{$price->garden}}</td>
                        <td>{{$price->garden_price}}</td>
                        <td>{{$price->garden_total}}</td>
                    </tr>
                    <tr>
                        <td>المسبح</td>
                        <td>{{$price->swimming_pool}}</td>
                        <td>{{$price->swimming_pool_price}}</td>
                        <td>{{$price->swimming_pool_total}}</td>
                    </tr>
                    <tr>
                        <td>مواقف السيارات </td>
                        <td>{{$price->parking}}</td>
                        <td>{{$price->parking_price}}</td>
                        <td>{{$price->parking_total}}</td>
                    </tr>
                    <tr>
                        <td>أخرى</td>
                        <td>{{$price->other}}</td>
                        <td>{{$price->other_price}}</td>
                        <td>{{$price->other_total}}</td>
                    </tr>
                    <tr>
                        <td>اجمالي تكلفة المباني</td>
                        <td colspan="3">###</td>
                    </tr>
                    
                    <tr class="ys_title_h">
                        <td colspan="4">تفاصيل متعلقة بالعقار</td>
                    </tr>
                    <tr>
                    <td width="115px">العقار مأهول</td>
                        <td>###</td>
                        <td width="115px">العقار جاهز للسكن</td>
                        <td>{{$finish->propertyReady['name']}}</td>
                    </tr>
                    <tr>
                        <td>العقار مطابق لفسح البناء</td>
                        <td>###</td>
                        <td colspan="2">###</td>
                    </tr>
                    <tr>
                        <td>العقار مخالف لأنظمة البناء</td>
                        <td>###</td>
                        <td colspan="2">###</td>
                    </tr>
                    <tr>
                        <td>العقار سقف خرساني مسلح</td>
                        <td>###</td>
                        <td colspan="2">###</td>
                    </tr>
                
                </table>
        
            </td>
            <td style="width:375px; vertical-align:top; padding:0;">
        
                <table class="border" style="border:none;" width="100%">
                    <tr class="ys_title_h">
                        <td colspan="4">خدمات الكهرباء والمياة بالمبنى</td>
                    </tr>
                    <tr>
                        <td>عدد عدادات الكهرباء</td>
                        <td>({{$property->number_of_electricity_meters}})</td> 
                        <td>عدد عدادات المياه</td>
                        <td>({{$property->number_of_water_meters}})</td>
                    </tr>
                    <tr>
                        <td>رقم العداد</td>
                        <td>{{$property->electricity_meter_numbers}}</td>
                        <td>رقم العداد</td>
                        <td>{{$property->water_meter_numbers}}</td>
                    </tr>
                    <tr>
                        <td colspan="4">في حالة وجود أكثر من عداد تكتب الأرقام وترفق مع التقييم</td>
                    </tr>
                    <tr class="ys_title_h">
                        <td colspan="4">في حالة تقييم عمارة سكنية أو تجارية يتم تحديد</td>
                    </tr>
                    <tr>
                    <td class="ys_title">عدد الشقق</td>
                        <td>{{$rent->apartments_count}}</td>
                        <td class="ys_title">اجارها</td>
                        <td>{{$rent->apartments_actual_rent}}</td>  
                    </tr>
                    <tr>
                    <td class="ys_title">عدد المحلات</td>
                        <td>{{$rent->exhibitions_count}}</td>
                        <td class="ys_title">اجارها</td>
                        <td>{{$rent->exhibitions_actual_rent}}</td>
                    </tr>
                    <tr>
                    <td class="ys_title">عدد المكاتب</td>
                        <td>{{$rent->offices_count}}</td>
                        <td class="ys_title">اجارها</td>
                        <td>{{$rent->offices_actual_rent}}</td>    
                    </tr>
                    <tr>
                    <td class="ys_title" colspan="2">اجمالي الاجارات السنوية للعقار</td>
                        <td>{{$rent->total_rents}}</td>
                        <td> ريال سعودي</td>
                    </tr>
                    <tr>
                    <td class="ys_title" colspan="2">نسبة الدخل</td>
                        <td>{{$rent->income_ratio}}</td>
                        <td>بالمائة</td>
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
                        <td colspan="4">تكاليف الصيانة التقديرية ( '.$tr_price_bo.' ) ريال</td>
                    </tr>
                    <tr class="ys_title_h">
                        <td colspan="4">سعر التقييم النهائي</td>
                    </tr>
                    <tr>
                        <td colspan="4">{{$price->total}}</td>
                    </tr>
                    <tr>
                        <td colspan="4">### ريال سعودي</td>
                    </tr>
                    
                    <tr class="ys_title_h">
                        <td colspan="4">إحداثيات العقار</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="ys_title2">{{$property->lat}}</td>
                        <td class="ys_title">E</td>
                    </tr>
                    <tr>
                        <td colspan="3" class="ys_title2">{{$property->lng}}</td>
                        <td class="ys_title">N</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
        <table class="border">
        <tr>
            <td>
                *ملاحظة: تم الوقوف علي العقار المبين في الصك و مطابقته مع المخطط المرفق وثبت صحة البيانات المشار إليها و مطابقتهاعلى أرض الواقع
            </td>
        
        </tr>
        </table>
</div>