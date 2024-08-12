//User Delete Trigger
function confirmUserDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-user").id.value = id;
    $("#userDeleteModal").modal("show");
}


//Property Delete Trigger
function confirmPropertyDelete(self) {
    var id = self.getAttribute("data-id");

    document.getElementById("form-delete-property").id.value = id;
    $("#propertyDeleteModal").modal("show");
}