function temizle(){
    document.getElementById("iletisim").reset();
}

function Sayi(e) {
    islem = document.all ? window.event : e;
    karakter = document.all ? islem.keyCode : islem.which;

	if(karakter<48||karakter>57) {
		if(document.all) { islem.returnValue = false; } else { islem.preventDefault();}
	}

}

function formKontrolTR(frm)
{
    var isim = frm.isim.value;
    var telefon = frm.telefon.value;
    var mesaj = frm.mesaj.value;
    var email = frm.email.value;
    var atpos=email.indexOf("@");
    var dotpos=email.lastIndexOf(".");
    if ( isim==null || isim=="")
    {
        alert("İsim alani bos birakilamaz.");
        return false;
    }
    if ( telefon == null || telefon == "")
    {
        alert("Geçerli bir telefon numarasi giriniz.");
        return false;
    }
    if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length )
    {
        alert("Geçerli email adresi girin");
        return false;
    } 
    if ( mesaj==null || mesaj=="")
    {
        alert("Mesaj alani boş bırakılamaz.");
        return false;
    }
    return true;
}

function formKontrolEN(frm)
{
    var isim = frm.isim.value;
    var telefon = frm.telefon.value;
    var mesaj = frm.mesaj.value;
    var email = frm.email.value;
    var atpos=email.indexOf("@");
    var dotpos=email.lastIndexOf(".");
    if ( isim==null || isim=="")
    {
        alert("Name field cannot be empty.");
        return false;
    }
    if ( telefon == null || telefon == "")
    {
        alert("Please enter a valid phone number.");
        return false;
    }
    if ( atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length )
    {
        alert("Please enter valid email address.");
        return false;
    } 
    if ( mesaj==null || mesaj=="")
    {
        alert("Message field cannot be left blank.");
        return false;
    }
    return true;
}