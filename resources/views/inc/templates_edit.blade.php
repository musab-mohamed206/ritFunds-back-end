
    <option value="">المرجو الاختيار</option>
    <option 
        @if ($taqeem->taqeem_template == 'sempol')
            selected
        @endif
    value="sempol">التقرير المبسط
    </option>   
    <option 
        @if ($taqeem->taqeem_template == 'sempol_land')
            selected
        @endif
     value="sempol_land">تقرير الهيئة ارض </option>  
    <option
        @if ($taqeem->taqeem_template == 'sempol_con')
            selected
        @endif
     value="sempol_con">تقرير الهيئة انشاء </option>  
    <option 
        @if ($taqeem->taqeem_template == 'sempol_sk')
            selected
        @endif
     value="sempol_sk">تقرير الهيئة سكني </option>  
    <option
        @if ($taqeem->taqeem_template == 'sst')
            selected
        @endif
     value="sst"> البنك السعودي للأستثمار</option>
    <option
        @if ($taqeem->taqeem_template == 'sempol_e')
            selected
        @endif
     value="sempol_e">التقرير المبسط انجليزي</option>
    <option
        @if ($taqeem->taqeem_template == 'alrajhi_ind')
            selected
        @endif 
    value="alrajhi_ind">مصرف الراجحي - أفراد</option>
    <option
        @if ($taqeem->taqeem_template == 'alrajhi_cmp')
            selected
        @endif
     value="alrajhi_cmp">مصرف الراجحي - شركات</option>
    <option
        @if ($taqeem->taqeem_template == 'alrajhi_m')
            selected
        @endif
     value="alrajhi_m">مصرف الراجحي ممتلكات - أفراد</option>
    <option
        @if ($taqeem->taqeem_template == 'sfc')
            selected
        @endif
     value="sfc">البنك السعودي الفرنسي - شركات</option>
    <option
        @if ($taqeem->taqeem_template == 'sfc_ind')
            selected
        @endif
     value="sfc_ind">البنك السعودي الفرنسي - أفراد</option>
    <option
        @if ($taqeem->taqeem_template == 'riyadh_cmp')
            selected
        @endif
     value="riyadh_cmp">بنك الرياض - التوثيق والضمانات</option>
    <option
        @if ($taqeem->taqeem_template == 'riyadh_com')
            selected
        @endif
     value="riyadh_com">بنك الرياض -  شركات</option>
    <option
        @if ($taqeem->taqeem_template == 'riyadh_afrad')
            selected
        @endif
     value="riyadh_afrad">بنك الرياض - افراد</option>
    <option
        @if ($taqeem->taqeem_template == 'riyadh')
            selected
        @endif
     value="riyadh">عام مختصر - أفراد</option>
    <option
        @if ($taqeem->taqeem_template == 'amlak')
            selected
        @endif
     value="amlak">شركة أملاك - أفراد</option>
    <option
        @if ($taqeem->taqeem_template == 'shb')
            selected
        @endif
     value="shb">البنك الاول - أفراد</option>
    <option
        @if ($taqeem->taqeem_template == 'inma')
            selected
        @endif
     value="inma">بنك الانماء - أفراد</option>
    <option
        @if ($taqeem->taqeem_template == 'shl')
            selected
        @endif
     value="shl">سهل - أفراد</option>
    <option
        @if ($taqeem->taqeem_template == 'bidaya_ind')
            selected
        @endif
     value="bidaya_ind">بداية - أفراد</option>
    <option
        @if ($taqeem->taqeem_template == 'sab')
            selected
        @endif
     value="sab">ساب - عام</option>
    <option
        @if ($taqeem->taqeem_template == 'sab_est')
            selected
        @endif
     value="sab_est">ساب - استصناع - (كريم)</option>
    <option
        @if ($taqeem->taqeem_template == 'sab0')
            selected
        @endif
     value="sab0">تقرير زيارة</option>
    <option
        @if ($taqeem->taqeem_template == 'samba_handace')
            selected
        @endif
     value="samba_handace">سامبا - هندسي</option>
    <option
        @if ($taqeem->taqeem_template == 'samba_land')
            selected
        @endif
     value="samba_land">سامبا - ارض</option>
    <option
        @if ($taqeem->taqeem_template == 'samba_fela')
            selected
        @endif
     value="samba_fela">سامبا - فيلا</option>
    <option
        @if ($taqeem->taqeem_template == 'jazera_afrad')
            selected
        @endif
     value="jazera_afrad">بنك الجزيرة - افراد</option>
    <option
        @if ($taqeem->taqeem_template == 'jazera_est')
            selected
        @endif
     value="jazera_est">بنك الجزيرة - بناء ذاتي</option>
    <option
        @if ($taqeem->taqeem_template == 'ahli')
            selected
        @endif
     value="ahli">البنك الاهلي </option>
    <option
        @if ($taqeem->taqeem_template == 'ahli_est')
            selected
        @endif
     value="ahli_est">البنك الاهلي استصناع </option>
    <option
        @if ($taqeem->taqeem_template == 'dar_altamlek')
            selected
        @endif
     value="dar_altamlek">شركة دار التمليك </option>
    <option
        @if ($taqeem->taqeem_template == 'blad')
            selected
        @endif
     value="blad">بنك البلاد </option>
    <option
        @if ($taqeem->taqeem_template == 'afrad')
            selected
        @endif
     value="afrad">عملاء افراد </option>
    <option
        @if ($taqeem->taqeem_template == 'shmol')
            selected
        @endif
     value="shmol">شركة شمول العقارية </option>
    <option
        @if ($taqeem->taqeem_template == 'stampol')
            selected
        @endif
     value="stampol">شركة إسطول الانجاز التجارية المحدودة </option>
    <option
        @if ($taqeem->taqeem_template == 'tmaioz')
            selected
        @endif
     value="tmaioz">شركة التميز العقارية </option>
    <option
        @if ($taqeem->taqeem_template == 'stc')
            selected
        @endif
     value="stc">بيع - STC</option>
    <option
        @if ($taqeem->taqeem_template == 'stc_rent')
            selected
        @endif
     value="stc_rent">تأجير - STC</option>
    <option 
        @if ($taqeem->taqeem_template == 'blad_blad')
            selected
        @endif
     value="blad_blad">  بلاد بنك البلاد </option>
    
    <option
        @if ($taqeem->taqeem_template == 'alrajhi_est_1')
            selected
        @endif
     value="alrajhi_est_1">مصرف الراجحي - بناء جديد</option>
    <option
        @if ($taqeem->taqeem_template == 'alrajhi_est_2')
            selected
    @endif
     value="alrajhi_est_2">مصرف الراجحي -  اكمال البناء</option>
    <option
        @if ($taqeem->taqeem_template == 'alrajhi_est_3')
            selected
        @endif
     value="alrajhi_est_3">مصرف الراجحي -  اكمال البناء ما بعد الحفر</option>
    <option
        @if ($taqeem->taqeem_template == 'alrajhi_est_4')
            selected
        @endif
     value="alrajhi_est_4">مصرف الراجحي -   البناء ر</option>
    <option
        @if ($taqeem->taqeem_template == 'alrajhi_est_5')
            selected
        @endif
     value="alrajhi_est_5">مصرف الراجحي - بناء ذاتي جديد</option>
    <option
        @if ($taqeem->taqeem_template == 'arabi_ind')
            selected
        @endif
     value="arabi_ind"> البنك العربي </option>
   
    