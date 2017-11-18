<template>
	<div>
    <section class="">
      <nav class="navbar is-success" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="/">
            <img src="https://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">
          </a>
          <a class="navbar-item" href="#">
           <router-link to="/home">ໜ້າຫຼັກ</router-link>
          </a>
          <a class="navbar-item" href="#">
           <router-link to="/about">ກ່ຽວກັບ</router-link>
          </a>
          <button class="button navbar-burger">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </nav>
    </section> 
  </div>
</template>