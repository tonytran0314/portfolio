<script setup>
    
</script>

<template>
    <div id="hero_section">
        <div id="hero_center">
            <div id="left_col">
                <div id="greeting">
                    <h1>
                        Hello, I am <br />
                        <span>Huy Tran</span> <br />
                        a Web Developer 
                        <!-- a Web Developer -->
                        <!-- a Backend Developer -->
                        <!-- a Frontend Developer -->
                    </h1>
                </div>
                <div id="view_projects_button">
                    <button><h6>View my Projects</h6></button>
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
        height: calc(100vh - 5rem);
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

                span {
                    color: $red;
                }

                button {
                    background-color: $blue;
                    border: none;
                    cursor: pointer;
                    padding: 1rem 1.5rem;
                    border-radius: 0.5rem;
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
    
</style>