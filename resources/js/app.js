import { initAsyncCompiler } from 'sass';
import './bootstrap';
import $ from 'jquery';
window.$ = window.jQuery = $;

class Locker{
    constructor(element){
        this.el = element;
        this.rx = new RegExp($(this.el).attr('rgx'), "gi");
        this.mlv = '';
        this.init();
    }

    init(){
        $(this.el).on('input', e => {
            let iv = $(this.el).val()

            if(!iv.match(this.rx)){
                iv = this.mlv
            }
            else{
                this.mlv = iv
            }

            $(this.el).val(this.mlv)
        });
    }
}

$(window).on('load', e => {
    $('input[rgx]').each((i, e) => {
        let ij = new Locker('#' + $(e).attr('id'))
    })
})