case "$1" in
  arch)
    $0 debian
    sudo rm -r  /srv/http/files  
    ;;
  debian)
    sudo rm -r  /var/www/html/files  
    ;;
  *)
    echo "Usage: $0 arch|debian" >&2
    ;;
esac
