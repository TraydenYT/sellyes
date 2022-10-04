// [titcked] Отправка формы на почту

document.addEventListener('DOMContentLoaded', function (){
    const form = document.getElementById('form');
    form.addEventListener('submit', formSend); // При отправки формы мы должны перейти - formSend
    

    // Запрещяем стандартную отправку формы
    async function formSend(e) {
        e.preventDefault();

        let error = formValidate(form);

        if (error === 0){
            
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
        }

        // return error;

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
        const formPreview = document.getElementById('formImage');

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
            }

            // Показ картинки на странице
            var reader = new FileReader();
            reader.onload = function (e) {
                formPreview.innerHTML = '<img src="${e.target.result}" alt="Фото">';
            };
            reader.onerror = function (e) {
                alert('Ошибка');
            };
            reader.readAsDataURL(file);
            
        }
        
        // Аккардеон[spoiler]//////////////////////////////////////////////////////////////////////////////////////////
        const spoilersArray = document.querySelectorAll('[data-spoIler]');
        if (spoilersArray.length > 0) {
            //Получение обычнх слойлеров
            const spoilerRegular = Array.from(spoilersArray).filter(function (item, index, self) {
                return !item.dataset.spoIler.split(",")[0];
            });
            // Иницилизация обычных спойлеров
            if(spoilerRegular.length > 0){
                initSpoIler(spoilerRegular);
            }

            const spoIlerMedia = Array.from(spoilersArray).filter(function (item, index, self) {
                return item.dataset.spoIler.
            }
        }
});

