{**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License 3.0 (AFL-3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* https://opensource.org/licenses/AFL-3.0
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
* @author    PrestaShop SA <contact@prestashop.com>
* @copyright 2007-2018 PrestaShop SA
* @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
* International Registered Trademark & Property of PrestaShop SA
*}

<section class="featured-products clearfix top-margin bottom-margin">

<div hidden id="recommendations_container" class="container">
  <div class="section-title">
    <span>Rekomendacje</span>
  </div>
  <div>
    <div>
          <div id="recommendations_row" style="display: flex;"></div>
        </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script>
var last_seen_cat = Cookies.get('last_seen');
var recommended;
var category_rewrite;
var recommendations_row = document.querySelector("#recommendations_row");
var recommendations_container = document.querySelector("#recommendations_container");
var base_url = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');
if (last_seen_cat != undefined) {
  recommendations_container.hidden = false;
  axios.get(base_url + "/api/categories/" + last_seen_cat + "?output_format=JSON&ws_key=3IE7BSDF2WK458ZLJ67NT8H3X7QR952M")
    .then(resp => {
    category_rewrite = resp.data.category.link_rewrite;
    axios.get(base_url + "/api/products?output_format=JSON&display=[name,id,price,link_rewrite]&filter[id_category_default]=" + last_seen_cat + "&ws_key=3IE7BSDF2WK458ZLJ67NT8H3X7QR952M")
      .then(resp2 => {
        const shuffled = resp2.data.products.sort(() => 0.5 - Math.random());
        recommended = shuffled.slice(0,4);
        recommended.forEach(e => {
          e.link = base_url + "/index.php?id_product=" + e.id + "&rewrite=" + e.link_rewrite + "&controller=product";
          e.image = base_url + "/img/p/" + e.id.toString().charAt(0) + "/" + e.id.toString().charAt(1) + "/" + e.id.toString().charAt(2) + "/" + e.id + "-home_default.jpg";
          var container = document.createElement("div");
          var link = document.createElement("a");
          link.setAttribute("href", e.link);
          var photo = document.createElement("img");
          photo.setAttribute("src", e.image);
          var title = document.createElement("p");
          title.innerText = e.name;
          var price = document.createElement("p");
          price.innerText = e.price * 1.23 + "zł";
          link.appendChild(photo);
          link.appendChild(title);
          link.appendChild(price);
          container.appendChild(link);
          recommendations_row.appendChild(container);
        })
      })
  })
}
</script>

    <div class="container">
        <div class="section-title">
            <span>{l s='Special' d='Shop.Theme.Catalog'}
                <i>{l s='Products' d='Shop.Theme.Catalog'}</i>
            </span>
        </div>
        <div class="products-grid">
            <div class="row">
                <div class="products product-slider">
                    {foreach from=$products item="product"}
                        {include file="catalog/_partials/miniatures/product.tpl" product=$product}
                    {/foreach}
                </div>
                <div class="all-products">
                    <a class="all-product-link float-xs-left float-md-right h4" href="{$allSpecialProductsLink}">
                        {l s='All sale products' d='Shop.Theme.Catalog'}<i class="material-icons">&#xE315;</i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

