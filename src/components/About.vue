<script setup>
    
</script>

<template>
    <div id="about">
        <div id="about_center">
            <div id="about_heading"><h2>About Me</h2></div>
            <div id="about_paragraph"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
            <div id="tech_stacks">
                <h5>Teck Stacks:</h5>
                <div id="stacks">
                    <div class="set">
                        <div class="item"><img src="/src/assets/imgs/Laravel.png" alt="Laravel"></div>
                        <div class="item"><img src="/src/assets/imgs/VueJS.png" alt="VueJS"></div>
                    </div>
                    <div class="set">
                        <div class="item"><img src="/src/assets/imgs/Postman.png" alt="Postman"></div>
                        <div class="item"><img src="/src/assets/imgs/MySQL.png" alt="MySQL"></div>
                    </div>
                    <div class="set">
                        <div class="item"><img src="/src/assets/imgs/Sass.png" alt="Sass"></div>
                        <div class="item"><img src="/src/assets/imgs/Bootstrap.png" alt="Bootstrap"></div>
                    </div>
                    <div class="set">
                        <div class="item"><img src="/src/assets/imgs/HTML.png" alt="HTML"></div>
                        <div class="item"><img src="/src/assets/imgs/CSS.png" alt="CSS"></div>
                        <div class="item"><img src="/src/assets/imgs/Javascript.png" alt="Javascript"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>

    @import '/src/assets/variables';

    #about {
        width: 100%;
        background-color: $red;
        height: 100vh;
        @include allWaysCenter();

        #about_center {
            display: flex;
            flex-direction: column;
            gap: 3.5rem;

            #about_heading {
                text-align: center;
            }

            #about_paragraph {
                display: flex;
                justify-content: center;

                p {
                    width: 32rem;
                    text-align: center;
                }
            }

            #tech_stacks {
                display: flex;
                gap: 2rem;
                justify-content: center;
                align-items: center;

                #stacks {
                    display: flex;
                    gap: 3.5rem;

                    .set {
                        display: flex;
                        gap: 1rem;
                    }
                }
            }
        }
    }
    
</style>