case "$1" in
  arch)
    $0 debian
    cd /srv/http/ ;
    sudo rm -r files ;
    echo "Success !" ;  
    ;;
  debian)
    cd  /var/www/html/ ;
    sudo rm -r files ;
    echo "Success !" ; 
    ;;
  *)
    echo "Usage: $0 arch|debian" >&2
    ;;
esac
