<script setup lang="ts">
    import { Typed } from "@duskmoon/vue3-typed-js";
    import type { TypedOptions } from "@duskmoon/vue3-typed-js";

    const options: TypedOptions = {
        strings: [
            "<span>A Web</span><span> Developer</span>", 
            "<span>A Backend</span><span> Developer</span>", 
            "<span>A Frontend</span><span> Developer</span>"
        ],
        loop: true,
        typeSpeed: 65,
        showCursor: false
    };
</script>

<template>
    <div id="hero_section">
        <div id="hero_center">
            <div id="left_col">
                <div id="greeting">
                    <h3>
                        Hello, I am
                    </h3>
                    <h1>
                        Huy Tran
                    </h1>
                    <h3>
                        <Typed :options="options">
                            <span class="typing"></span>
                        </Typed>
                        <!-- <span class="typing"><span>A Frontend</span> 
                        <span> Developer</span></span> -->
                    </h3>
                </div>
                <div id="view_projects_button">
                    <a href="#project"><h6>VIEW MY PROJECTS</h6></a>
                </div>
            </div>
            <div id="right_col">
                <img src="/src/assets/imgs/avatar.jpg" alt="Huy Tran avatar">
            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>

    @import '/src/assets/variables';

    #hero_section {
        width: 100%;
        max-width: 82.5rem;
        height: calc(100vh - 5rem);
        background-color: $baseColor;
        margin-top: 5rem;
        @include allWaysCenter();

        #hero_center {
            display: flex;
            gap: 5rem;

            #left_col {
                display: flex;
                flex-direction: column;
                gap: 1.5rem;

                #greeting {
                    width: 26.75rem;
                    height: 14rem;
                    h1 {
                        color: $red;
                    }

                }

                #view_projects_button {
                    a {
                        display: inline-block;
                        width: auto;
                        background-color: $blue;
                        border: none;
                        cursor: pointer;
                        padding: 1rem 1.5rem;
                        border-radius: 0.5rem;
                        text-decoration: none;
                    }
                }

            }

            #right_col {
                border-radius: 50%;
                -webkit-border-radius: 50%;
                -moz-border-radius: 50%;
                -khtml-border-radius: 50%;
                img {
                    border-radius: 50%;
                    -webkit-border-radius: 50%;
                    -moz-border-radius: 50%;
                    -khtml-border-radius: 50%;

                    width: 20rem;
                    height: 20rem;
                    border: 0.25rem solid $baseColor;
                    outline: 0.25rem solid $blue;
                }
            }
        }
    }
    @media only screen and (max-width: 1000px) {
        #hero_section {
            height: auto;
            padding: 4rem 0;

            #hero_center {
                flex-direction: column;
                align-items: center;
                
                #greeting, #view_projects_button {
                    text-align: center;
                }
            }
        }
    }
    @media only screen and (max-width: 576px) {
        #greeting {
            width: 100% !important;
            height: 18rem !important;
            .typing {
                display: flex;
                flex-direction: column;
            }
        }
        
        #right_col {
            img {
                width: 100% !important;
                height: auto !important;
            }
        }
    }
    
</style>