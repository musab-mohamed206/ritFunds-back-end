
<div class="page">
    <table class="border">
        <tr class="ys_title_h">
            <td colspan="2">صورة الأقمار الصناعية</td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="googlemap.php?lat={{$property->lat}}&lng={{$property->lng}}&z=15&user='.$tr_us_c.'" target="_blank">
                <img width="100%" src="http://maps.googleapis.com/maps/api/staticmap?zoom=15&size=855x275&markers=color:red|label:'.$label.'|{{$property->lat}},{{$property->lng}}&maptype=hybrid&sensor=true&key=AIzaSyA_OXU8m9x06roE94gEbKVUcNjYvbT3Qfg"/></a>
            </td>
        </tr>
        <tr class="ys_title_h">
            <td colspan="2">صورة الخريطة</td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="googlemap.php?lat={{$property->lat}}&lng={{$property->lng}}&z=15&user='.$tr_us_c.'" target="_blank">
                <img width="100%" src="http://maps.googleapis.com/maps/api/staticmap?zoom=15&size=855x275&markers=color:red|label:'.$label.'|{{$property->lat}},{{$property->lng}}&key=AIzaSyA_OXU8m9x06roE94gEbKVUcNjYvbT3Qfg" /></a>
            </td>
        </tr>
        <tr class="ys_title_h">
            <td>صورة مقربة للموقع</td>
            <td>الإحداثيات</td>
        </tr>
        <tr>
            <td>
                <a href="googlemap.php?lat={{$property->lat}}&lng={{$property->lng}}&z=29&user='.$tr_us_c.'" target="_blank">
                <img src="http://maps.googleapis.com/maps/api/staticmap?zoom=19&size=545x255&markers=color:red|label:'.$label.'|{{$property->lat}},{{$property->lng}}&key=AIzaSyA_OXU8m9x06roE94gEbKVUcNjYvbT3Qfg" /></a>
            </td>
            <td>
                <h5>خط الطول - Longitude</h5>
                <p>{{$property->lat}}</p>
                <h5>خط العرض - Latitude</h5>
                <p>{{$property->lng}}</p>
            </td>
        </tr>
    
    </table>
</div>