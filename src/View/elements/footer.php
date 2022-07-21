</main>
<footer>
    <script>
        let nav = document.getElementsByClassName('nav')[0]
        console.log(nav)
        window.addEventListener('scroll', function(e) {
            if (window.scrollY > 610) {
                nav.classList.add('visible')
            } else {
                nav.classList.remove('visible')
            }
        })
    </script>
</footer>
</body>
</html>