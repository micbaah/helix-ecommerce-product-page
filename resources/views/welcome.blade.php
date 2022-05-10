<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>


</head>

<body x-data="main()" class="antialiased bg-gray-150 py-5 px-4 md:px-12 container mx-auto text-gray-800">
    <div class="flex flex-col">
        <div class="flex justify-center">
            @include('components.navigation')
        </div>
        <div class="flex justify-center">
            @include('components.details')
        </div>
    </div>
</body>

<script type="text/javascript">
    function main() {
        return {
            open: false,
            fabric: 2,
            products: [{
                    name: 'Charcoal sofa',
                    src: 'https://helixsleep-code-challenge.s3.amazonaws.com/sofa-charcoal.jpg',

                },
                {
                    name: 'Amber sofa',
                    src: 'https://helixsleep-code-challenge.s3.amazonaws.com/sofa-amber.jpg',

                },
                {
                    name: 'Red sofa',
                    src: 'https://helixsleep-code-challenge.s3.amazonaws.com/sofa-red.jpg',

                }
            ]
        }
    }
</script>

</html>