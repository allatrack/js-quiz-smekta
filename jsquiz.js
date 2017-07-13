(function() {
    var pointsCounter = 0; // Tracks question number
    var getPoints = 0; // Poinst for current selected answer
    var nextQuestion = 0; // Next question
    var selected = false; // Answer is selected
    var quiz = $('#quiz'); // Quiz object
    var quizQuestion = $('#quiz-question'); // Quiz question header
    var quizProgress = $("#quiz-progress-line"); // Quiz progress line
    var quizProgressText = $("#quiz-progress"); // Quiz progress text

    // Display initial question
    displayNext(1);
    $('#start').hide();
    $('#useful').hide();
    $('#unuseful').hide();

    // Click handler for the 'next' button
    $('#next').on('click', function(e) {
        e.preventDefault();

        // Suspend click listener during fade animation
        if (quiz.is(':animated')) {
            return false;
        }
        choose();

        // If no user selection, progress is stopped
        if (isNaN(selected) || (!selected)) {
            bootbox.alert('Будь-ласка зробіть свій вибір');
        } else {
            displayNext(nextQuestion);
        }
    })

    // Click handler for the 'Start Over' button
    $('#start').on('click', function(e) {
        e.preventDefault();

        if (quiz.is(':animated')) {
            return false;
        }
        pointsCounter = 0;
        displayNext(1);
        $('#start').hide();
        $('#useful').hide();
        $('#unuseful').hide();
    })

    // Creates and returns the div that contains the questions and 
    // the answer selections
    function createQuestionElement(index) {
        var qElement = $('<div>', {
            id: 'question'
        });

        for (var i = 0; i < questions[index - 1].choices.length; i++) {
            item = $('<div>', {
                class: 'radio radio-custom'
            });
            var image = "";
            if (questions[index - 1].choices[i].image != null) {
                image = "<img src=\"" + questions[index - 1].choices[i].image + "\" />"
            }
            input = '<input type="radio" name="answer" id="radio' + i + '" data-points="' + questions[index - 1].choices[i].points + '"' +
                ' data-next-question="' + questions[index - 1].choices[i].nextQuestion + '" data-question="' + questions[index - 1].question +
                '" data-answer="' + questions[index - 1].choices[i].answer + '"/>' + '<label for="radio' + i + '">' + image + '&nbsp;' +
                questions[index - 1].choices[i].answer + '</label>';
            item.append(input);
            qElement.append(item);
        }

        return qElement
    }

    // Reads the user selection and pushes the value to an array
    function choose() {
        selected = false;

        nextQuestion = $('input[name="answer"]:checked').data('nextQuestion');
        getPoints = $('input[name="answer"]:checked').data('points');
        ga('send', 'event', {
            eventCategory: $('input[name="answer"]:checked').data('question'),
            eventAction: $('input[name="answer"]:checked').data('answer'),
            eventLabel: $('input[name="answer"]:checked').data('answer')
        });
        if ((getPoints != null) && ((!isNaN(getPoints)))) {
            pointsCounter += parseInt(getPoints);
            selected = true;
        }
    }

    // Displays next requested element
    function displayNext(questionNumber) {
        selected = false

        quizProgressText.fadeOut(function() {
            var percent = (questionNumber > 0) ? Math.round(100 * (questionNumber - 1) / questions.length) : 100;
            quizProgressText.text("Пройдено " + percent + "%").fadeIn();
        });

        quizProgress.width(((questionNumber > 0) ? 100 * (questionNumber - 1) / questions.length : 100) + "%");

        quizQuestion.fadeOut(function() {
            quizQuestion.text((questionNumber > 0) ? questions[questionNumber - 1].question : "Результати тесту").fadeIn();
        })

        quiz.fadeOut(function() {
            $('#question').remove()
            if (questionNumber > 0) {
                var nextQuestion = createQuestionElement(questionNumber);
                quiz.prepend(nextQuestion);
                quiz.fadeIn();
                $('#next').show();
            } else {
                var scoreElem = displayScore();
                quiz.prepend(scoreElem);
                quiz.fadeIn();
                $('#campaign').show();
                $('#prize1').show();
                $('#prize2').show();
                $('#prize3').show();
                $('#prize4').show();
                $('#prize5').show();
                $('#next').hide();
                $('#useful').show();
                $('#unuseful').show();
                $('#start').show();
            }
        })
    }

    // Computes score and returns a paragraph element to be displayed
    function displayScore() {
        var score = $('<p>', { id: 'question' });
        var result = '';

        switch (true) {
            case pointsCounter < 5:
                result = 'Повністю здоровий!';
                break;
            case pointsCounter == 5 || pointsCounter == 6:
                result = 'Практично здоровий, але потрібно переглянути раціон харчування.';
                break;
            case pointsCounter > 6:
                result = 'Потрібна негайна консультація лікаря!';
                break;
        }

        ga('send', 'event', {
            eventCategory: 'Result',
            eventAction: 'Набрано ' + pointsCounter + ' балів',
            eventLabel: result
        });

        score.append('Ви набрали балів: ' + pointsCounter + '. <br />' +
            //'Ваш результат: ' + result + '<br /><br /> Чи був цей тест корисний для вас?');
            'Ваш результат: ' + result);
        return score;
    }

    $('#useful').on('click', function(e) {
        e.preventDefault();

        ga('send', 'event', {
            eventCategory: 'Important',
            eventAction: 'True',
            eventLabel: 'Допомогло'
        });

        bootbox.alert('Дякуємо за ваш відгук. Нам дуже важлива ваша думка.');
    })

    // Click handler for the 'Start Over' button
    $('#unuseful').on('click', function(e) {
        e.preventDefault();

        ga('send', 'event', {
            eventCategory: 'Important',
            eventAction: 'False',
            eventLabel: 'Не допомогло'
        });

        bootbox.alert('Дякуємо за ваш відгук. Нам дуже важлива ваша думка.');
    })
})()