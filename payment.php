<html>

<head>
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<body>
  <script>
    var options = {
      "key": "rzp_test_5sWTodJ4OCcxSk",
      "amount": 3000,
      "currency": "INR",
      "description": "Acme Corp",
      "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
      "prefill": {
        "email": "gaurav.kumar@example.com",
        "contact": "+919900000000"
      },
      "config": {
        "display": {
          "blocks": {
            "utib": {
              "name": "Pay using Axis Bank",
              "instruments": [
                {
                  "method": "card",
                  "issuers": ["UTIB"]
                },
                {
                  "method": "netbanking",
                  "banks": ["UTIB"]
                },
                {
                  "method": "upi"
                }
              ]
            },
            "other": {
              "name": "Other Payment modes",
              "instruments": [
                {
                  "method": "card",
                  "issuers": ["ICIC"]
                },
                {
                  "method": "netbanking"
                }
              ]
            }
          },
          "sequence": ["block.utib", "block.other"],
          "preferences": {
            "show_default_blocks": false
          }
        }
      },
      "handler": function (response) {
        var payment_main_id = response.razorpay_payment_id;
        var xhr = new XMLHttpRequest();
        xhr.open("POST", "store_payment", true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function () {
          if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
              alert("Payment Successful! Your payment id is: " + response.razorpay_payment_id);
              window.location.href = "index.php";
            } else {
              alert("Error storing payment details");
            }
          }
        };

        var data = "razorpay_payment_id=" + payment_main_id + "&course_id=" + course_id + "&couponCode=" + couponCode + "&courseAmount=" + courseAmount; // Make sure the variable name matches the one in your PHP script
        xhr.send(data);
      },
      "modal": {
        "ondismiss": function () {
          if (confirm("Are you sure you want to close the form?")) {
            // console.log("Checkout form closed by the user");
            window.location.href = "index.php";
          } else {
            console.log("Complete the Payment");
          }
        }
      }
    };
    var rzp1 = new Razorpay(options);
    rzp1.open();
  </script>
</body>

</html>