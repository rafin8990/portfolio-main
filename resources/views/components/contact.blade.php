<style>
    /* From Uiverse.io by omriluz */
    .form-container {
        /* width: 400px; */
        background: linear-gradient(#212121, #212121) padding-box,
            linear-gradient(145deg, transparent 35%, #e81cff, #40c9ff) border-box;
        border: 2px solid transparent;
        padding: 32px 24px;
        font-size: 14px;
        font-family: inherit;
        color: white;
        display: flex;
        flex-direction: column;
        gap: 20px;
        box-sizing: border-box;
        border-radius: 16px;
        background-size: 200% 100%;
        animation: gradient 5s ease infinite;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .form-container button:active {
        scale: 0.95;
    }

    .form-container .form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-container .form-group {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .form-container .form-group label {
        display: block;
        margin-bottom: 5px;
        color: #717171;
        font-weight: 600;
        font-size: 12px;
    }

    .form-container .form-group input {
        width: 100%;
        padding: 12px 16px;
        border-radius: 8px;
        color: #fff;
        font-family: inherit;
        background-color: transparent;
        border: 1px solid #414141;
    }

    .form-container .form-group textarea {
        width: 100%;
        padding: 12px 16px;
        border-radius: 8px;
        resize: none;
        color: #fff;
        height: 96px;
        border: 1px solid #414141;
        background-color: transparent;
        font-family: inherit;
    }

    .form-container .form-group input::placeholder {
        opacity: 0.5;
    }

    .form-container .form-group input:focus {
        outline: none;
        border-color: #e81cff;
    }

    .form-container .form-group textarea:focus {
        outline: none;
        border-color: #e81cff;
    }

    .form-container .form-submit-btn {
        display: flex;
        align-items: flex-start;
        justify-content: center;
        align-self: flex-start;
        font-family: inherit;
        color: #717171;
        font-weight: 600;
        width: 60%;
        background: #313131;
        border: 1px solid #414141;
        padding: 12px 16px;
        font-size: inherit;
        gap: 8px;
        margin-top: 8px;
        cursor: pointer;
        border-radius: 6px;
    }

    .form-container .form-submit-btn:hover {
        background-color: #fff;
        border-color: #fff;
    }
</style>

<section class="commonContainer flex flex-col md:flex-row gap-10 items-center  justify-between">
    <div class="text-white">
        <p class="text-[32px] md:text-[42px] xl:text-[52px] font-bold ">Let's work together.</p>

        <div>
            <p class="text-[24px] md:text-[32px] xl:text-[40px]">get in Touch with me</p>
            <p>Let's talk & make something amazing together.
                Start by saying hi!</p>
        </div>
        <div class="flex gap-6 text-2xl mt-5">
            <p><a href="https://github.com/rafin8990" class="contact-icon">
                    <i class="fa fa-github" aria-hidden="true"></i>
                </a></p>
            <p>

                <a href="https://www.linkedin.com/in/rafin-hossain/" class="contact-icon">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
            </p>
            <p>
                <a href="https://www.facebook.com/Rafin.Hossain.19614" class="contact-icon">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
            </p>
        </div>
    </div>
    <div class="form-container">
        <form class="form">
            <div class="form-group">
                <label for="email">Company Email</label>
                <input type="text" id="email" name="email" required="">
            </div>
            <div class="form-group">
                <label for="textarea">How Can We Help You?</label>
                <textarea name="textarea" id="textarea" rows="10" cols="50" required=""></textarea>
            </div>
            <button class="form-submit-btn" type="submit">Submit</button>
        </form>
    </div>
</section>