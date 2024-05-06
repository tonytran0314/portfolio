<script setup>
    
</script>

<template>
    <div id="project">
        <div id="project_center">
            <div id="project_heading">
                <h2>Projects</h2>
            </div>
            <div id="projects">

                <!-- Loop -->
                <div class="card">
                    <div class="project_image">
                        <a href="#" target="blank">
                            <img src="/src/assets/imgs/project_image.png" alt="Project Image">
                        </a>
                    </div>
                    <div class="project_details">
                        <div class="information">
                            <div class="title">
                                <h5>Project Name</h5>
                                <h6>Laravel, VueJS</h6>
                            </div>
                            <div class="description">
                                <p>Project description Project description Project description Project description Project description Project description Project description Project description Project description Project description Project description Project description Project description</p>
                            </div>
                        </div>
                        <div class="actions">
                            <button class="primary_button"><p>Live Demo</p></button>
                            <button class="secondary_button"><p>Source Code</p></button>
                        </div>
                    </div>
                </div>
                <!-- /Loop -->

            </div>
        </div>
    </div>
</template>

<style lang="scss" scoped>

    @import '/src/assets/variables';
    
    #project {
        width: 100%;
        max-width: 82.5rem;
        height: auto;
        background-color: $baseColor;
        padding: 4rem;

        #project_center {
            display: flex;
            flex-direction: column;
            gap: 4rem;

            #project_heading {
                text-align: center;
            }

            #projects {
                display: flex;
                flex-direction: column;
                gap: 2rem;
                
                .card {
                    display: flex;
                    gap: 4rem;
                    background-color: $boxColor;
                    border: 1px solid $blue;
                    border-radius: 1rem;
                    padding: 4rem 5rem;
                    width: auto;
                    justify-content: center;

                    .project_image {
                        img {
                            width: 100%;
                            height: auto;
                            border-radius: 1rem;
                            cursor: pointer;
                        }
                    }

                    .project_details {
                        display: flex;
                        flex-direction: column;
                        justify-content: space-between;
                        gap: 2rem;
                        
                        .information {
                            display: flex;
                            flex-direction: column;
                            gap: 1rem;
                        }

                        .actions {
                            display: flex;
                            gap: 2rem;

                            button {
                                border: none;
                                cursor: pointer;
                                border-radius: 0.5rem;
                                padding: 0.5rem 1rem;
                            }

                            .primary_button {
                                background-color: $blue;
                            }

                            .secondary_button {
                                background-color: $secondaryButton;
                            }
                        }
                    }
                }

                .reversed_card {
                    flex-direction: row-reverse; // for 2nd, 4th,... items
                }
            }
        }
    }
    
    @media only screen and (max-width: 1000px) {
        .card {
            display: flex;
            flex-direction: column;

            .project_image {
                text-align: center;

                img {
                    width: 100%;
                    height: auto;
                }
            }

            .project_details {
                text-align: center;

                .actions {
                    display: flex;
                    justify-content: center;
                }
            }
        }
    }

    @media only screen and (max-width: 576px) {
        #project {
            padding: 4rem 1rem;
        }

        .card {
            gap: 1rem;
            padding: 2rem !important;
        }
        
        .actions {
            display: flex;
            flex-direction: column;
        }
    }
</style>