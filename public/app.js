$(function () {
    $('#submit').submit(function (event) {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "app/app.php",
            data: {
                data: $('#command').val()
            }
        }).done(function (result) {
            let jsonResult = JSON.parse(result);

            if (jsonResult.errors !== undefined) {
                jsonResult.errors.forEach((error) => {
                    $('#output').append(`<li>${error}</li>`);
                });
            }

            if (jsonResult.success !== undefined) {
                jsonResult.success.forEach((item) => {
                    $('#output').append(`<li>${item}</li>`);
                })
            }
            if (jsonResult.successRepo !== undefined) {
                let parsedRepo = JSON.parse(jsonResult.successRepo);
                console.log(parsedRepo);
                for (const item in parsedRepo) {
                    $('#output').append(`<li>${item}: ${parsedRepo[item]}</li>`);
                }
            }

        }).fail(function (result) {
            console.log(result);
        })
    });

    $('#clear').click(() => {
        $('#output').empty();
    })
});