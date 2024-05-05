<script setup>
    
</script>

<template>
    <div id="menu">
        <div id="logo">
            <h3><span>&lt;</span>htran <span>/&gt;</span></h3>
        </div>
        <nav>
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
        // width: 82.5rem;
        width: auto;
        height: 5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 1.5rem;
        position: fixed;
        background-color: $baseColor;
        gap: 615px;

        #logo {
            width: 10.3125rem;
            span {
                color: $darkLabel;
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
    }
    
</style>