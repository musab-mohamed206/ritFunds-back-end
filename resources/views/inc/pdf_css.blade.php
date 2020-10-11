<style>
    
    @page { size :auto; margin: 0.4cm }
    div.page
    {
        page-break-after: always;
        page-break-inside: avoid;
    }

    div.mpdf_index_main {
        font-family: 'Droid';
    }
    div.mpdf_index_entry {
        font-family: 'Droid';
    }
    div.mpdf_index_letter {
        font-family: 'Droid';
    }
    
    body { font-family: 'dejavusans'; font-size:8pt; font-weight:1000; }
            
    p { 	text-align: justify; margin-bottom: 4pt; margin-top:0pt;  }
    
    table { line-height: 0.99; }

    thead {	font-weight: bold; vertical-align: bottom; }
    tfoot {	font-weight: bold; vertical-align: top; }
    thead td { font-weight: bold; }
    tfoot td { font-weight: bold;
                font-size: 5pt;
    }

    .footerrow td, .footerrow th { background-gradient: linear #b7cebd #f5f8f5 0 1 0 0.2;  }

    th {	font-weight: bold; 
        vertical-align: middle; 
        padding-left: 2mm; 
        padding-right: 2mm; 
        padding-top: 0.5mm; 
        padding-bottom: 0.5mm; 
        }

    td {	padding-left: 2mm; 
        vertical-align: middle; 
        padding-right: 2mm; 
        padding-top: 0.5mm; 
        padding-bottom: 0.5mm;
        height: 7px;
        }

    th p { margin:0pt;  }
    td p { margin:0pt;  }

    table.widecells td {
        padding-left: 0mm;
        padding-right: 0mm;
    }
    table.tallcells td {
        padding-top: 0mm;
        padding-bottom: 0mm; 
    }

    hr {width: 70%; height: 1px; 
        text-align: center; color: #999999; 
        margin-top: 8pt; margin-bottom: 8pt; }

    a {color: #000066; font-style: normal; text-decoration: underline; 
        font-weight: normal; }

    pre {  font-size: 6.5pt; margin-top: 5pt; margin-bottom: 5pt; }

    h1 {	font-weight: normal; font-size: 26pt; color: #000066; 
            margin-top: 18pt; margin-bottom: 6pt; 
        border-top: 0.075cm solid #000000; border-bottom: 0.075cm solid #000000; 
        text-align: ; page-break-after:avoid; }
    h2 {	font-weight: bold; font-size: 12pt; color: #000066; 
            margin-top: 6pt; margin-bottom: 6pt; 
        border-top: 0.07cm solid #000000; border-bottom: 0.07cm solid #000000; 
        text-align: ;  text-transform:uppercase; page-break-after:avoid; }
    h3 {	font-weight: normal; font-size: 26pt; color: #000000; 
            margin-top: 0pt; margin-bottom: 6pt; 
        border-top: 0; border-bottom: 0; 
        text-align: ; page-break-after:avoid; }
    h4 {	font-weight: ; font-size: 13pt; color: #000; 
            margin-top: 10pt; margin-bottom: 7pt; font-variant: small-caps; 
        text-align: ;  margin-collapse:collapse; page-break-after:avoid; }
    h5 {	font-weight:  font-size: 8pt;  
            margin-top: 8pt; margin-bottom: 4pt; 
        text-align: ;  page-break-after:avoid; }
    h6 {	font-weight: normal; font-size: 6.5pt; color: #000; 
            margin-top: 5pt; margin-bottom: ; 
        text-align: ;  page-break-after:avoid; }

    .breadcrumb {
        text-align: right; font-size: 8pt;  color: #666666;
        font-weight: bold; font-style: normal; margin-bottom: 6pt; }

    .bpmTopic tbody tr:nth-child(even) { background-color: #f5f8f5; } 
    .bpmTopicC tbody tr:nth-child(even) { background-color: #f5f8f5; } 
    .bpmNoLines tbody tr:nth-child(even) { background-color: #f5f8f5; } 
    .bpmNoLinesC tbody tr:nth-child(even) { background-color: #f5f8f5; } 
    .bpmTopnTail tbody tr:nth-child(even) { background-color: #f5f8f5; } 
    .bpmTopnTailC tbody tr:nth-child(even) { background-color: #f5f8f5; } 

    .evenrow td, .evenrow th { background-color: #f5f8f5; } 
    .oddrow td, .oddrow th { background-color: #e3ece4; } 

    .bpmTopic {	background-color: #e3ece4; }
    .bpmTopicC { background-color: #e3ece4; }
    .bpmNoLines { background-color: #e3ece4; }
    .bpmNoLinesC { background-color: #e3ece4; }
    .bpmClear {		}
    .bpmClearC { text-align: center; }
    .bpmTopnTail { background-color: #e3ece4; topntail: 0.02cm solid #495b4a;}
    .bpmTopnTailC { background-color: #e3ece4; topntail: 0.02cm solid #495b4a;}
    .bpmTopnTailClear { topntail: 0.02cm solid #495b4a; }
    .bpmTopnTailClearC { topntail: 0.02cm solid #495b4a; }

    .bpmTopicC td, .bpmTopicC td p { text-align: center; }
    .bpmNoLinesC td, .bpmNoLinesC td p { text-align: center; }
    .bpmClearC td, .bpmClearC td p { text-align: center; }
    .bpmTopnTailC td, .bpmTopnTailC td p { text-align: center;  }
    .bpmTopnTailClearC td, .bpmTopnTailClearC td p {  text-align: center;  }

    .pmhMiddleCenter { text-align:center; vertical-align:middle; }
    .pmhMiddleRight {	text-align:right; vertical-align:middle; }
    .pmhBottomCenter { text-align:center; vertical-align:bottom; }
    .pmhBottomRight {	text-align:right; vertical-align:bottom; }
    .pmhTopCenter {	text-align:center; vertical-align:top; }
    .pmhTopRight {	text-align:right; vertical-align:top; }
    .pmhTopLeft {	text-align:left; vertical-align:top; }
    .pmhBottomLeft {	text-align:left; vertical-align:bottom; }
    .pmhMiddleLeft {	text-align:left; vertical-align:middle; }

    .infobox { margin-top:10pt; background-color:#DDDDBB; text-align:center; border:1px solid #880000; }

    .bpmTopic td, .bpmTopic th  {	border-top: 1px solid #FFFFFF; }
    .bpmTopicC td, .bpmTopicC th  {	border-top: 1px solid #FFFFFF; }
    .bpmTopnTail td, .bpmTopnTail th  {	border-top: 1px solid #FFFFFF; }
    .bpmTopnTailC td, .bpmTopnTailC th  {	border-top: 1px solid #FFFFFF; }


    .content { direction:rtl; font-weight:500; font-size:7pt;}
    table.border { width:100%; border:1px solid #99151a; margin-bottom:3px;}
    table.border tr td{ background:#fff; border:1px solid #e2e7eb;}
    table.border tr td.gry{ background:#e2e7eb; border:1px solid #e2e7eb;}
    table.no_border { border:none; }
    table.no_border tr td { border:none; }
    
    table.border2 { width:100%; border:1px solid #ffffff; margin-bottom:3px;}
    table.border2 tr td{ background:#fff; border:1px solid #e2e7eb;}
    table.border2 tr td.gry{ background:#e2e7eb; border:1px solid #e2e7eb;}
    table.no_border2 { border:none; }
    table.no_border2 tr td { border:none; }
    
    table tr.ys_title td{ background:#e4e4e4; border:1px solid #c3c3c3; color:#303030; text-align:center;}
    table tr.ys_title3 td{ background:#ab1515; border:1px solid #c3c3c3; color:#303030; text-align:center;}
    table tr td.ys_title{ background:#e4e4e4; border:1px solid #c3c3c3; color:#303030; text-align:center;}
    table tr td.ys_title3{ background:#ab1515; border:1px solid #c3c3c3; color:#ffffff; text-align:center;}
    table tr.ys_title4 td{  text-align:center; width: 343.217px;}
    table tr td.ys_title4{  text-align:center; width: 343.217px;}
    table tr.ys_title2 td{  text-align:center;}
    table tr td.ys_title2{  text-align:center;}
    table tr.ys_title_h td{ background:#ed1c24; border:1px solid #99151a; color:#FFFFFF; text-align:center; font-size:8pt; padding:3px 0;}
    table tr td.ys_title_h { background:#ed1c24; border:1px solid #99151a; color:#FFFFFF; text-align:center; font-size:8pt; padding:3px 0;}
    
    table tr.ys_title_h2 td{ background:#ab1515; border:1px solid #99151a; color:#FFFFFF; text-align:center; font-size:8pt; padding:3px 0;}
    
    table tr.ys_title_h2 { background:#ab1515; border:1px solid #99151a; color:#FFFFFF; text-align:center; font-size:8pt; padding:3px 0;}
    table tr td span { color:#606060;}
    table.center tr td { text-align:center;}
    .ys_pic img { padding:5px; border:1px solid #99151a; margin:0 0 9px 9px;}
    .ys_pic img.left { margin-left:0 !important;}
    .total_price { background-color:#FFF500;}
    
    .ys_top { width:55px; height:100%; padding-top:15px; direction:rtl; background:#1D1D1D; top:0; position:fixed; display:block; overflow:auto;}
    .ys_top a { color:#FFFFFF; line-height:55px; text-align:center; display:block; text-decoration:none;
    font-size:13px; font-weight:700; width:55px;}
    
    .arial { font-family:arial !important;}
    
    .barcode {
        padding: 1.5mm;
        margin: 0;
        vertical-align: top;
        color: #000000;
    }
    
</style>