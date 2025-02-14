#!/bin/bash

# Detect the operating system
if [[ "$OSTYPE" == "darwin"* ]]; then
    # macOS
	link1="localhost:8000"
elif [[ "$OSTYPE" == "linux-gnu"* ]]; then
    # Linux
	link1="localhost/youtube_course"
else
    echo "Unsupported operating system"
    exit 1
fi

link2="https://www.youtube.com/watch?v=2RsGt_ozFIM&list=PLZ2ovOgdI-kUSqWuyoGJMZL6xldXw6hIg&index=60"

export link1
export link2
