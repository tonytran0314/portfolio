<script setup>
    
</script>

<template>
    <div id="hero_section">
        <div id="hero_center">
            <div id="left_col">
                <div id="greeting">
                    <h1>
                        Hello, I am <br />
                        <span id="name">Huy Tran</span> <br />
                        <span id="letter_a">a </span> 
                        <span id="typing">
                            <span>Frontend</span>
                            <span> Developer</span>
                        </span>
                        <!-- a Web Developer -->
                        <!-- a Backend Developer -->
                        <!-- a Frontend Developer -->
                    </h1>
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

<style lang="scss">

    @import '/src/assets/variables';

    #hero_section {
        width: 100%;
        height: 100vh;
        background-color: $blue;
        @include allWaysCenter();

        #hero_center {
            display: flex;
            gap: 5rem;

            #left_col {
                width: 40rem;
                min-width: 40rem;
                display: flex;
                flex-direction: column;
                gap: 1.5rem;

                #greeting {
                    #name {
                        color: $red;
                    }

                    #test {
                        display: flex;
                        flex-wrap: wrap;
                    }
                }

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

    @media only screen and (max-width: 1100px) {
        #hero_section {
            margin-top: 8rem;
            height: 120vh;
            
            #hero_center {
                display: flex;
                flex-direction: column;
                align-items: center;

                #greeting {
                    text-align: center;
                }

                #view_projects_button {
                    margin: auto;
                }
            }
        }
    }

    @media only screen and (max-width: 700px) {
        #letter_a {
            display: none;
        }

        #typing {
            display: flex;
            flex-direction: column;
        }
    }
    
</style>