<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Staff ID Verification</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="Style.css">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card p-4 shadow">
      <h3 class="mb-3 text-center">Staff ID Verification</h3>
      <form id="verifyForm">
        <div class="form-group">
          <label for="staffId">Enter Staff ID</label>
          <input type="text" class="form-control" id="staffId" name="staffId" required>
        </div>
        <button type="submit" class="btn btn-primary">Verify</button>
      </form>
      <div id="result" class="mt-3"></div>
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>
