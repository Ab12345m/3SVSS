document.getElementById("verifyForm").addEventListener("submit", function(e) {
    e.preventDefault();
    let staffId = document.getElementById("staffId").value;
  
    fetch("verify.php", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded"
      },
      body: "staffId=" + encodeURIComponent(staffId)
    })
    .then(response => response.text())
    .then(data => {
      document.getElementById("result").innerHTML = data;
    });
  });
  