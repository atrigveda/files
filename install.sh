case "$1" in
  arch)
    $0 debian
    sudo mkdir /srv/http/files/
    sudo cp -r uploads upload.php index.php delete.php /srv/http/files/  
    ;;
  debian)
    sudo mkdir /var/www/html/files/ 
    sudo cp -r uploads upload.php index.php delete.php /var/www/html/files/  
    ;;
  *)
    echo "Usage: $0 arch|debian" >&2
    ;;
esac
    
