<style>
    .waviy {
        position: relative;
    }

    .waviy span {
        position: relative;
        display: inline-block;
        animation: flip 2s infinite;
        animation-delay: calc(.2s * var(--i))
    }

    @keyframes flip {

        0%,
        80% {
            transform: rotateY(360deg)
        }
    }


 
</style>

<header class="bg-header w-full min-h-[calc(100vh-100px)] text-white flex items-center justify-center">
    <div>
        <div
            class="mx-auto text-center text-sm px-4 py-1 border flex gap-2 items-center justify-center border-white w-fit rounded-full">
            <div class="w-2 h-2  md:w-3 md:h-3 animate-pulse transition-all bg-green-500 rounded-full">
            </div>
            <p> Available for work</p>
        </div>
        <div class="text-center mt-10">
            <h1 class="lineUp font text-[42px] md:text-[72px] lg:text-[86px] xl:text-[96px] leading-none ">Rafin Hossain
            </h1>

            <div class="font text-[#ACA0E8] text-[28px] md:text-[48px] lg:text-[52px] xl:text-[64px] flex ">
                <div class="waviy ml-5">
                    <span style="--i:1">F</span>
                    <span style="--i:2">u</span>
                    <span style="--i:3">l</span>
                    <span style="--i:4">l</span>
                </div>
                <div class="waviy ml-5">
                    <span style="--i:1">S</span>
                    <span style="--i:2">t</span>
                    <span style="--i:3">a</span>
                    <span style="--i:4">c</span>
                    <span style="--i:5">k</span>
                </div>
                <div class="waviy ml-5">
                    <span style="--i:1">D</span>
                    <span style="--i:2">e</span>
                    <span style="--i:3">v</span>
                    <span style="--i:4">e</span>
                    <span style="--i:5">l</span>
                    <span style="--i:6">o</span>
                    <span style="--i:7">p</span>
                    <span style="--i:8">e</span>
                    <span style="--i:8">r</span>
                </div>



            </div>

        </div>
        <div
            class="mx-auto text-center px-6 py-2  font-bold border flex gap-2 items-center justify-center bg-white text-black mt-5 w-fit rounded-full">

            <p><a target="blank" href="mailto:someone@example.com">rafin.hossain.8990@gmail.com</a></p>
        </div>
    </div>
</header>




