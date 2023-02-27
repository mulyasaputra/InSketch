const newPost = document.querySelector("#post-card");
const testimonial = document.querySelector("#testimonialCard");
let isDown = false;
let scrollLeft;
let startX;

// Drag to slide Project
newPost.addEventListener("mousedown", (e) => {
    isDown = true;
    newPost.classList.add("active");
    startX = e.pageX - newPost.offsetLeft;
    scrollLeft = newPost.scrollLeft;
});
newPost.addEventListener("mouseleave", () => {
    isDown = false;
    newPost.classList.remove("active");
});
newPost.addEventListener("mouseup", () => {
    isDown = false;
    newPost.classList.remove("active");
});
newPost.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - newPost.offsetLeft;
    const walk = (x - startX) * 3; //scroll-fast
    newPost.scrollLeft = scrollLeft - walk;
});
// Drag to slide Project
testimonial.addEventListener("mousedown", (e) => {
    isDown = true;
    testimonial.classList.add("active");
    startX = e.pageX - testimonial.offsetLeft;
    scrollLeft = testimonial.scrollLeft;
});
testimonial.addEventListener("mouseleave", () => {
    isDown = false;
    testimonial.classList.remove("active");
});
testimonial.addEventListener("mouseup", () => {
    isDown = false;
    testimonial.classList.remove("active");
});
testimonial.addEventListener("mousemove", (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - testimonial.offsetLeft;
    const walk = (x - startX) * 3; //scroll-fast
    testimonial.scrollLeft = scrollLeft - walk;
});
