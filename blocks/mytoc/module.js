
/**
 * Init mytoc js for the My TOC block
 *
 * @package    block_mytoc(My Table Of Content)
 * @author     Maria Tan <maria@click-ap.com>
 * @copyright  2018 Click-AP {@link https://www.click-ap.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

M.block_mytoc = {};

M.block_mytoc.init = function(Y, expand_all, htmlid) {

    Y.all("div.mytoc-action div.favorite i").on('click', function(e){
        var isfavorite = false;
        
        var heartNode = Y.one(e.currentTarget);
        var _currState = heartNode.getAttribute('class'); //"fa fa-heart-o"
        var _setClass = 'fa fa-heart-o';
        if(_currState == 'fa fa-heart-o'){
            _setClass = 'fa fa-heart';
            isfavorite = true;
        }
        var cu = heartNode.getAttribute('id');
        var parent = cu.split("-");

        YUI().use("io-base", function(Y) {
            
            function complete(id, o, args) {
                var id = id; // Transaction ID.
                var data = o.responseText; // Response data.
                var args = args[1]; // 'ipsum'.
                heartNode.setAttribute('class',_setClass);
            };
            Y.on('io:complete', complete, Y, ['lorem', 'ipsum']);
            //var request = Y.io(url);
            var params = {
                sesskey : M.cfg.sesskey,
                course : parent[0],
                user : parent[1],
                favorite : isfavorite
            };
            Y.io(M.cfg.wwwroot+'/blocks/mytoc/favorite.php', {
                method: 'POST',
                data: build_querystring(params),
                context: this
            });            
        });
    });
};