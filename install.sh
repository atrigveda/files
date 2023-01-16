case "$1" in
  arch)
    $0 debian
    sudo rm -r .git ;
    sudo cp -r ../files /srv/http/ ;
    cd /srv/http/files ;
    sudo rm -r install.sh uninstall.sh ;
    echo "install successful ." ;
    ;;
  debian)
    sudo rm -r .git ;
    sudo cp -r ../files /var/www/html/ ;
    cd /var/www/html/files ;
    sudo rm -r install.sh uninstall.sh ; 
    echo "install successful ." ;
    ;;
  *)
    echo "Usage: $0 arch|debian" >&2
    ;;
esac
    
