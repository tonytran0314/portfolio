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
