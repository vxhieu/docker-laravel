<template>
    <div class="loading-wrap">
        <div class="loading-indicator">
            <img src="https://i.gifer.com/XOsX.gif" alt="...Loading" />
        </div>
    </div>
</template>
<style scoped>
.loading-wrap {
    top: 0;
    left: 0;
    position: absolute;
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: rgba(0, 0, 0, 0.5);
    z-index: 10;
}
.loading-wrap img{
    width: 300px;
}
</style>
