<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css" />
    <title>Income | Outcome</title>
</head>

<body class="bg-dark">
    <div class="container">

        {{$slot}}

        <!-- History And Chert Diagram  -->

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById("myChart");

            new Chart(ctx, {
                type: "bar",
                data: {
                    labels: [
                        "Red",
                        "Blue",
                        "Yellow",
                        "Green",
                        "Purple",
                        "Orange",
                    ],
                    datasets: [
                        {
                            label: "ဝင်ငွေ",
                            data: [12, 19, 3, 5, 2, 3],
                            borderWidth: 1,
                            backgroundColor: "#26AF74",
                        },
                        {
                            label: "ထွက်ငွေ",
                            data: [5, 10, 5, 2, 13, 2],
                            borderWidth: 1,
                            backgroundColor: "#F5365C",
                        },
                    ],
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                        },
                    },
                },
            });
    </script>
</body>

</html>