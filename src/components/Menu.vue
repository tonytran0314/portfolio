<script setup>
    import { ref } from 'vue';

    const MOBILE_SCREEN_SIZE = 768;
    const isMobile = ref(false)

    const checkScreen = () => {
        isMobile.value = (window.innerWidth <= MOBILE_SCREEN_SIZE) ? true : false
    }

    window.addEventListener('resize', checkScreen)

</script>

<template>
    <div id="menu">
        <div id="logo">
            <img src="/src/assets/imgs/logo.png" alt="htran logo">
        </div>
        
        <div v-if="isMobile" id="hamburger">
            <svg width="28px" height="28px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 18L20 18" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>
                <path d="M4 12L20 12" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>
                <path d="M4 6L20 6" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round"/>
            </svg>
        </div>
        <nav v-else>
            <ul>
                <li>
                    <a href="#">
                        <h6>Home</h6>
                    </a>
                </li>
                <li>
                    <a href="#about">
                        <h6>About Me</h6>
                    </a>
                </li>
                <li>
                    <a href="#project">
                        <h6>Projects</h6>
                    </a>
                </li>
                <li>
                    <a href="#contact">
                        <h6>Contact</h6>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</template>

<style lang="scss" scoped>

    @import '/src/assets/variables';

    #menu {
        width: 100%;
        max-width: 82.5rem;
        height: 5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 1.5rem;
        position: fixed;
        gap: 2rem;
        background-color: $red;

        #logo {
            img {
                width: 10rem;
            }
        }

        nav {

            ul {
                display: flex;
                gap: 4rem;

                li {
                    list-style-type: none;

                    a {
                        text-decoration: none;
                    }
                }
            }
        }

        #hamburger {
            display: flex;
            align-items: center;
            border-radius: 0.2rem;
            border: 1px solid $white;
            padding: 0.2rem;
            cursor: pointer;
        }
    }
    
</style>