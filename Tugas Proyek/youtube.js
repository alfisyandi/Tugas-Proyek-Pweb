function cari() {
var kata = document.formcari.keyword.value;
var hasil = "https://www.youtube.com/" + kata ;
var feture = "height=500, width=750, scrollbars=yes location=yes";
window.open(hasil, 'youtube', feture)
}