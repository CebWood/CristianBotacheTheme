document.addEventListener("DOMContentLoaded", function () {
    gsap.from("h1", {
        duration: 1,
        y: -50,
        opacity: 0,
        ease: "power2.out",
        onStart: () => console.log("Animación GSAP iniciada")
    });
});