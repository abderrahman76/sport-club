@php
    use Illuminate\Support\Str;
 $i = 2;
@endphp
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>{{ env('APP_NAME') }}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<style>
  * {
  box-sizing: border-box;
}

body {
  width: 100%;
  height: 100%;
  font-family: "Georgia", serif;
  font-size: 16px;
  line-height: 1.4;
  background-color: black;
  overflow-x:hidden;
}

main {
  display: flex;
  flex-direction: column;
  width: 100%;
  transform: translate3d(0, 0, 0);
}
@media (min-width: 630px) {
  main {
    flex-direction: row;
    width: 130%;
    margin-left: -15%;
  }
}
main section:not(:first-child):not(:last-child):hover {
  flex: 2;
}
main section:not(:first-child):not(:last-child):hover:after {
  opacity: 0.8;
}
main section:not(:first-child):not(:last-child):hover article {
  opacity: 1;
  transform: translateY(0);
  transition: opacity 0.2s 0.2s, transform 0.2s 0.2s;
}
@media (min-width: 630px) {
  main section:not(:first-child):not(:last-child):hover article {
    transform: translateY(0) skewX(-15deg);
  }
}

section {
  flex: 1;
  position: relative;
  width: 100%;
  min-height: 20vh;
  overflow: hidden;
  z-index: 1;
  transition: flex-grow 0.2s, opacity 0.2s;
}
section:before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background-position: center;
  background-size: cover;
  transition: transform 0.2s, width 0.2s;
}
section:after {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: black;
  opacity: 0;
  transition: opacity 0.2s;
}
@media (min-width: 630px) {
  section {
    width: 20%;
    height: 100vh;
    margin-right: -1px;
    transform: skewX(15deg) translateZ(0);
  }
  section:before {
    left: -100%;
    width: 400%;
    transform: skewX(-15deg);
  }
}
section:nth-child(1):before {
  background-color: #e60000;
  background-image: url(https://theneoncompany.shop/wp-content/uploads/2022/07/gym-club-scaled.jpg);
}
.hide-images section:nth-child(1):before {
  background-image: none;
}
section:first-child:before, section:last-child:before {
  background-color: #660000;
}
section:first-child:after, section:last-child:after {
  opacity: 0.5;
}
section:first-child article, section:last-child article {
  display: none;
}
@foreach ( $sports as $sport )
section:nth-child({{ $i }}):before {
  background-color: #cc0000;
  background-image: url({{ $sport->image }});
  background-size: 50%;

}
.hide-images section:nth-child({{ $i }}):before {
  background-image: none;
}
section:first-child:before, section:last-child:before {
  background-color: #660000;
}
section:first-child:after, section:last-child:after {
  opacity: 0.5;
}
section:first-child article, section:last-child article {
  display: none;
}
@php
    $i++;
@endphp
@endforeach

section:nth-child({{ $i }}):before {
  background-color: #990000;
  background-image: url(https://theneoncompany.shop/wp-content/uploads/2022/07/gym-club-scaled.jpg);
}
.hide-images section:nth-child({{ $i }}):before {
  background-image: none;
}
section:first-child:before, section:last-child:before {
  background-color: #660000;
}
section:first-child:after, section:last-child:after {
  opacity: 0.5;
}
section:first-child article, section:last-child article {
  display: none;
}

article {
  position: relative;
  padding: 24px;
  width: 100%;
  height: 100%;
  text-align: center;
  color: white;
  z-index: 1;
  transition: opacity 0.2s, transform 0.2s;
}
@media (min-width: 630px) {
  article {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    margin: auto;
    opacity: 0;
    transform: translateY(24px) skewX(-15deg);
  }
}

h2 {
  font-size: 32px;
  margin-bottom: 12px;
}

button {
  position: fixed;
  top: 12px;
  left: 12px;
  padding: 8px 12px;
  font-size: 10px;
  text-transform: uppercase;
  color: white;
  background-color: black;
  border: none;
  outline: none;
  cursor: pointer;
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<main>
  <section>
    <article>
      <h2>Panel Title</h2>
      <p>This is some description text for this panel.</p>
    </article>
  </section>
  

  @foreach ($sports as $sport)
  <section >
    <a href="{{ route('sport',[$sport]) }}">
    <article >
      <h2>{{ $sport->name }}</h2>
      <p>{{ Str::limit($sport->description, 50) }}...</p>
    </article>
</a>
  </section>
  @endforeach
  <section>
  <article>
    <h2>Panel Title</h2>
    <p>This is some description text for this panel.</p>
  </article>
</section>
  
</main>
<button><a href="{{ URL::previous() }}" style="text-decoration: none; color: white;"> go back </a></button>
</body>
</html>
