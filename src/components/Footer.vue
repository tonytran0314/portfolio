<script setup>
    
</script>

<template>
    <div id="footer">
        <div id="copyright">
            <p>Copyright © 2024. All rights are reserved</p>
        </div>
        <div id="social_links">
            <a href="#" target="blank"><img src="/src/assets/imgs/Linkedin.png" alt="LinkedIn"></a>
            <a href="#" target="blank"><img src="/src/assets/imgs/Github.png" alt="Github"></a>
        </div>
    </div>
</template>

<style lang="scss" scoped>

    @import '/src/assets/variables';

    #footer {
        display: flex;
        justify-content: center;
        gap: 20rem;
        padding: 2.5rem 0;
        background-color: $blue;

        #social_links {
            display: flex;
            gap: 1.5rem;
        }
    }

    @media only screen and (max-width: 970px) {
        #footer {
            display: flex;
            flex-direction: column;
            text-align: center;
            gap: 3rem;

            #social_links {
                display: flex;
                justify-content: center;
            }
        }
    }
</style>