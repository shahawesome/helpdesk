<!--==================================== INSERT ============================================-->
@if(Session::has('daftarStatus') && Session::get('daftarStatus') === true)
<input type="hidden" class="daftar" value="true">
@endif
@if(Session::has('daftarStatus') && !Session::get('daftarStatus') )
<input type="hidden" class="daftar" value="false">
@endif
@if(Session::has('daftarStatus') && is_array(Session::get('daftarStatus')) )
<input type="hidden" class="daftar" value="db">
@endif
<!--==================================== UPDATE ============================================-->
@if(Session::has('kemaskiniStatus') && Session::get('kemaskiniStatus') === true)
<input type="hidden" class="kemaskini" value="true">
@endif
@if(Session::has('kemaskiniStatus') && !Session::get('kemaskiniStatus') )
<input type="hidden" class="kemaskini" value="false">
@endif
@if(Session::has('kemaskiniStatus') && is_array(Session::get('kemaskiniStatus')) )
<input type="hidden" class="kemaskini" value="db">
@endif
<!--==================================== DELETE ============================================-->
@if(Session::has('padamStatus') && Session::get('padamStatus') === true)
<input type="hidden" class="padam" value="true">
@endif
@if(Session::has('padamStatus') && !Session::get('padamStatus') )
<input type="hidden" class="padam" value="false">
@endif