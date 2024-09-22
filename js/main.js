function show_add() {
  toastr.options = {
      "closeButton": true,
      "positionClass": "toast-top-right",
      "timeOut": "5000",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
  };
  toastr["info"]("User added successfully", "Add User");
}

function show_del() {
  toastr.options = {
      "closeButton": true,
      "positionClass": "toast-top-right",
      "timeOut": "5000",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
  };
  toastr["error"]("User deleted successfully", "Delete User");
}

function show_edit() {
  toastr.options = {
      "closeButton": true,
      "positionClass": "toast-top-right",
      "timeOut": "5000",
      "showMethod": "fadeIn",
      "hideMethod": "fadeOut"
  };
  toastr["success"]("User updated successfully", "Update User");
}

function confirm_delete(id) {
  let del = confirm("Do you want to delete the user?");
  if (del) {
      window.location.href = "index.php?action=del&id=" + id;
  }
}

function edit(id) {
  window.location.href = "add_user.php?action=edit&id=" + id;
}
