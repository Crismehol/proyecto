<style>
    .image_bg{
        background-image: url({{URL::asset('/img/' . Tools::showIfNotNull( $data['style'], 'image_bg'))}});
        background-repeat: repeat;
    }
    .color-bg {
        background-color: {{Tools::showIfNotNull( $data['style'], 'color_bg')}}
     }
    {{--.layout-frm{--}}
    {{--// TODO - Este no va en estilos (Columnas del formulario)--}}
    {{--}--}}
    .capital-frm{
        @if(Tools::showIfNotNull( $data['style'], 'capital_frm') == true)
            text-transform: uppercase;
        @endif
    }
    .image-frm{
        background-image: url({{URL::asset('/img/' . Tools::showIfNotNull( $data['style'], 'image_frm'))}});
        background-repeat: repeat;
    }
    .color-frm{
        background-color: {{Tools::showIfNotNull( $data['style'], 'color_frm')}}
    }
    .typo-title_frm{
        font-family: {{Tools::showIfNotNull( $data['style'], 'typo_title_frm')}}
    }
    .size-title-frm{
        font-size: {{Tools::showIfNotNull( $data['style'], 'size_title_frm')}}em
        }
    .color-title-frm{
        color: {{Tools::showIfNotNull( $data['style'], 'color_title_frm')}}
    }
    .typo-fields-frm{
        font-family: {{Tools::showIfNotNull( $data['style'], 'typo_fields_frm')}} !important;
        }
    .size-fields-frm{
        font-size: {{Tools::showIfNotNull( $data['style'], 'size_fields_frm')}}em !important;
        }
    .color-fields-frm{
        color: {{Tools::showIfNotNull( $data['style'], 'color_fields_frm')}} !important;
        }

    /*.color-tablet-frm{ TODO - ¿Que es?*/
{{--        background-color: {{Tools::showIfNotNull( $data['style'], 'color_tablet_frm')}} !important--}}
    /*}*/

    .border-radious-frm{
        @if(isset($data['style']->border_radious_frm) && $data['style']->border_radious_frm != null)
            border-width: 0.1em !important;
            border-style: solid !important;
            border-radius: {{Tools::showIfNotNull( $data['style'], 'border_radious_frm')}}px !important
        @endif

     }
    .border-color-tablet-frm{
        @if(isset($data['style']->border_color_tablet_frm) && $data['style']->border_color_tablet_frm)
            border-width: 0.1em !important;
            border-style: solid !important;
            border-radius: {{Tools::showIfNotNull( $data['style'], 'border_color_tablet_frm')}}px !important
        @endif

    }
    .typo-contents-frm{
        font-family: {{Tools::showIfNotNull( $data['style'], 'typo_contents_frm')}} !important;
    }
    .size-contents-frm{
        font-size: {{Tools::showIfNotNull( $data['style'], 'size_contents_frm')}}em !important;
        }
    .color-contents-frm{
        color: {{Tools::showIfNotNull( $data['style'], 'color_contents_frm')}} !important;
    }
    .color-links-frm{
        color: {{Tools::showIfNotNull( $data['style'], 'color_links_frm')}} !important;
    }
    .typo-btns-frm{
        font-family: {{Tools::showIfNotNull( $data['style'], 'typo_btns_frm')}} !important;
        }
    .color-btns-frm{
        background-color: {{Tools::showIfNotNull( $data['style'], 'color_btns_frm')}} !important
        }
    .color-btns-frm:hover{
        background-color: {{Tools::showIfNotNull( $data['style'], 'color_hover_btns_frm')}} !important
        }
    .color-text-btns-frm{
        color: {{Tools::showIfNotNull( $data['style'], 'color_text_btns_frm')}} !important
    }
    .image_bg_txt > div > p{
        background-image: url({{URL::asset('/img/' . Tools::showIfNotNull( $data['style'], 'image_bg_txt'))}}) !important;
        background-repeat: repeat !important;
    }
    .color-bg-txt > div > p {
        background-color: {{Tools::showIfNotNull( $data['style'], 'color_bg_txt')}} !important;
    }
    .typo-txt, .typo-txt > div >  p{
        font-family: {{Tools::showIfNotNull( $data['style'], 'typo_txt')}} !important;
    }
    .size-txt, .size-txt > div > p {
        font-size: {{Tools::showIfNotNull( $data['style'], 'size_txt')}}em !important;
    }
    .color-txt, .color-txt > div > p{
        color: {{Tools::showIfNotNull( $data['style'], 'color_txt')}} !important;
    }
    .href-color-txt > div > p >  a{
        color: {{Tools::showIfNotNull( $data['style'], 'href_color_txt')}} !important;
    }
    .typo-btns-txt, .typo-btns-txt > div > p{
        font-family: {{Tools::showIfNotNull( $data['style'], 'typo_btns_txt')}} !important;
    }
    .color-btns-txt, .color-btns-txt > div > p{
        background-color: {{Tools::showIfNotNull( $data['style'], 'color_btns_txt')}} !important;
    }
    .color-btns-txt:hover, .color-btns-txt:hover > div > p{
        background-color: {{Tools::showIfNotNull( $data['style'], 'color_hover_btns_txt')}} !important;
    }
    .color-text-btns-txt, .color-text-btns-txt > div > p{
        color: {{Tools::showIfNotNull( $data['style'], 'color_text_btns_txt')}} !important;
    }
    .color-bg-ck{
        background-color: {{Tools::showIfNotNull( $data['style'], 'color_bg_ck')}}
    }
    .opacity-ck{
        opacity: {{Tools::showIfNotNull( $data['style'], 'opacity_ck')}};
    }
    .typo-ck, .typo-ck > p > span{
        font-family: {{Tools::showIfNotNull( $data['style'], 'typo_ck')}} !important;
    }
    .size-ck, .size-ck > p > span{
        font-size: {{Tools::showIfNotNull( $data['style'], 'size_ck')}}em !important;
    }
    .color-ck, .color-ck > p > span{
        color: {{Tools::showIfNotNull( $data['style'], 'color_ck')}} !important;
    }

    .typo-btns-ck{
        font-family: {{Tools::showIfNotNull( $data['style'], 'typo_btns_ck')}} !important;
    }
    .color-btns-ck{
        background-color: {{Tools::showIfNotNull( $data['style'], 'color_btns_ck')}} !important;
    }
    .color-btns-ck:hover{
        background-color: {{Tools::showIfNotNull( $data['style'], 'color_hover_btns_ck')}} !important;
    }
    .color-text-btns-ck{
        color: {{Tools::showIfNotNull( $data['style'], 'color_text_btns_ck')}} !important;
    }

</style>