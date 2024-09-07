let countCheckbox=0
$("tbody tr").each(function(){
    let isChecked=true
    $(this).find("[name='permissions[]']").each(function(){
        isChecked=$(this).is(':checked')
        if(!$(this).is(':checked')){
            return false;
        }
    });
    $(this).find("[name='permissions[]']").each(function(key,item){
        console.log(item,'itme')
        console.log(key,'key')
    })
    $(this).find('td:first .selectAllPermission').prop('checked',isChecked)
})
let allChecked=true;
$(".selectAllPermission").each(function(){
    allChecked=$(this).is(':checked');
    if(!$(this).is(':checked')){
        return false;
    }
});
console.log(allChecked);
$("#users_select_all").prop('checked',allChecked);
$(document).on('change',"#roles_select_all",function(){
    $(this).parent().parent().parent().parent().parent().find('tbody input[type="checkbox"]').prop('checked',$(this).is(':checked'))
});
$(document).on('change','.selectAllPermission',function(){
    $(this).parent().parent().parent().find('input[type="checkbox"]').prop('checked',$(this).is(':checked'));
    checkRoleSelectAll()

})
function checkRoleSelectAll(){
    let allCheckedPermissions=true;
    $('tbody input[type="checkbox"]').each(function(){
        allCheckedPermissions=$(this).is(':checked');
        console.log($(this).is(':checked'))
        if(!$(this).is(':checked')){
            return false;
        }
    })
    $("#roles_select_all").prop('checked',allCheckedPermissions)
}
checkRoleSelectAll()
