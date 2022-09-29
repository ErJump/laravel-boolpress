<template>
    <div class="d-flex justify-content-center align-items-center w-100">
        <div class="outer">
            <div class="loader">
                <span></span>
                <p>Loading</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'LoaderComponent',
}
</script>

<style scoped>
    /* animation thanks to Junaid Amin Bhat */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background: #332233;
        width: 100%;
        min-height: 100vh;
        display: grid;
        place-items: center;
    }

    .loader {
        width: 130px;
        height: 130px;
        background: #121212;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
    }

    .loader span {
        display: inline-block;
        width: 40px;
        height: 40px;
        background: #FFF;
        border-radius: 50%;
        margin: 0 60px 0px 0;
        box-shadow: 60px 0px 0 #FFF;
        position: relative;
    }

    .loader span:after {
        content: '';
        width: 100%;
        height: 100%;
        background: #000;
        position: absolute;
        left: 0;
        top: 0;
        border-radius: 50%;
        box-shadow: 60px 0px 0 #000;
        animation: closeEyes 15s linear infinite;
    }

    @keyframes closeEyes {

        0%,
        2%,
        4%,
        49%,
        51%,
        50%,
        79%,
        81%,
        100% {
            height: 25%;
        }

        3%,
        50%,
        80% {
            height: 100%;
        }
    }

    .loader span:hover:after {
        height: 100%;
        transition: 0.4s;
    }

    .loader span::before {
        content: '';
        height: 20px;
        width: 20px;
        border-radius: 50%;
        background: #000;
        position: absolute;
        bottom: 6px;
        left: 3px;
        box-shadow: 62px 0 0 #000;
        animation: moveEyes 2s linear alternate infinite;
    }

    @keyframes moveEyes {
        to {
            left: 12px;
        }
    }

    p {
        flex: 0 0 100%;
        color: #FFF;
        font-family: sans-serif;
        text-transform: uppercase;
        font-weight: 600;
        text-align: center;
        letter-spacing: 3px;
        -webkit-background-clip: text;
        -webkit-text-fill-color: rgba(255, 255, 255, 0.1);
        background-image: linear-gradient(to left, transparent, #FF0, #f50, #FF0, transparent);
        background-repeat: no-repeat;
        background-size: 200%;
        background-position: -100%;
        animation: loadingText 2s linear alternate infinite;
    }

    @keyframes loadingText {
        from {
            background-position-x: 200%;
        }

        to {
            background-position-x: -100%;
        }
    }
</style>