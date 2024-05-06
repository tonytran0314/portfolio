<script setup>
    
</script>

<template>
    <div id="about">
        <div id="about_center">
            <div id="about_heading"><h2>About Me</h2></div>
            <div id="about_paragraph"><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
            <div id="tech_stacks">
                <h5>Tech Stacks:</h5>
                <div id="stacks">
                    <div id="two_stacks">
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
                    </div>
                    <div id="three_stacks" class="set">
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
                // padding: 0 16rem;

                p {
                    width: 75%;
                    // width: 32rem;
                    text-align: center;
                }
            }

            #tech_stacks {
                display: flex;
                gap: 2rem;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;

                #stacks {
                    display: flex;
                    gap: 3.5rem;
                    flex-wrap: wrap;
                    justify-content: center;

                    #two_stacks {
                        display: flex;
                        gap: 3.5rem;
                    }

                    #three_stacks {
                        display: flex;
                        justify-content: center;
                    }

                    .set {
                            display: flex;
                            gap: 1rem;
                            justify-content: center;
                        }
                }
            }
        }
    }

    @media only screen and (max-width: 1200px) {
        #about {
            height: 100vh;
            @include allWaysCenter();
        }
        #tech_stacks {
            display: flex;
            flex-direction: column;
            text-align: center;
        }
    }

    @media only screen and (max-width: 950px) {
        #stacks {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    }

    @media only screen and (max-width: 650px) {
        #about {
            height: 150vh;
        }
        #two_stacks {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
    }
    
</style>