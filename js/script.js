// [titcked] Отправка формы на почту

document.addEventListener('DOMContentLoaded', function (){
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend); // При отправки формы мы должны перейти - formSend

    // Запрещяем стандартную отправку формы
    async function formSend(e) {
        e.preventDefault();

        let error = formValidate(form);

        // Отправление формы
        let formDate = new FormData(form);
        formDate.append('image', formImage.files[0]);

        if (error === 0){
            form.classList.add('_sending');
            let response = await fetch('sendmail.php', {
                mettod: 'POST',
                body: formDate
            });
            if (response.ok) {
                let result = await response.json();
                alert(result.message);
                formPreview.innerHTML = '';
                form.reset();
                form.classList.remove('_sending');
            }else {
                alert("Ошибка")
                form.classList.remove('_sending');
            }
        }else
            alert('Заполните поле');
    }

        function formValidate(form){
            let error = 0;
            let formReq = document.querySelectorAll('._req') // Делаем обязательное поле

            for (let index = 0; index < formReq.length; index++) {
                const input = formReq[index];
                formRemoveError(input);

                if (input.classList.contains('_email')){
                    if(emailTest(input)) {
                        formAddError(input);
                        error++
                    }
                    // Проверка чек бокса
                }else if (input.getAttribute("type") === "checkbox" && input.checked === false) {
                    formAddError(input);
                    error++;
                }else
                    // Проверка заполнено ли проле вообще
                    if (input.value === '') {
                        formAddError(input);
                        error++;
                    }
            }
            return error;
        }


        //Подчеркивает красным
        function formAddError(input) {
            input.parentElement.classList.add('_error');
            input.classList.add('_error');
        }
        // Есть все поля заполненны коректно то убирает обводку
        function formRemoveError(input) {
            input.parentElement.classList.remove('_error');
            input.classList.remove('_error');
        }
         //Функия теста email [Проверяет есть ли собачка или точка]
         function emailTest(input) {
             return !/^\w+([\.-]?\ц+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
         }
    
        // Получаем инпут file в переменную
        const formImage = document.getElementById('formImage');
        // Получает Div для превью в переменную
        const formPreview = document.getElementById('formPreview');

        formImage.addEventListener('change', () => {
           uploadFile(formImage.files[0]); 
        });

        function uploadFile(file) {
            // Проверяем тип файла
            if (!['image/jpeg', 'image/png', 'image/gif'].includes(file.type)) {
                alert('Разрешены только изображения');
                formImage.value = '';
                return;
            }
            // Проверяем размер файла
            if(file.size > 2 * 1024 * 1024){
                alert('Файл должен быть менее 2 мб');
                return;
            }

            // Показ картинки на странице
            var reader = new FileReader();
            reader.onload = function (e) {
                formPreview.innerHTML = `<img src= "${e.target.result}" alt="Фото">`;
            };
            reader.onerror = function (e) {
                alert('Ошибка');
            };
            reader.readAsDataURL(file);
            
        }
});
    ////аккордион
    const boxes = Array.from(document.querySelectorAll(".box"));

    boxes.forEach((box) => {
        box.addEventListener("click", boxHandler);
    });

    function boxHandler(e) {
        e.preventDefault();
        let currentBox = e.target.closest(".box");
        let currentContent = e.target.nextElementSibling;
        currentBox.classList.toggle("active");
        //При нажатие на бокс он раскрывался
        if(currentBox.classList.contains("active")){
            currentContent.style.maxHeight = currentContent.scrollHeight + "px";
        }else{
            currentContent.style.maxHeight = 0;
        }
    
//////////////////////////////////////////////////////////registration///////////////////////////////////////////////////////////////////////////

    const signInBtn = document.querySelector('.signin-btn');
    const signUpBtn = document.querySelector('.signup-btn');
    const formBox = document.querySelector('.form-box');
    const body = document.body;

    signUpBtn.addEventListener('click', function () {
    formBox.classList.add('active');
    body.classList.add('active');
    });

    signInBtn.addEventListener('click', function () {
    formBox.classList.remove('active');
    body.classList.remove('active');
    });
} // Возможно ошибка [Ошибка]
//////////////////////////////////////////////////////////Скролл вверх////////////////////////////////////////////////////////

    $(window).scroll(function () {
        if ($(this).scrollTop() > 1000) {
            $('.pageup').fadeIn();
        } else {
            $('.pageup').fadeOut();
        }
    });

//////////////////////////////////////////////////////////Переключатель темы на сайте////////////////////////////////////////////////






