                <!-- Footer -->
                <footer class="footer">
                    <div class="mx-auto justify-content-center justify-content-sm-between">
                        <span class="text-center text-center d-block">&copy; <script>document.write(new Date().getFullYear());</script> Dillion Property&reg; All Rights Reserved</span>
                    </div>
                </footer>

            </div>
        </div>
    </div>


    <script src="assets/js/delete.js"></script>
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/js/vendor.bundle.addons.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/template.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.4.0/clipboard.js"></script>
    <script src="assets/js/view.js"></script>
    
    <script>
        function copyToClipboard() {
          var copyText = document.getElementById("refferalLink").value;
          navigator.clipboard.writeText(copyText).then(() => {
              // Alert the user that the action took place.
              // Nobody likes hidden stuff being done under the hood!
              alert("Copied to clipboard");
          });
        }
    </script>
    <script>
        //Greet User
        var time = new Date().getHours();
        if (time < 4) {
            greeting = "You should be in bed 🙄!";
        }  else if (time < 12) {
            greeting = "Good morning, wash your hands 🌤";
        } else if (time < 16) {
            greeting = "It's lunch 🍛 time, what's on the menu!";
        } else {
            greeting = "Good Evening 🌙, how was your day?";
        }
        document.getElementById("greet").innerHTML = greeting;
    </script>
    
</body>

</html>
