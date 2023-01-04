import '@/js/bootstrap';

const h1 = document.querySelector('h1');

if (h1) {
    h1.onclick = () => {
        console.log('Hello World!');
    }
}
