<style>
    .section-header {
        text-align: center;
        margin: 0 auto;
        padding: 40px 0;
        font: 300 60px 'Oswald', sans-serif;
        color: #fff;
        text-transform: uppercase;
        letter-spacing: 6px;
    }

    .contact-wrapper {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin: 0 auto;
        padding: 20px;
        position: relative;
        max-width: 840px;
    }

    /* Left contact page */
    .form-horizontal {
        /*float: left;*/
        max-width: 400px;
        font-family: 'Lato';
        font-weight: 400;
    }

    .form-control,
    textarea {
        max-width: 400px;
        background-color: #000;
        color: #fff;
        letter-spacing: 1px;
    }

    .send-button {
        margin-top: 15px;
        height: 34px;
        width: 400px;
        overflow: hidden;
        transition: all .2s ease-in-out;
    }

    .alt-send-button {
        width: 400px;
        height: 34px;
        transition: all .2s ease-in-out;
    }

    .send-text {
        display: block;
        margin-top: 10px;
        font: 700 12px 'Lato', sans-serif;
        letter-spacing: 2px;
    }

    .alt-send-button:hover {
        transform: translate3d(0px, -29px, 0px);
    }

    /* Begin Right Contact Page */
    .direct-contact-container {
        max-width: 400px;
    }

    /* Location, Phone, Email Section */
    .contact-list {
        list-style-type: none;
        margin-left: -30px;
        padding-right: 20px;
    }

    .list-item {
        line-height: 4;
        color: #aaa;
    }

    .contact-text {
        font: 300 18px 'Lato', sans-serif;
        letter-spacing: 1.9px;
        color: #bbb;
    }

    .place {
        margin-left: 62px;
    }

    .phone {
        margin-left: 56px;
    }

    .gmail {
        margin-left: 53px;
    }

    .contact-text a {
        color: #bbb;
        text-decoration: none;
        transition-duration: 0.2s;
    }

    .contact-text a:hover {
        color: #fff;
        text-decoration: none;
    }


    /* Social Media Icons */
    .social-media-list {
        position: relative;
        font-size: 22px;
        text-align: center;
        width: 100%;
        margin: 0 auto;
        padding: 0;
    }

    .social-media-list li a {
        color: #fff;
    }

    .social-media-list li {
        position: relative;
        display: inline-block;
        height: 60px;
        width: 60px;
        margin: 10px 3px;
        line-height: 60px;
        border-radius: 50%;
        color: #fff;
        background-color: rgb(27, 27, 27);
        cursor: pointer;
        transition: all .2s ease-in-out;
    }

    .social-media-list li:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 60px;
        height: 60px;
        line-height: 60px;
        border-radius: 50%;
        opacity: 0;
        box-shadow: 0 0 0 1px #fff;
        transition: all .2s ease-in-out;
    }

    .social-media-list li:hover {
        background-color: #fff;
    }

    .social-media-list li:hover:after {
        opacity: 1;
        transform: scale(1.12);
        transition-timing-function: cubic-bezier(0.37, 0.74, 0.15, 1.65);
    }

    .social-media-list li:hover a {
        color: #000;
    }

    .copyright {
        font: 200 14px 'Oswald', sans-serif;
        color: #555;
        letter-spacing: 1px;
        text-align: center;
    }

    hr {
        border-color: rgba(255, 255, 255, .6);
    }

    /* Begin Media Queries*/
    @media screen and (max-width: 850px) {
        .contact-wrapper {
            display: flex;
            flex-direction: column;
        }

        .direct-contact-container,
        .form-horizontal {
            margin: 0 auto;
        }

        .direct-contact-container {
            margin-top: 60px;
            max-width: 300px;
        }

        .social-media-list li {
            height: 60px;
            width: 60px;
            line-height: 60px;
        }

        .social-media-list li:after {
            width: 60px;
            height: 60px;
            line-height: 60px;
        }
    }

    @media screen and (max-width: 569px) {

        .direct-contact-container,
        .form-wrapper {
            float: none;
            margin: 0 auto;
        }

        .form-control,
        textarea {

            margin: 0 auto;
        }


        .name,
        .email,
        textarea {
            width: 280px;
        }

        .direct-contact-container {
            margin-top: 60px;
            max-width: 280px;
        }

        .social-media-list {
            left: 0;
        }

        .social-media-list li {
            height: 55px;
            width: 55px;
            line-height: 55px;
            font-size: 2rem;
        }

        .social-media-list li:after {
            width: 55px;
            height: 55px;
            line-height: 55px;
        }

    }

    @media screen and (max-width: 410px) {
        .send-button {
            width: 99%;
        }
    }
</style>

<section id="contact">
    <div class="flex gap-10 justify-center items-center">
        <form id="contact-form" class="form-horizontal" role="form" method="POST" action="{{ route('send.email') }}">
            @csrf
            <div class="form-group">
                <div class="">
                    <input type="text" class="input bg-transparent w-full border border-white" id="name"
                        placeholder="NAME" name="name" required>
                </div>
            </div>

            <div class="form-group">
                <div class="">
                    <input type="email" class="input bg-transparent w-full border border-white mt-5" id="email"
                        placeholder="EMAIL" name="email" value="" required>
                </div>
            </div>

            <textarea class="textarea bg-transparent w-full border border-white mt-5" rows="6" placeholder="MESSAGE"
                name="message" required></textarea>

            <button class=" send-button border p-2 rounded-lg text-white" id="submit" type="submit" value="SEND">
                <div class="alt-send-button">
                    <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
                </div>

            </button>

        </form>
        <div class="direct-contact-container md:ml-10">

            <ul class="contact-list">
                <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Dhaka,
                            Bangladesh</span></i></li>

                <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a
                                href="tel:+8801701297556" title="Give me a call">+8801701297556</a></span></i></li>

                <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a
                                href="mailto:rafin.hossain.8990@gmail.com"
                                title="Send me an email">rafin.hossain.8990@gmail.com</a></span></i></li>

            </ul>




        </div>
    </div>

</section>