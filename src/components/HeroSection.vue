<script setup>
    
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
                        <span id="typing">
                            <span>A Frontend</span>
                            <span> Developer</span>
                        </span>
                        <!-- a Web Developer -->
                        <!-- a Backend Developer -->
                        <!-- a Frontend Developer -->
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
        background-color: $darkLabel;
        margin-top: 5rem;
        @include allWaysCenter();

        #hero_center {
            display: flex;
            gap: 5rem;

            #left_col {
                min-width: 26rem;
                display: flex;
                flex-direction: column;
                gap: 1.5rem;

                #greeting {
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
                img {
                    border-radius: 50%;
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
        #typing {
            display: flex;
            flex-direction: column;
        }
    }
    
</style>