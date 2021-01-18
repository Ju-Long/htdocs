$(document).ready(function() {
   reload_table();

   $(".btnAdd").click(function() {
      $("#addModal").modal("show");
   });

   $("#add").submit(function() {
      $.post("addModule.php", {
         modulecode: $("#addModuleCode").val(),
         modulename: $("#addModuleName").val()
      }, function(data){
         $("#add").reset();
         console.log("submitted");
         reload_table();
      }, "json");
   });

   $("#moduleTable").on("click", ".btnEdit", function() {
      let id = $(this).val();
      $("#editModal").modal("show");
      $.get("getModuleDetails.php", {
         modulecode: id
      }, function(data) {
         $("#editModuleCode").val(data.module_code);
         $("#editModuleName").val(data.module_name);
      }, "json");
   });

   $("#edit").submit(function() {
      $.post("editModule.php", {
         modulecode: $("#editModuleCode").val(),
         modulename: $("#editModuleName").val()
      }, function(data){
         if (data) {
            console.log("changed");
            reload_table();
         }
      }, "json");
   });

   $("#moduleTable").on("click", ".btnDelete", function() {
      let id = $(this).val();
      id = id.substring(1);
      $.get("deleteModule.php", {
         modulecode: id
      }, function(data) {
         console.log("delete");
         reload_table()
      }, "json");
   });
});

function reload_table() {
   $.get("getModules.php", {}, function(data) {
     var msg = "";
     data.forEach(i => {
       msg += "<tr>"
       msg += "<td>" + i.module_code;
       msg += "</td><td>" + i.module_name;
       msg += "</td><td><button class='btnEdit btn btn-primary' value='" + i.module_code + "'><i class='fa fa-edit'></i>Edit";
       msg += "</button><button class='btnDelete btn btn-danger' value='>" + i.module_code + "'><i class='fa fa-trash'></i>Delete";
       msg += "</button></td></tr>"
     });
     $("tbody").html(msg);
   }, "json")
}
