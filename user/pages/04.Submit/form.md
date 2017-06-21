---
title: Submit
published: true
form:
    name: my-nice-form
    fields:
        -
            name: name
            label: Name
            placeholder: 'Enter your name'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Enter your email address'
            type: text
            validate:
                rule: email
                required: true
        -
            name: message
            label: Message
            size: long
            placeholder: 'Enter your message'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: 'Submit »'
            classes: btn
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for your feedback!'
        -
            display: thankyou
---

From short informative pieces to personal essays, all types of literary work are welcome. Just as long as it contributes to the conversation about mental health in some shape or form. While we encourage shorter submissions (300 – 600 words), pieces of all lengths are accepted. Only members of the Harvard community are eligible for submission.

Please submit your blog post via the form below. Also, feel free to contact us at harvardhealingthoughts@gmail.com with any questions about the submission process or about us as an organization. We are always happy to chat with you about anything and everything.