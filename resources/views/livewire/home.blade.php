<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Example</h2>
                    </div>
                    <div class="card-body">
                        @livewire('users')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>
