var jsValidation = (function () {

var doc = window.document,
name = doc.getElementById("myPluginIdName"),
family = doc.getElementById("myPluginIdFamily"),
meli = doc.getElementById("myPluginIdMeli"),
cert = doc.getElementById("myPluginIdCert"),
stName = doc.getElementById("stIdName"),
stFamily = doc.getElementById("stIdFamily"),
stMeli = doc.getElementById("stIdMeli"),
stPhone = doc.getElementById("stIdPhone"),
stPicStudent = doc.getElementById("stIdPicStudent"),
message = doc.getElementById("MypluginFormMessage"),
validation;
function checkNotEmpty() {
return !(name.value === "" || !isNaN(name.value) || family.value === "" || !isNaN(family.value) ||
meli.value === "" || isNaN(meli.value) || meli.value.length < 5 || cert.value === "" || !isNaN(cert.value) || stName.value === "" || !isNaN(stName.value) || stFamily.value === "" || !isNaN(stFamily.value) || stMeli.value === "" || !isNaN(stMeli.value) || stPhone.value === "" || !isNaN(stPhone.value) || stPicStudent.value === "" || !isNaN(stPicStudent.value)
);
}

validation = function () {
 
if (checkNotEmpty() === true) {
message.innerHTML =":)";
return true;
} else {
message.innerHTML =":(";
return true;
}
 
};
 
return {
validation: validation
}
 
})();