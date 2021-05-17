<thead class="black">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">nama anime</th>
        <th scope="col">season</th>
        <th scope="col">genre</th>
     </tr>
  </thead>
  @foreach($nime as $nl)

    <tr>
    <th scope="col">{{$nl->id}} </th>
     <th scope="col">{{$nl->nama_anime}} </th>
     <th scope="col">{{$nl->studio}} </th>
     <th scope="col">{{$nl->genre}} </th>
    