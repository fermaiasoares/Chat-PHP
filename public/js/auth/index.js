$(function () {

    $('.btn_submit').click(event => {
        $('form').each( () => {
            const inputs =  $(this).find('input') 
            if(!inputs.val()) {
                swal('Preecha os campos que estão vazios', '', 'warning')
                return false;
            } else {
                $.ajax({
                    url: 'App/Controller/AuthController.php',
                    data: $('#login').serialize(),
                    type: 'POST',
                    beforeSend: () => {
                        $('loanding').show()
                    },
                    complete: () => {
                        $('loanding').show()
                    },
                    success: data => {
                        console.log(data)
                    },
                    error: () => {
                        swal('Ocorreu algum erro', '', 'error')
                    }
                })
            }
        })

        event.preventDefault()
    })


})