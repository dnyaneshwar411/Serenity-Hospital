@extends('web-pages.partials.main-section')
@section('content')
    <div id="contact-page" class="main_container margin_block">
        <h2>CONTACT</h2>
        <div class="container">
            <img class="block_img" src="{{ asset('/img/hospital-2.jpg') }}" alt="">

            <p>Contacting Serenity Hospital is convenient and straightforward. To book an appointment or reach out for any
                inquiries, please follow these steps:
            </p>

            <ol>
                <li>
                    <strong>Phone Helpline</strong>: You can call our dedicated helpline at <a
                        href="tel: +91 9067183889"><strong>+91
                            9067183889</strong></a>. Our friendly and
                    knowledgeable
                    staff will assist you with appointment scheduling, answer your questions, and provide any necessary
                    information.
                </li>
                <li>
                    <strong>Email</strong>: For non-urgent inquiries or appointment requests, you can email us at
                    <a href="mailto: dnyaneshwarpk20@gmail.com"><strong><u>dnyaneshwarpk20@gmail.com</u></strong></a>. We aim
                    to
                    respond to
                    emails
                    promptly and provide you with the necessary
                    information.
                </li>
                <li>
                    <strong>Online Booking</strong>: To streamline the appointment process, you can visit our official
                    website,
                    <a href="http://www.serenityhospital.com"><u><strong>www.serenityhospital.com</strong></u></a>. There,
                    you'll find an
                    easy-to-use online booking system that allows you to
                    select your preferred doctor, date, and time for your appointment. Fill in your details, and you'll
                    receive a confirmation email with all the relevant information.
                </li>
                <li>
                    <strong>Visit in Person</strong>: If you prefer a face-to-face interaction, our hospital's reception
                    desk is
                    open during regular business hours. You can visit us at [Hospital Address], where our staff will be
                    happy to assist you in booking an appointment or addressing your concerns.
                </li>
            </ol>
            <p>At Serenity Hospital, we prioritize your convenience and accessibility. Whether you choose to contact us via
                phone,
                email, our website, or in person, our goal is to ensure a seamless and efficient experience in booking your
                appointments and addressing your healthcare needs.
            </p>
        </div>
    </div>
    <div id="contact">
        <div class="main_container">
            <h2>CONTACT US</h2>
            <div class="wrapper flex">
                <div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3549.275183871301!2d73.98769345687795!3d19.527632083311573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdd08db7a25034d%3A0xe4ed7a15a8af7248!2sDhumalwadi%2C%20Maharashtra%20422601!5e0!3m2!1sen!2sin!4v1692435869358!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div>
                    <form action="">
                        <input type="text" placeholder="Name" />
                        <input type="email" placeholder="Email" />
                        <textarea name="" id="" placeholder="Enter your Message / Query.."></textarea>
                        <input type="submit" value="SUBMIT" class="btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
