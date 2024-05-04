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
                    <a href="">
                        <h6>Home</h6>
                    </a>
                </li>
                <li>
                    <a href="">
                        <h6>About Me</h6>
                    </a>
                </li>
                <li>
                    <a href="">
                        <h6>Projects</h6>
                    </a>
                </li>
                <li>
                    <a href="">
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
        height: 5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 1.5rem;
        background-color: $red;

        #logo {
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