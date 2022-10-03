// [titcked] Отправка формы на почту

document.addEventListener('DOMContentLoaded', function (){
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend); // При отправки формы мы должны перейти - formSend

    // Запрещяем стандартную отправку формы
    async function formSend(e) {
        e.preventDefault();

        let error = formValidate(form);
    }

        function formValidate(form){
            let error = 0;
            let formReq = document.querySelectorAll('._req') // Делаем обязательное поле

            for (let index = 0; index < formReq.length; index++) {
                const input = formReq[index];
                formRemoveError(input);

                if (input.classList.contains('._email')){
                    if(emailTest(input)){
                        formAddError(input);
                        error++
                    }
                    // Проверка чек бокса
                }else if ( index.getAttribute("type") === "checkbox" && input.checked === false){
                    formAddError(input);
                    error++;
                }else
                    // Проверка заполнено ли проле вообще
                    if (input.value === ''){
                        formAddError(input);
                        error++;
                    }

            }
        }

        function formAddError(input) {
            input.parentElement.classList.add('._error');
            input.classList.add('._error');
        }

        function formRemoveError(input) {
            input.parentElement.classList.add('._error');
            input.classList.add('._error');
        }
        // Функия теста email
        function emailTest(input) {
            return !/^\w+([\.-]?\ц+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
        }
});