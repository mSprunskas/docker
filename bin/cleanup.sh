# Removes exited containers (start important containers first)
docker rm $(docker ps -a -q -f status=exited)

# Docker cleanup
docker system prune -a -f
