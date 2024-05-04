<script setup>
    
</script>

<template>
    <div id="contact">
        <div id="contact_heading">
            <h2>Contact</h2>
        </div>
        <div id="contact_body">
            <div id="map">map</div>
            <div id="contacts">
                <div class="item">
                    <img src="/src/assets/imgs/email_24px.png" alt="Email image">
                    <h6>contact@htran.tech</h6>
                    <img id="copy" src="/src/assets/imgs/Copy@2x.png" alt="Click to copy email">
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
        // background-color: $red;
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
                    }
                }
            }
        }
    }
    
</style>