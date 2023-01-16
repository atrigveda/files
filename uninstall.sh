case "$1" in
  arch)
    $0 debian
    cd /src/http/ ;
    sudo rm -r files ; 
    echo "uninstall successful .";
    ;;
  debian)
    cd /var/www/html/ ;
    sudo rm -r files  ;
    echo "uninstall successful .";
    ;;
  *)
    echo "Usage: $0 arch|debian" >&2
    ;;
esac
