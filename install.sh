case "$1" in
  arch)
    $0 debian
    sudo cp ../files -r /srv/http/ ;
    cd /srv/http/files/ ;
    sudo rm -r .git install.sh uninstall.sh README.md LICENSE ;
    echo "Success !";
    ;;
  debian)
    sudo cp ../files -r /var/www/html/ ;
    cd /var/www/html/files/ ;
    sudo rm -r .git install.sh uninstall.sh README.md LICENSE ;
    echo "Success !";
    ;;
  *)
    echo "Usage: $0 arch|debian" >&2
    ;;
esac
    
