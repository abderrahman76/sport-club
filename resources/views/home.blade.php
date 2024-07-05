<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ env('APP_NAME') }}</title>

    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/css/tether.min.css'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="wrapper">
        <div class="overlay"></div>

@include('layouts.navbar')

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger animated fadeInLeft is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
                <span class="hamb-middle"></span>
                <span class="hamb-bottom"></span>
            </button>
            <section>
                <article>
                    <ul class="panels">
                        <li class="panel">
                            <a href="{{ route('sports') }}">
                                <span>
                                    sports
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 442">
                                        <g fill="none" fill-rule="evenodd">
                                            <g fill-rule="nonzero" class="fill">
                                                <path
                                                    d="M378.608 255.994c-34.448-41.592-77.99-64.498-122.608-64.498-44.618 0-88.161 22.906-122.607 64.498-30.964 37.385-49.448 84.501-49.448 126.035 0 20.176 6.168 35.544 18.332 45.679 12.006 10.004 27.857 13.387 45.541 13.387 18.817 0 39.711-3.832 60.24-7.598 17.939-3.291 34.883-6.399 47.943-6.399 11.272 0 27.165 2.95 43.988 6.073 39.317 7.3 83.881 15.572 109.624-5.832 12.238-10.175 18.443-25.42 18.443-45.31 0-41.534-18.484-88.65-49.448-126.035Zm11.825 148.277c-14.923 12.409-53.762 5.198-84.97-.595-18.221-3.383-35.431-6.578-49.464-6.578-15.789 0-34.036 3.348-53.356 6.892-29.931 5.49-67.181 12.324-81.165.671-1.864-1.553-7.536-6.279-7.536-22.633 0-34.246 16.306-75.208 42.553-106.899 28.645-34.586 63.983-53.634 99.503-53.634s70.858 19.048 99.503 53.634c26.248 31.691 42.553001 72.653 42.553001 106.899.002999 15.905-5.735001 20.676-7.621001 22.243ZM382.13 30.146C369.526 11.563 351.478.907 332.613.907c-18.866 0-36.913 10.658-49.517 29.239-11.578 17.071-17.955 39.489-17.955 63.125 0 23.636 6.376 46.054 17.955 63.125 12.604 18.582 30.652 29.24 49.517 29.24 18.866 0 36.913-10.658 49.517-29.24 11.578-17.071 17.955-39.489 17.955-63.125 0-23.636-6.376-46.055-17.955-63.125Zm-24.827 109.411c-4.073 6.005-12.697 16.08-24.69 16.08-11.993 0-20.616-10.074-24.69-16.08-8.124-11.978-12.783-28.849-12.783-46.286 0-17.438 4.66-34.308 12.783-46.286 4.073-6.005 12.697-16.08 24.69-16.08 11.993 0 20.617 10.074 24.69 16.08 8.124 11.978 12.783 28.849 12.783 46.286-.001 17.437-4.659 34.308-12.783 46.286ZM228.905 30.145C216.301 11.562 198.254.905 179.388.905c-18.866 0-36.914 10.658-49.517 29.24-11.578 17.071-17.955 39.489-17.955 63.125 0 23.636 6.376 46.054 17.955 63.125 12.604 18.583 30.651 29.241 49.517 29.241 18.866 0 36.913-10.658 49.517-29.241 11.578-17.071 17.955-39.488 17.955-63.125 0-23.636-6.377-46.055-17.955-63.125Zm-24.829 109.412c-4.073 6.005-12.697 16.08-24.689 16.08-11.993 0-20.617-10.075-24.69-16.08-8.124-11.978-12.783-28.849-12.783-46.286 0-17.438 4.66-34.308 12.783-46.286 4.073-6.005 12.697-16.08 24.69-16.08 11.993 0 20.616 10.074 24.689 16.08 8.124 11.978 12.783 28.849 12.783 46.286s-4.659 34.308-12.783 46.286ZM509.019 175.133c-5.081-17.284-15.972-29.843-30.665-35.362-11.824-4.441-25.171-3.688-37.583 2.121-17.105 8.004-31.086 24.532-38.356 45.345-5.941 17.008-6.682 34.985-2.085 50.622 5.081 17.284 15.972 29.843 30.666 35.362 5.085 1.91 10.45 2.859 15.902 2.859 7.227 0 14.607-1.669 21.682-4.98 17.105-8.004 31.086-24.532 38.356-45.344v-.001c5.94-17.007 6.681-34.985 2.083-50.622Zm-30.405 40.729c-4.556 13.041-13.061 23.533-22.75 28.067-3.563 1.666-8.938 3.229-14.32 1.208-12.988-4.879-18.04-27.313-10.81-48.007 4.556-13.041 13.061-23.533 22.751-28.068 2.362-1.105 5.52-2.164 8.948-2.164 1.744 0 3.558.274 5.371.955 12.988 4.88 18.04 27.314 10.81 48.009ZM109.587 187.235c-7.271-20.813-21.252-37.34-38.356-45.344-12.413-5.809-25.761-6.561-37.584-2.121-14.694 5.52-25.585 18.079-30.666 35.362-4.597 15.637-3.856 33.615 2.085 50.622v.001c7.272 20.813 21.252 37.34 38.356 45.344 7.076 3.311 14.455 4.98 21.682 4.98 5.452 0 10.818-.95 15.902-2.859 14.696-5.52 25.586-18.079 30.667-35.362 4.595-15.636 3.854-33.614-2.086-50.623Zm-39.131 57.902c-5.381 2.021-10.757.458-14.319-1.208-9.689-4.534-18.195-15.026-22.75-28.067v.001c-7.229-20.695-2.178-43.128 10.81-48.008 5.38-2.021 10.757-.458 14.32 1.208 9.69 4.535 18.195 15.027 22.75 28.067 7.229 20.695 2.177 43.128-10.811 48.007Z" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                            <img src="https://i.pinimg.com/564x/82/e6/d5/82e6d5931001565fbb1b8f75cf551109.jpg"
                                alt="image of lions" />
                        </li>
                        <li class="panel">
                            <a href="/events">
                                <span>
                                    events
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 452">
                                        <g fill="none" fill-rule="evenodd">
                                            <g fill-rule="nonzero" class="fill">
                                                <path
                                                    d="M234.429 82.065H130.804c-4.142 0-7.5 3.358-7.5 7.5 0 4.142 3.358 7.5 7.5 7.5h103.624c4.142 0 7.5-3.358 7.5-7.5 0-4.142-3.357-7.5-7.499-7.5ZM375.281 334.364h-55.476c-4.142 0-7.5 3.358-7.5 7.5 0 4.142 3.358 7.5 7.5 7.5h55.476c4.142 0 7.5-3.358 7.5-7.5 0-4.142-3.358-7.5-7.5-7.5Z" />
                                                <path
                                                    d="M476.245 106.326c3.624 2.004 8.188.691 10.193-2.933 14.702-26.581 23.534-53.597 25.54-78.128.369-4.544-3.546-8.457-8.089-8.086-28.616 2.34-59.95 13.913-89.961 32.568-3.246-13.176-7.346-23.47-12.447-31.253C393.644 6.536 383.42.471 371.094.471H43.788c-15.5 0-27.203 4.981-34.78 14.807C-5.7 34.345 1.95 64.338 2.283 65.606c.866 3.296 3.846 5.595 7.254 5.595h66.02c6.706 42.678 6.364 103.367 6.047 159.227-.161 28.362-.328 57.689.353 84.417.105 4.14 3.54 7.403 7.688 7.307 4.141-.105 7.412-3.547 7.307-7.688-.674-26.494-.508-55.702-.348-83.949.38-66.939.746-131.33-8.622-174.825-.892-4.139-1.907-8.261-3.094-12.326-3.305-11.354-7.507-20.805-12.848-27.891h299.054c13.59 0 23.251 14.091 29.469 43.043-8.094 5.693-15.988 11.883-23.643 18.491-17.119 14.777-32.926 31.627-46.52 49.891H130.804c-4.142 0-7.5 3.358-7.5 7.5 0 4.142 3.358 7.5 7.5 7.5h189.147c-5.536 8.5-10.51 17.126-14.865 25.784H130.804c-4.142 0-7.5 3.358-7.5 7.5 0 4.142 3.358 7.5 7.5 7.5h167.362c-3.623 8.647-6.594 17.272-8.887 25.784H130.804c-4.142 0-7.5 3.358-7.5 7.5 0 4.142 3.358 7.5 7.5 7.5h155.121c-.625 3.574-1.103 7.112-1.46 10.615l-23.164 23.164c-2.929 2.929-2.929 7.678 0 10.606 2.836 2.835 7.689 2.918 10.607 0l23.154-23.154c13.906-1.411 27.557-4.828 40.704-9.524 13.532-4.834 26.56-11.046 38.995-18.236 11.985-6.93 23.434-14.783 34.292-23.37-.005 12.275-.075 24.709-.145 36.855-.306 53.904-.622 109.516 4.894 150.379H165.053c-4.753 0-8.359 4.542-7.302 9.168.017.074.025.149.044.223.002.009.014.056.031.124.416 1.733 5.488 24.014-3.762 36.745-.027.038-.054.076-.082.114-5.326 7.232-14.743 9.402-23.272 9.354-18.227-.103-28.873-30.304-32.544-92.32-.245-4.134-3.792-7.285-7.93-7.043-4.135.245-7.289 3.795-7.043 7.93 2.933 49.554 10.996 106.434 47.611 106.434H458.11c15.5 0 27.203-4.981 34.78-14.807 14.706-19.068 7.056-49.061 6.723-50.329-.866-3.296-3.846-5.595-7.254-5.595h-63.408c-5.665-39.92-5.35-95.978-5.042-150.293.093-16.359.187-33.231.121-49.581 4.17-3.744 8.269-7.622 12.279-11.632 12.512-12.512 23.876-25.94 33.773-39.912 2.394-3.38 1.595-8.061-1.785-10.456-3.38-2.394-8.061-1.595-10.456 1.785-9.41 13.283-20.223 26.061-32.139 37.976-9.394 9.394-19.414 18.179-29.979 26.235-25.809 19.67-53.433 33.798-79.686 40.703-.845.221-1.694.428-2.542.637L446.78 92.979c2.929-2.929 2.929-7.678 0-10.606-2.929-2.929-7.678-2.929-10.606 0L302.89 215.656c.191-.775.374-1.548.578-2.325 7.655-29.298 22.357-56.044 40.745-79.88.007-.009.013-.017.02-.026.057-.075.116-.149.173-.223 17.148-22.423 37.502-42.413 60.249-59.131 29.873-21.906 61.914-36.383 91.291-40.864-3.054 19.957-10.79 41.513-22.634 62.926-2.005 3.625-.692 8.188 2.933 10.193ZM72.724 56.198H15.738v.001c-.352-2.425-.672-5.473-.74-8.809-.138-6.824.775-16.352 5.911-22.984 4.598-5.938 11.954-8.863 22.48-8.935l4.91.54c.071.017.141.035.211.053 9.918 2.584 17.662 14.494 23.093 35.477.4 1.546.769 3.1 1.121 4.657Zm413.418 339.603c1.138 7.949 1.966 22.564-5.128 31.762-4.654 6.034-12.146 8.967-22.903 8.967H165.733c9.646-12.683 9.518-30.105 8.252-40.729h312.157Z" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                            <img src="https://sport.news.am/static/news/b/2017/10/83075.jpg"
                                alt="Marthin Luther King" />
                        </li>
                        <li class="panel">
                            <a href="/rewards">
                                <span>
                                    rewards
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 449 480">
                                        <g fill="none" fill-rule="evenodd">
                                            <g fill-rule="nonzero" class="fill">
                                                <path
                                                    d="M437.43 100.47c-20.951-27.931-67.711-35.652-128.887-21.514-1.312-3.145-2.667-6.234-4.064-9.243 10.207722-11.0258771 11.364292-27.6706189 2.779584-40.0022996C298.673876 17.3790198 282.662728 12.6855971 268.779 18.431 255.06 6.21 240.358 0 225 0c-17.639 0-34.385 8.137-49.772 24.185-12.89 13.442-24.228 31.855-33.773 54.77C80.279 64.819 33.52 72.54 12.571 100.469-11.258 132.233 2.374 184.092 48.938 240c-2.54 3.05-4.999 6.106667-7.377 9.17-13.8833853-3.868625-28.6389965 2.028171-36.0323433 14.399633C-1.86469009 275.941095-.06843788 291.729501 9.915 302.124c-12.76 31.346-11.878 58.02 2.655 77.4 14.094 18.789 39.858 28.436 73.84 28.435 16.534 0 35.021-2.293 55.045-6.921 9.543 22.915 20.883 41.329 33.773 54.771C190.615 471.863 207.361 480 225 480c17.639 0 34.385-8.137 49.772-24.185 12.888-13.441 24.227-31.851 33.77-54.763 4.279333.988667 8.505667 1.872667 12.679 2.652 1.823485 15.554167 14.63634 27.503357 30.279756 28.238716 15.643416.735358 29.520698-9.959195 32.795244-25.273716 23.9-3.246 42.2-12.549 53.133-27.138 23.828-31.763 10.2-83.622-36.365-139.531 46.563-55.91 60.193-107.768 36.366-139.53Zm-12.8 9.6c18.536 24.709 5.376 69.34-34.231 117.694-17.645667-19.213501-36.877583-36.907318-57.492-52.894-3.758-29.113-10.125-56.789-18.577-80.817 52.908-11.8 93.795-5.987 110.3 16.018v-.001Zm-125.9 271.985c-18.815084-5.249905-37.233991-11.828086-55.118-19.685 17.304501-8.932707 34.137463-18.75071 50.432-29.415 7.024667-4.594 13.920667-9.324 20.688-14.19-3.448817 21.528935-8.802507 42.709108-15.998 63.291l-.004-.001Zm-147.468 0c-7.195642-20.581988-12.54999-41.762114-16-63.291 6.752 4.85 13.648333 9.58 20.689 14.19 16.294336 10.664919 33.127314 20.483266 50.432 29.416-17.883758 7.856957-36.302312 14.435465-55.117 19.686l-.004-.001Zm0-284.112c18.815084 5.249905 37.233991 11.828086 55.118 19.685-17.304501 8.932707-34.137463 18.75071-50.432 29.415-7.025333 4.594-13.921333 9.324-20.688 14.19 3.451537-21.528507 8.807904-42.70801 16.006-63.289l-.004-.001Zm13.442 221.62c-11.216-7.334-22.14-15.059-32.532-22.988-4.23466-37.598473-4.23466-75.553527 0-113.152 10.392-7.929 21.317-15.655 32.532-22.989 19.35195-12.674331 39.491369-24.103458 60.296-34.218 20.803569 10.114861 40.941679 21.544671 60.292 34.22 11.216 7.334 22.14 15.059 32.532 22.988 2.124067 18.78374 3.184426 37.672549 3.176051 56.576.008516 18.903455-1.051843 37.792272-3.176051 56.576-10.392 7.929-21.317 15.655-32.532 22.989-19.35063 12.674525-39.488709 24.103983-60.292 34.219-20.803569-10.114861-40.941679-21.544671-60.292-34.22l-.004-.001Zm-49.965-36.889C98.8637893 269.53245 83.9496743 255.271337 70.111 240c13.8413121-15.272367 28.7570175-29.535408 44.633-42.68C113.594 211.363 113 225.648 113 240s.594 28.632 1.743 42.675l-.004-.001Zm183.995-184.73c7.195642 20.581988 12.54999 41.762114 16 63.291-6.752-4.85-13.648333-9.58-20.689-14.19-16.294336-10.664919-33.127314-20.483266-50.432-29.416 17.885084-7.856794 36.30498-14.43497 55.121-19.685Zm36.523 99.381c15.876623 13.141723 30.792079 27.403175 44.632 42.675-13.841312 15.272367-28.757018 29.535408-44.633 42.68C336.406 268.637 337 254.352 337 240s-.594-28.632-1.743-42.675ZM297 48c0 8.836556-7.163444 16-16 16s-16-7.163444-16-16 7.163444-16 16-16c8.832216.0104696 15.98953 7.1677843 16 16Zm-72-32c10.468 0 20.791 4.158 30.772 12.349-8.646027 11.0822472-9.042336 26.5107931-.976667 38.0223085C262.861001 77.8828239 277.497617 82.778388 290.866 78.436c.676 1.4926667 1.342667 3.0026667 2 4.53-23.279608 6.6419084-45.977216 15.176003-67.866 25.517-21.89219-10.3432399-44.5935-18.8790154-67.877-25.522C175.362 40.276 199.834 16 225 16ZM25.37 110.07c16.505-21.999951 57.39-27.818 110.3-16.016-8.45 24.024-14.817 51.694-18.575 80.807-20.6134269 15.990779-39.8458373 33.686444-57.494 52.9C19.994 179.412 6.833 134.78 25.37 110.07ZM33 264c8.836556 0 16 7.163444 16 16s-7.163444 16-16 16-16-7.163444-16-16c.0104696-8.832216 7.1677843-15.98953 16-16Zm-7.629 105.931c-12.957-17.282-8.8-40.6-1.618-59.3 14.0634456 4.253379 29.2158786-1.621442 36.736547-14.243299C68.0102153 283.765843 65.9645902 267.643649 55.53 257.3c1.3266667-1.69 2.683-3.379333 4.069-5.068 17.645943 19.215774 36.8785476 36.911617 57.494 52.9 3.758 29.113 10.125 56.789 18.577 80.817-52.907 11.799-93.794 5.985-110.299-16.018ZM225 464c-25.166 0-49.638-24.276-67.877-66.962 23.283664-6.642071 45.985021-15.17753 67.877-25.521 21.892394 10.342758 44.593664 18.878519 67.877 25.522C274.638 439.724 250.166 464 225 464Zm128-48c-8.836556 0-16-7.163444-16-16s7.163444-16 16-16 16 7.163444 16 16c-.01047 8.832216-7.167784 15.98953-16 16Zm71.627-46.067c-8.1 10.81-22.207 17.886-41.033 20.686-3.964325-12.915954-15.613412-21.950497-29.109571-22.57616-13.496159-.625663-25.931144 7.292375-31.073429 19.78616-2.99-.568-6.016667-1.196333-9.08-1.885 8.45-24.023 14.816-51.693 18.574-80.805 20.613702-15.990455 39.846138-33.686143 57.494-52.9 39.607 48.349 52.767 92.981 34.228 117.694Z" />
                                                <path
                                                    d="M225 176c-35.346224 0-64 28.653776-64 64s28.653776 64 64 64 64-28.653776 64-64c-.039679-35.329775-28.670225-63.960321-64-64Zm0 112c-26.509668 0-48-21.490332-48-48s21.490332-48 48-48 48 21.490332 48 48c-.030309 26.497103-21.502897 47.969691-48 48Z" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                            <img src="https://i.pinimg.com/736x/55/13/df/5513dfeb3728353a941d2139c15d4555--at-home-gym-in-home-gym-ideas.jpg"
                                alt="image of spaceship" />
                        </li>
                        <li class="panel">
                            <a href="{{ route('centres') }}">
                                <span>
                                    centres
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 510 513">
                                        <g fill="none" fill-rule="evenodd">
                                            <g fill-rule="nonzero" class="fill">
                                                <path
                                                    d="m508.3 97.152-20.81-41.446c-2.704-5.388-8.129-8.734-14.157-8.734h-189.78V15.478C283.553 6.943 276.61 0 268.076 0h-42.861c-8.534 0-15.478 6.943-15.478 15.478v31.494h-53.983c-4.143 0-7.5 3.358-7.5 7.5 0 4.142 3.357 7.5 7.5 7.5h317.579c.32 0 .607.177.752.464l20.811 41.447c.119.237.119.519.001.756l-20.813 41.448c-.144.286-.431.463-.751.463H37.926c-.314 0-.602-.173-.746-.452l-21.645-41.449c-.127-.243-.127-.534.001-.778l21.643-41.446c.146-.28.433-.453.747-.453h85.865c4.143 0 7.5-3.358 7.5-7.5 0-4.142-3.357-7.5-7.5-7.5H37.926c-5.92 0-11.301 3.26-14.043 8.509L2.241 96.927c-2.399 4.592-2.398 10.076-.001 14.667l21.645 41.449c2.741 5.248 8.122 8.507 14.042 8.507h171.811v42.538l-115.59 10.704c-3.345.31-6.401 2.197-8.174 5.045l-23.146 37.146c-2.642 4.239-2.048 9.694 1.443 13.268l30.598 31.296c2.036 2.082 4.857 3.249 7.747 3.249.438 0 .88-.027 1.32-.082l105.8-13.243v48.016l-106.942-5.784h-.001c-5.556-.299-10.308 3.939-10.695 9.445l-3.293 46.886c-.385 5.505 3.774 10.369 9.271 10.844l111.66 9.649v94.391c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-93.095l43.816 3.786v25.233c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-23.937l82.724 7.148c.287.025.573.037.86.037 2.853 0 5.627-1.215 7.554-3.344l23.75-26.23c3.154-3.485 3.518-8.638.88-12.533l-19.851-29.293c-1.772-2.615-4.714-4.278-7.87-4.45l-88.047-4.762V282.23l150.777-18.872c5.817-.728 10.034-6.062 9.399-11.891l-6.291-57.792c-.635-5.829-5.911-10.133-11.737-9.59l-80.089 7.417c-4.125.382-7.158 4.035-6.776 8.16.382 4.125 4.035 7.15 8.159 6.777l75.979-7.037 5.397 49.584-324.232 40.583-26.837-27.449 20.303-32.583 120.399-11.15h.002l97.154-8.997c4.125-.382 7.158-4.035 6.776-8.16-.382-4.125-4.032-7.157-8.159-6.777l-30.223 2.799V161.55h189.779c6.028 0 11.453-3.346 14.156-8.733l20.813-41.448c2.235-4.451 2.235-9.765-.001-14.217ZM224.737 15.478c0-.264.214-.478.478-.478h42.861c.264 0 .478.214.478.478v31.494h-43.816V15.478h-.001ZM384.776 387.26l-19.597 21.645-88.358-7.635h-.003l-172.717-14.925 2.627-37.405 261.669 14.151 16.379 24.169Zm-116.223-44.592-43.816-2.37v-50.705l43.816-5.484v58.559Zm0-144.027-43.816 4.058V161.55h43.816v37.091Z" />
                                                <path
                                                    d="M48.893 104.261c0 12.292 10 22.292 22.292 22.292 12.292 0 22.292-10 22.292-22.292 0-12.292-10-22.292-22.292-22.292-12.292 0-22.292 10-22.292 22.292Zm29.584 0c0 4.021-3.271 7.292-7.292 7.292s-7.292-3.271-7.292-7.292 3.271-7.292 7.292-7.292 7.292 3.271 7.292 7.292ZM459.397 104.261c0-12.292-10-22.292-22.292-22.292-12.292 0-22.292 10-22.292 22.292 0 12.292 10 22.292 22.292 22.292 12.292 0 22.292-10 22.292-22.292Zm-29.584 0c0-4.021 3.271-7.292 7.292-7.292s7.292 3.271 7.292 7.292-3.271 7.292-7.292 7.292-7.292-3.271-7.292-7.292ZM276.053 465.306c-4.143 0-7.5 3.358-7.5 7.5v32.113c0 4.142 3.357 7.5 7.5 7.5s7.5-3.358 7.5-7.5v-32.113c0-4.142-3.357-7.5-7.5-7.5Z" />
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                            <img src="https://media.istockphoto.com/id/937829674/photo/gym-room-at-resort-3d-rendering.jpg?s=612x612&w=0&k=20&c=56o_TTrl3on0pww1lsn0qP1KF2_6PAyz_g_YAH_BGE4="
                                alt="image of hot air balloons" />
                        </li>
                    </ul>
                    <h1>
                        <span class="gradient-text letter">S</span>
                        <span class="gradient-text letter">T</span>
                        <span class="gradient-text letter">A</span>
                        <span class="gradient-text letter">Y</span>
                        <span class="gradient-text letter"> .F</span>
                        <span class="gradient-text letter">I</span>
                        <span class="gradient-text letter">T</span>
                    </h1>

                    <span class="geo-square">
                      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" width="180" height="1600" viewBox="0 0 1000 1000"><rect width="1000" height="1000" fill="#471aa0"></rect><g transform="matrix(0.7,0,0,0.7,150,106.25)"><svg viewBox="0 0 320 360" data-background-color="#471aa0" preserveAspectRatio="xMidYMid meet" height="1125" width="1000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="tight-bounds" transform="matrix(1,0,0,1,0,0)"><svg viewBox="0 0 320 360" height="360" width="320"><g><svg></svg></g><g><svg viewBox="0 0 320 360" height="360" width="320"><g><path xmlns="http://www.w3.org/2000/svg" d="M320 141.95l-19.957-19.957v-28.224l-53.812-53.812h-28.223l-19.958-19.957h-76.1l-19.957 19.957h-28.224l-53.812 53.812v28.224l-19.957 19.957v76.104l19.957 19.958v28.223l53.816 53.808h28.224l19.957 19.957h76.104l19.958-19.957h28.223l53.812-53.812v-28.224l19.949-19.957zM244.374 44.437l51.189 51.189v21.887l-73.076-73.076zM295.563 123.849v112.306l-79.408 79.408h-112.306l-79.412-79.412v-112.302l79.412-79.412h112.306zM123.807 24.48h72.39l15.478 15.477h-103.346zM24.437 95.626l51.189-51.189h21.887l-73.076 73.076zM4.484 216.197v-72.394l15.477-15.478v103.342zM75.626 315.563l-51.189-51.189v-21.887l73.076 73.076zM196.197 335.52h-72.39l-15.478-15.477h103.342zM295.563 264.374l-51.189 51.189h-21.887l73.076-73.076zM315.52 216.197l-15.477 15.478v-103.346l15.477 15.478z" fill="#a437db" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal" data-fill-palette-color="tertiary"></path></g><g transform="matrix(1,0,0,1,56,90.06470367661677)"><svg viewBox="0 0 208 179.87059264676645" height="179.87059264676645" width="208"><g><svg viewBox="0 0 208 179.87059264676645" height="179.87059264676645" width="208"><g transform="matrix(1,0,0,1,0,131.5691936242723)"><svg viewBox="0 0 208 48.30139902249415" height="48.30139902249415" width="208"><g id="textblocktransform"><svg viewBox="0 0 208 48.30139902249415" height="48.30139902249415" width="208" id="textblock"><g><rect width="68.8238108566745" height="2.349348144786036" y="39.07682176492928" fill="#a437db" data-fill-palette-color="tertiary"></rect><rect width="68.8238108566745" height="2.349348144786036" y="39.07682176492928" x="139.1761891433255" fill="#a437db" data-fill-palette-color="tertiary"></rect></g><g><svg viewBox="0 0 208 26.051466618679143" height="26.051466618679143" width="208"><g transform="matrix(1,0,0,1,0,0)"><svg width="208" viewBox="1.5 -33.95000076293945 277.8299865722656 34.79999923706055" height="26.051466618679143" data-palette-color="#a437db"><path d="M11.8 0.85L11.8 0.85Q9.05 0.85 6.23 0.18 3.4-0.5 1.5-1.6L1.5-1.6 1.8-8.55 3.25-8.55 4.8-5.1Q5.5-3.65 6.25-2.7 7-1.75 8.25-1.25L8.25-1.25Q9.1-0.9 9.88-0.78 10.65-0.65 11.6-0.65L11.6-0.65Q14.65-0.65 16.43-2.23 18.2-3.8 18.2-6.4L18.2-6.4Q18.2-8.75 16.98-10.1 15.75-11.45 13.05-12.7L13.05-12.7 11-13.6Q6.8-15.45 4.38-17.9 1.95-20.35 1.95-24.4L1.95-24.4Q1.95-27.4 3.48-29.53 5-31.65 7.7-32.8 10.4-33.95 14-33.95L14-33.95Q16.65-33.95 18.98-33.25 21.3-32.55 23.05-31.35L23.05-31.35 22.7-25.15 21.25-25.15 19.4-28.9Q18.6-30.55 17.88-31.28 17.15-32 16.1-32.2L16.1-32.2Q15.5-32.3 15.08-32.35 14.65-32.4 13.95-32.4L13.95-32.4Q11.5-32.4 9.73-30.98 7.95-29.55 7.95-27.05L7.95-27.05Q7.95-24.65 9.3-23.15 10.65-21.65 13.2-20.5L13.2-20.5 15.45-19.55Q20.3-17.45 22.4-15.08 24.5-12.7 24.5-9L24.5-9Q24.5-4.6 21.18-1.88 17.85 0.85 11.8 0.85ZM40.3 0L27.1 0 27.1-1.05 28.1-1.3Q29.1-1.6 29.4-2.2 29.7-2.8 29.7-3.85L29.7-3.85Q29.75-6.7 29.75-9.63 29.75-12.55 29.75-15.5L29.75-15.5 29.75-17.55Q29.75-20.45 29.75-23.35 29.75-26.25 29.7-29.15L29.7-29.15Q29.7-30.2 29.37-30.78 29.05-31.35 28.05-31.7L28.05-31.7 27.1-32 27.1-33.05 39.15-33.05Q46.45-33.05 49.77-30.33 53.1-27.6 53.1-23.15L53.1-23.15Q53.1-20.35 51.72-17.98 50.35-15.6 47.2-14.2 44.05-12.8 38.7-12.8L38.7-12.8 36.9-12.8Q36.9-10.7 36.9-8.47 36.9-6.25 36.95-3.95L36.95-3.95Q36.95-1.9 38.8-1.45L38.8-1.45 40.3-1.05 40.3 0ZM36.9-17.55L36.9-14.25 39-14.25Q41.5-14.25 43.07-15.03 44.65-15.8 45.42-17.7 46.2-19.6 46.2-22.95L46.2-22.95Q46.2-26.3 45.37-28.18 44.55-30.05 42.9-30.83 41.25-31.6 38.8-31.6L38.8-31.6 36.95-31.6Q36.9-28.15 36.9-24.63 36.9-21.1 36.9-17.55L36.9-17.55ZM70.75 0.85L70.75 0.85Q67.7 0.85 64.9-0.25 62.1-1.35 59.87-3.53 57.65-5.7 56.35-8.95 55.05-12.2 55.05-16.55L55.05-16.55Q55.05-20.8 56.35-24.05 57.65-27.3 59.87-29.5 62.1-31.7 64.92-32.83 67.75-33.95 70.75-33.95L70.75-33.95Q73.75-33.95 76.57-32.85 79.4-31.75 81.59-29.58 83.8-27.4 85.09-24.15 86.4-20.9 86.4-16.55L86.4-16.55Q86.4-12.3 85.09-9.05 83.8-5.8 81.59-3.6 79.4-1.4 76.59-0.28 73.8 0.85 70.75 0.85ZM70.75-0.65L70.75-0.65Q73.59-0.65 75.34-2.13 77.09-3.6 77.9-7.1 78.7-10.6 78.7-16.55L78.7-16.55Q78.7-22.5 77.9-25.98 77.09-29.45 75.34-30.93 73.59-32.4 70.75-32.4L70.75-32.4Q67.95-32.4 66.17-30.93 64.4-29.45 63.6-25.98 62.8-22.5 62.8-16.55L62.8-16.55Q62.8-10.6 63.6-7.1 64.4-3.6 66.17-2.13 67.95-0.65 70.75-0.65ZM101.14 0L88.59 0 88.59-1.05 89.64-1.35Q90.64-1.65 90.92-2.23 91.19-2.8 91.19-3.85L91.19-3.85Q91.24-6.75 91.24-9.65 91.24-12.55 91.24-15.5L91.24-15.5 91.24-17.55Q91.24-20.45 91.24-23.35 91.24-26.25 91.19-29.15L91.19-29.15Q91.19-30.2 90.94-30.78 90.69-31.35 89.69-31.65L89.69-31.65 88.59-32 88.59-33.05 102.59-33.05Q108.44-33.05 111.62-30.83 114.79-28.6 114.79-24.6L114.79-24.6Q114.79-22.4 113.07-20.15 111.34-17.9 107.79-16.7L107.79-16.7 114.59-3.45Q115.44-1.8 117.24-1.2L117.24-1.2 118.19-1 118.19 0 109.34 0 101.89-15.6 98.29-15.6Q98.29-12.05 98.29-9.2 98.29-6.35 98.34-3.85L98.34-3.85Q98.34-2.85 98.67-2.25 98.99-1.65 99.94-1.4L99.94-1.4 101.14-1.05 101.14 0ZM98.29-17.05L98.29-17.05 100.99-17.05Q104.54-17.05 106.19-18.85 107.84-20.65 107.84-24.35L107.84-24.35Q107.84-28.05 106.27-29.83 104.69-31.6 101.19-31.6L101.19-31.6 98.34-31.6Q98.34-29.65 98.32-27.63 98.29-25.6 98.29-23.08 98.29-20.55 98.29-17.05ZM142.04 0L126.59 0 126.59-1.05 128.59-1.45Q130.69-1.9 130.69-3.9L130.69-3.9 130.69-17.55Q130.69-21.05 130.69-24.55 130.69-28.05 130.64-31.55L130.64-31.55 126.69-31.55Q125.09-31.55 124.34-30.7 123.59-29.85 122.84-28.3L122.84-28.3 121.09-24.6 119.69-24.6 119.94-33.05 148.64-33.05 148.89-24.6 147.49-24.6 145.74-28.3Q144.99-29.85 144.24-30.7 143.49-31.55 141.89-31.55L141.89-31.55 137.89-31.55 137.89-3.9Q137.89-1.85 139.99-1.45L139.99-1.45 142.04-1.05 142.04 0ZM179.14 0.85L179.14 0.85Q174.29 0.85 170.39-1.15 166.49-3.15 164.21-7.05 161.94-10.95 161.94-16.55L161.94-16.55Q161.94-20.75 163.31-24 164.69-27.25 167.11-29.48 169.54-31.7 172.69-32.83 175.84-33.95 179.39-33.95L179.39-33.95Q182.14-33.95 184.54-33.33 186.94-32.7 189.14-31.5L189.14-31.5 189.34-24.95 187.99-24.95 185.89-28.9Q185.39-29.9 184.81-30.7 184.24-31.5 183.34-31.85L183.34-31.85Q182.09-32.45 180.39-32.45L180.39-32.45Q177.44-32.45 175.01-30.95 172.59-29.45 171.14-25.98 169.69-22.5 169.69-16.5L169.69-16.5Q169.69-10.55 171.06-7.05 172.44-3.55 174.79-2.08 177.14-0.6 180.09-0.6L180.09-0.6Q181.44-0.6 182.29-0.8 183.14-1 183.99-1.35L183.99-1.35Q184.99-1.75 185.54-2.53 186.09-3.3 186.49-4.3L186.49-4.3 188.39-8.85 189.74-8.85 189.54-1.65Q187.39-0.45 184.79 0.2 182.19 0.85 179.14 0.85ZM216.28 0L192.18 0 192.18-1.05 193.18-1.35Q194.23-1.7 194.53-2.27 194.83-2.85 194.83-3.9L194.83-3.9 194.83-29.2Q194.83-30.2 194.53-30.78 194.23-31.35 193.23-31.7L193.23-31.7 192.18-32 192.18-33.05 204.58-33.05 204.58-32 203.63-31.7Q202.68-31.35 202.36-30.75 202.03-30.15 202.03-29.1L202.03-29.1 202.03-1.5 209.38-1.5Q211.08-1.5 211.93-2.35 212.78-3.2 213.53-4.8L213.53-4.8 215.38-8.95 216.78-8.95 216.28 0ZM234.88 0.85L234.88 0.85Q231.13 0.85 228.26-0.5 225.38-1.85 223.76-4.78 222.13-7.7 222.13-12.5L222.13-12.5 222.13-17.9Q222.13-20.7 222.13-23.55 222.13-26.4 222.08-29.3L222.08-29.3Q222.08-31.25 220.23-31.75L220.23-31.75 219.13-32 219.13-33.05 232.63-33.05 232.63-32 231.23-31.7Q229.33-31.25 229.33-29.2L229.33-29.2Q229.28-26.4 229.28-23.58 229.28-20.75 229.28-17.9L229.28-17.9 229.28-11.55Q229.28-6.7 231.26-4.55 233.23-2.4 236.88-2.4L236.88-2.4Q240.73-2.4 242.91-4.73 245.08-7.05 245.08-11.65L245.08-11.65 245.08-29.05Q245.08-30.05 244.68-30.8 244.28-31.55 243.28-31.75L243.28-31.75 242.08-32 242.08-33.05 249.78-33.05 249.78-32 248.38-31.7Q247.43-31.5 247.08-30.8 246.73-30.1 246.73-29.1L246.73-29.1 246.73-11.95Q246.73-5.75 243.48-2.45 240.23 0.85 234.88 0.85ZM264.53 0L251.98 0 251.98-1.05 252.78-1.3Q253.83-1.7 254.2-2.35 254.58-3 254.58-4.1L254.58-4.1Q254.63-6.95 254.63-9.83 254.63-12.7 254.63-15.6L254.63-15.6 254.63-17.4Q254.63-20.3 254.6-23.18 254.58-26.05 254.58-28.95L254.58-28.95Q254.58-30.15 254.23-30.78 253.88-31.4 252.78-31.75L252.78-31.75 251.98-32 251.98-33.05 266.08-33.05Q272.08-33.05 274.78-30.83 277.48-28.6 277.48-25.2L277.48-25.2Q277.48-22.6 275.58-20.53 273.68-18.45 268.93-17.55L268.93-17.55Q274.43-16.95 276.88-14.7 279.33-12.45 279.33-9.2L279.33-9.2Q279.33-7.6 278.63-5.98 277.93-4.35 276.25-3 274.58-1.65 271.73-0.83 268.88 0 264.53 0L264.53 0ZM261.73-31.6L261.73-17.9 264.08-17.9Q267.48-17.9 269-19.43 270.53-20.95 270.53-24.65L270.53-24.65Q270.53-28.5 269.13-30.05 267.73-31.6 264.73-31.6L264.73-31.6 261.73-31.6ZM261.73-16.45L261.73-1.45 264.48-1.45Q268.23-1.45 270.08-3.3 271.93-5.15 271.93-9.25L271.93-9.25Q271.93-13.2 270.15-14.83 268.38-16.45 264.33-16.45L264.33-16.45 261.73-16.45Z" opacity="1" transform="matrix(1,0,0,1,0,0)" fill="#a437db" class="wordmark-text-0" data-fill-palette-color="primary" id="text-0"></path></svg></g></svg></g><g transform="matrix(1,0,0,1,68.8238108566745,32.20159265215044)"><svg viewBox="0 0 70.35237828665099 16.09980637034371" height="16.09980637034371" width="70.35237828665099"><g transform="matrix(1,0,0,1,8,0)"><svg width="54.35237828665099" viewBox="1.350000023841858 -37.099998474121094 153.07998657226562 45.349998474121094" height="16.09980637034371" data-palette-color="#e0bd0d"><path d="M19.95-20.9L19.95-20.9Q18.85-22.5 16.98-23.48 15.1-24.45 12.5-24.45L12.5-24.45Q9.6-24.45 7.68-23.23 5.75-22 5.75-19.85L5.75-19.85Q5.75-18.7 6.63-17.68 7.5-16.65 10.15-15.8L10.15-15.8 16.65-13.8Q19.9-12.85 21.4-11.13 22.9-9.4 22.9-7.1L22.9-7.1Q22.9-4.85 21.53-3.15 20.15-1.45 17.75-0.48 15.35 0.5 12.35 0.5L12.35 0.5Q8.55 0.5 5.63-1.05 2.7-2.6 1.45-5.05L1.45-5.05Q1.35-5.25 1.35-5.4 1.35-5.55 1.55-5.7L1.55-5.7 3.15-6.65Q3.35-6.75 3.53-6.73 3.7-6.7 3.8-6.55L3.8-6.55Q4.65-5.2 5.85-4.2 7.05-3.2 8.68-2.65 10.3-2.1 12.4-2.1L12.4-2.1Q14.45-2.1 16.1-2.68 17.75-3.25 18.73-4.3 19.7-5.35 19.7-6.75L19.7-6.75Q19.7-8.25 18.48-9.33 17.25-10.4 14.35-11.2L14.35-11.2 9.25-12.7Q5.45-13.8 4.03-15.48 2.6-17.15 2.6-19.25L2.6-19.25Q2.6-21.6 3.88-23.33 5.15-25.05 7.4-26.03 9.65-27 12.55-27L12.55-27Q15.8-27 18.35-25.75 20.9-24.5 22.3-22.35L22.3-22.35Q22.45-22.2 22.45-22.05 22.45-21.9 22.25-21.8L22.25-21.8 20.55-20.8Q20.4-20.75 20.25-20.75 20.1-20.75 19.95-20.9L19.95-20.9ZM41.4-23.95L34.85-23.95Q34.45-23.95 34.45-23.55L34.45-23.55 34.45-6.75Q34.45-4.2 35.25-3.4 36.05-2.6 37.6-2.6L37.6-2.6 41.25-2.6Q41.5-2.6 41.62-2.48 41.75-2.35 41.75-2.1L41.75-2.1 41.75-0.75Q41.75-0.35 41.25-0.2L41.25-0.2Q40.8-0.15 39.92-0.1 39.05-0.05 38.2-0.03 37.35 0 36.9 0L36.9 0Q33.8 0 32.47-1.43 31.15-2.85 31.15-6.05L31.15-6.05 31.15-23.5Q31.15-23.95 30.7-23.95L30.7-23.95 26.45-23.95Q26-23.95 26-24.35L26-24.35 26-26.1Q26-26.5 26.4-26.5L26.4-26.5 30.85-26.5Q31.15-26.5 31.2-26.9L31.2-26.9 31.7-34.9Q31.7-35.5 32.15-35.5L32.15-35.5 33.95-35.5Q34.5-35.5 34.5-34.85L34.5-34.85 34.5-26.9Q34.5-26.5 34.85-26.5L34.85-26.5 41.45-26.5Q41.85-26.5 41.85-26.1L41.85-26.1 41.85-24.35Q41.85-23.95 41.4-23.95L41.4-23.95ZM63.15-3.35L63.15-3.35Q61.2-1.45 58.95-0.48 56.7 0.5 54 0.5L54 0.5Q50.1 0.5 47.85-1.48 45.6-3.45 45.6-6.75L45.6-6.75Q45.6-9.35 47.05-11.23 48.5-13.1 51.35-14.2 54.2-15.3 58.4-15.6L58.4-15.6 62.85-15.95Q63.25-16 63.47-16.18 63.7-16.35 63.7-16.7L63.7-16.7 63.7-18.15Q63.7-21.05 61.87-22.75 60.05-24.45 57-24.45L57-24.45Q54.65-24.45 52.75-23.38 50.85-22.3 49.3-20.2L49.3-20.2Q49.15-20 49.02-19.93 48.9-19.85 48.65-19.95L48.65-19.95 46.6-20.8Q46.45-20.9 46.4-21.03 46.35-21.15 46.55-21.45L46.55-21.45Q48.1-23.95 50.72-25.48 53.35-27 57.15-27L57.15-27Q60.3-27 62.47-25.98 64.65-24.95 65.77-23 66.9-21.05 66.9-18.4L66.9-18.4 66.9-0.65Q66.9-0.25 66.77-0.13 66.65 0 66.3 0L66.3 0 64.45 0Q64.15 0 64-0.18 63.85-0.35 63.85-0.65L63.85-0.65 63.75-3.25Q63.65-3.95 63.15-3.35L63.15-3.35ZM63.7-12.95L63.7-12.95Q63.7-13.8 63-13.7L63-13.7 59.25-13.4Q56.65-13.25 54.72-12.75 52.8-12.25 51.5-11.45 50.2-10.65 49.55-9.58 48.9-8.5 48.9-7.1L48.9-7.1Q48.9-4.75 50.55-3.43 52.2-2.1 55-2.1L55-2.1Q56.7-2.1 58.3-2.73 59.9-3.35 61.15-4.3L61.15-4.3Q62.35-5.35 63.02-6.45 63.7-7.55 63.7-8.55L63.7-8.55 63.7-12.95ZM75.54 8.25L75.54 8.25Q74.09 8.25 73.24 8.18 72.39 8.1 72.39 7.65L72.39 7.65 72.39 6.2Q72.39 5.85 72.67 5.73 72.94 5.6 73.84 5.6L73.84 5.6 76.94 5.6Q78.09 5.6 79.02 4.8 79.94 4 80.57 2.8 81.19 1.6 81.37 0.35 81.54-0.9 81.19-1.8L81.19-1.8 71.69-25.75Q71.59-26.05 71.69-26.28 71.79-26.5 72.19-26.5L72.19-26.5 74.44-26.5Q74.74-26.5 74.92-26.4 75.09-26.3 75.14-26L75.14-26 83.14-5.45Q83.34-5 83.59-5.03 83.84-5.05 84.04-5.65L84.04-5.65 91.84-26.05Q91.94-26.3 92.09-26.4 92.24-26.5 92.49-26.5L92.49-26.5 94.29-26.5Q94.59-26.5 94.72-26.3 94.84-26.1 94.74-25.9L94.74-25.9 83.54 2.95Q82.94 4.55 82.14 5.58 81.34 6.6 80.37 7.18 79.39 7.75 78.19 8 76.99 8.25 75.54 8.25L75.54 8.25ZM124.09-26.5L124.09-26.5Q124.29-26.5 124.39-26.38 124.49-26.25 124.49-26.05L124.49-26.05 124.49-24.35Q124.49-23.95 124.04-23.95L124.04-23.95 117.99-23.95Q117.59-23.95 117.59-23.55L117.59-23.55 117.59-0.65Q117.59 0 117.09 0L117.09 0 114.79 0Q114.29 0 114.29-0.6L114.29-0.6 114.29-23.55Q114.29-23.95 113.99-23.95L113.99-23.95 108.74-23.95Q108.34-23.95 108.34-24.35L108.34-24.35 108.34-26.05Q108.34-26.25 108.44-26.38 108.54-26.5 108.79-26.5L108.79-26.5 113.89-26.5Q114.29-26.5 114.29-26.95L114.29-26.95 114.29-30.75Q114.29-33.9 115.74-35.5 117.19-37.1 120.34-37.1L120.34-37.1 124.24-37.1Q124.74-37.1 124.74-36.6L124.74-36.6 124.74-35.05Q124.74-34.8 124.61-34.7 124.49-34.6 124.24-34.6L124.24-34.6 120.54-34.6Q118.89-34.6 118.21-33.6 117.54-32.6 117.54-30.8L117.54-30.8 117.54-26.9Q117.54-26.5 117.94-26.5L117.94-26.5 124.09-26.5ZM133.19-25.9L133.19-0.75Q133.19-0.3 133.04-0.15 132.89 0 132.39 0L132.39 0 130.54 0Q130.14 0 130.01-0.13 129.89-0.25 129.89-0.6L129.89-0.6 129.89-25.9Q129.89-26.5 130.44-26.5L130.44-26.5 132.64-26.5Q133.19-26.5 133.19-25.9L133.19-25.9ZM133.39-36.4L133.39-32.55Q133.39-31.65 132.64-31.65L132.64-31.65 130.34-31.65Q129.94-31.65 129.81-31.85 129.69-32.05 129.69-32.45L129.69-32.45 129.69-36.35Q129.69-37.1 130.34-37.1L130.34-37.1 132.74-37.1Q133.39-37.1 133.39-36.4L133.39-36.4ZM153.98-23.95L147.43-23.95Q147.03-23.95 147.03-23.55L147.03-23.55 147.03-6.75Q147.03-4.2 147.83-3.4 148.63-2.6 150.18-2.6L150.18-2.6 153.83-2.6Q154.08-2.6 154.21-2.48 154.33-2.35 154.33-2.1L154.33-2.1 154.33-0.75Q154.33-0.35 153.83-0.2L153.83-0.2Q153.38-0.15 152.51-0.1 151.63-0.05 150.78-0.03 149.93 0 149.48 0L149.48 0Q146.38 0 145.06-1.43 143.73-2.85 143.73-6.05L143.73-6.05 143.73-23.5Q143.73-23.95 143.28-23.95L143.28-23.95 139.03-23.95Q138.58-23.95 138.58-24.35L138.58-24.35 138.58-26.1Q138.58-26.5 138.98-26.5L138.98-26.5 143.43-26.5Q143.73-26.5 143.78-26.9L143.78-26.9 144.28-34.9Q144.28-35.5 144.73-35.5L144.73-35.5 146.53-35.5Q147.08-35.5 147.08-34.85L147.08-34.85 147.08-26.9Q147.08-26.5 147.43-26.5L147.43-26.5 154.03-26.5Q154.43-26.5 154.43-26.1L154.43-26.1 154.43-24.35Q154.43-23.95 153.98-23.95L153.98-23.95Z" opacity="1" transform="matrix(1,0,0,1,0,0)" fill="#e0bd0d" class="slogan-text-1" data-fill-palette-color="secondary" id="text-1"></path></svg></g></svg></g></svg></g></svg></g><g transform="matrix(1,0,0,1,44.36552922133515,0)"><svg viewBox="0 0 119.2689415573297 119.2689415573297" height="119.2689415573297" width="119.2689415573297"><g><svg></svg></g><g id="icon-0"><svg viewBox="0 0 119.2689415573297 119.2689415573297" height="119.2689415573297" width="119.2689415573297"><g><path d="M0 59.634c0-32.935 26.699-59.634 59.634-59.634 32.935 0 59.634 26.699 59.635 59.634 0 32.935-26.699 59.634-59.635 59.635-32.935 0-59.634-26.699-59.634-59.635zM59.634 116.92c31.638 0 57.285-25.647 57.286-57.286 0-31.638-25.647-57.285-57.286-57.285-31.638 0-57.285 25.647-57.285 57.285 0 31.638 25.647 57.285 57.285 57.286z" data-fill-palette-color="tertiary" fill="#a437db" stroke="transparent"></path></g><g transform="matrix(1,0,0,1,23.598563007905184,40.23033339270238)"><svg viewBox="0 0 72.07181554151933 38.80827477192495" height="38.80827477192495" width="72.07181554151933"><g><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" viewBox="5 25.768999099731445 90 48.462005615234375" enable-background="new 0 0 100 100" xml:space="preserve" height="38.80827477192495" width="72.07181554151933" class="icon-s-0" data-fill-palette-color="accent" id="s-0"><g fill="#f2cc12" data-fill-palette-color="accent"><rect x="5" y="43.077" fill="#f2cc12" width="3.462" height="13.846" data-fill-palette-color="accent"></rect><rect x="11.923" y="32.692" fill="#f2cc12" width="3.462" height="34.615" data-fill-palette-color="accent"></rect><rect x="18.846" y="25.769" fill="#f2cc12" width="6.924" height="48.462" data-fill-palette-color="accent"></rect><rect x="29.23" y="46.539" fill="#f2cc12" width="41.539" height="6.923" data-fill-palette-color="accent"></rect><rect x="91.538" y="43.077" fill="#f2cc12" width="3.462" height="13.846" data-fill-palette-color="accent"></rect><rect x="84.615" y="32.692" fill="#f2cc12" width="3.462" height="34.615" data-fill-palette-color="accent"></rect><rect x="74.23" y="25.769" fill="#f2cc12" width="6.924" height="48.462" data-fill-palette-color="accent"></rect></g></svg></g></svg></g></svg></g></svg></g><g></g></svg></g></svg></g></svg></g><defs></defs></svg><rect width="320" height="360" fill="none" stroke="none" visibility="hidden"></rect></g></svg></g></svg>
                    </span>
                </article>
            </section>


            




        </div>
    </div>

    <!-- All icons from freepik-->
    <!--
                <div>Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
              -->
    <!-- partial -->
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- partial -->

    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.4/js/tether.min.js'></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>