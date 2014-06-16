<body style="font-family: sans-serif;">

    <p>
    	The World Cup 2014 scoreboard has been updated. 
    </p>
    
    <p>
        The current leaders are:
        <ol>
            @foreach ($entries as $entry)
            <li>{{{ $entry->fullName() }}}</li>
            @endforeach
        </ol>
    </p>

    <p>
        Use this link to see the full
    	{{ link_to_route(
    			'home',
    			'scoreboard',
    			$parameters = array(),
    			$attributes = array()) }}
    </p>

</body>