

    <div>

    <form action="{{ route('articles.store') }}" method="post"  >

        
            <input type="text" name="title" placeholder="title">
        
            <input type="text" name="content" placeholder="content" > 
            <input type="text" name="author.firstName" placeholder="firstName" > 
            <input type="text" name="author.lastName" placeholder="lastName" > 
        
        
        
            {{csrf_field()}}

    
        <button type="submit" >Submit</button>

    </form>


    <div >
        <ul >

            @foreach($articles as $article)

                <li>
                    <strong> {{$articles -> title}} </strong>  
                        <br>
                            {{$articles -> content}}

                        <br>
                    
                    
                    
                </li>

            @endforeach 

        </ul>         
    </div>
    
</div>


