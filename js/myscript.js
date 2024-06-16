let userDeleteBtns=document.querySelectorAll('.userDeleteBtn')

userDeleteBtns.forEach(button=>
    button.onclick=deleteUser
)

function deleteUser(event){
    event.preventDefault()

    let tr=event.target.closest('.user')
    // let tr=event.target.parentElement.parentElement.parentElement
    let user_id=tr.getAttribute('user-id')

    $.ajax({
        url:'deleteUser.php',
        method:'post',
        data:{user_id:user_id},
        success:function(response){
            if(response == 1){
                alert('User is deleted successfully')
                window.location.href='users.php'
            }
        }
    })

}

// Order Approve Btn 
let orderApproveBtns=document.querySelectorAll('.orderApproveBtn')
console.log(orderApproveBtns)

orderApproveBtns.forEach(button=>
    button.onclick=approveOrder
)

function approveOrder(event){
    event.preventDefault()
    console.log('click')
    console.log(event.target.parentElement.parentElement.closest('.order'))
    let order_element=event.target.parentElement.parentElement.closest('.order');
    let order_id=order_element.getAttribute('id');

    $.ajax({
        url:'orderApprove.php',
        method:'post',
        data:{order_id:order_id},
        success:function(response){
            // if(response=='success'){
            //     location.reload()
            // }
            console.log(response)
        }
    })
}

