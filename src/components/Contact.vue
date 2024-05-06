<script setup>
    import { useToast } from "vue-toastification";
    
    const toast = useToast()

    const copyEmail = () => {
        navigator.clipboard.writeText('contact@htran.tech')
        toast.success('Copied Successfully')
    }
</script>

<template>
    <div id="contact">
        <div id="contact_heading">
            <h2>Contact</h2>
        </div>
        <div id="contact_body">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35158.289338368464!2d-77.31350487315035!3d38.84200761495022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b64e96394b91cd%3A0x72326e785448640!2sFairfax%2C%20VA!5e0!3m2!1sen!2sus!4v1714884050663!5m2!1sen!2sus" width="680" height="480" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div id="contacts">
                <div class="item">
                    <img src="/src/assets/imgs/email_24px.png" alt="Email image">
                    <h6>contact@htran.tech</h6>
                    <img 
                        @click="copyEmail"
                        id="copy" 
                        src="/src/assets/imgs/Copy@2x.png" 
                        alt="Click to copy email">
                </div>
                <a href="#" target="blank" class="item">
                    <img src="/src/assets/imgs/Github.png" alt="Github image">
                    <h6>tonytran0314</h6>
                </a>
                <a href="#" target="blank" class="item">
                    <img src="/src/assets/imgs/Linkedin.png" alt="Linkedin image">
                    <h6>huy-tran-86b0602b1</h6>
                </a>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>

    @import '/src/assets/variables';

    #contact {
        background-color: $lightLabel;
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        gap: 5rem;
        @include allWaysCenter();

        #contact_body {
            display: flex;
            gap: 5rem;

            #map {
                width: 42.5rem;
                height: 30rem;
                background-color: $boxColor;
            }

            #contacts {
                display: flex;
                flex-direction: column;
                gap: 3rem;

                .item {
                    display: flex;
                    align-items: center;
                    gap: 1rem;

                    #copy {
                        width: 2rem;
                        cursor: pointer;
                    }
                }
            }
        }
    }
    
    @media only screen and (max-width: 1200px) {
        #contact {
            height: auto;
            padding: 4rem 0;

            #contact_body {
                flex-direction: column-reverse;

                #contacts {
                    .item {
                        padding: 0 32%;
                    }
                }
            }
        }
    }
    
    @media only screen and (max-width: 768px) {
        #map {
            display: none;
        }

        .item {
            padding: 0 !important;
        }
    }
</style>