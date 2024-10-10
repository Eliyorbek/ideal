<form action="{{route('store')}}" method="POST">
    @csrf
    <input type="text" name="name" required placeholder="Ism" id="name" />

    <input type="text" name="phone" required placeholder="99-999-99-99" minlength="9" id="phone" />

    <select name="course_id" id="courses" required class="courses-select">
        <option value="" disabled="" selected="">Kursni tanlang</option>
        @foreach($courses as $course)

        <option value="{{$course->id}}">{{$course->name}}</option>
        @endforeach
    </select>

    <button type="submit" class="white-academy" id="white-academy" type="submit">
        <span class="white-academy__span">Ma'lumot olish</span>
    </button>
</form>