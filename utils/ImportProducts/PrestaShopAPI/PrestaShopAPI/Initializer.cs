using System;
using System.Collections.Generic;
using System.Linq;
using System.Net.Http;
using System.Threading.Tasks;
using System.Web;
using Bukimedia.PrestaSharp.Entities.AuxEntities;
using Bukimedia.PrestaSharp.Factories;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.Logging;
using PrestaShopAPI.Entities;
using PrestaShopAPI.Extensions;

namespace PrestaShopAPI
{
    public class Initializer
    {
        private readonly HttpClient _imgHttpClient;
        private readonly IConfiguration _config;
        private readonly ProductFactory productFactory;
        private readonly StockAvailableFactory stockAvailableFactory;
        private readonly ProductOptionFactory productOptionFactory;
        private readonly ProductOptionValueFactory productOptionValueFactory;
        private readonly ProductFeatureValueFactory productFeatureValueFactory;
        private readonly ProductFeatureFactory productFeatureFactory;
        private readonly ImageFactory imageFactory;
        private readonly CombinationFactory combinationsFactory;
        private readonly CategoryFactory categoryFactory;
        private readonly ILogger<Initializer> _logger;

        public Initializer(IHttpClientFactory httpClientFactory, IConfiguration configuration, ILogger<Initializer> logger)
        {
            _imgHttpClient = httpClientFactory.CreateClient();
            _config = configuration;
            string BaseUrl = _config.GetSection("prestaShopApi").GetValue<string>("address");
            string Account = _config.GetSection("prestaShopApi").GetValue<string>("key");
            string Password = "";
            productFactory = new ProductFactory(BaseUrl, Account, Password);
            stockAvailableFactory = new StockAvailableFactory(BaseUrl, Account, Password);
            productOptionFactory = new ProductOptionFactory(BaseUrl, Account, Password);
            productOptionValueFactory = new ProductOptionValueFactory(BaseUrl, Account, Password);
            productFeatureValueFactory = new ProductFeatureValueFactory(BaseUrl, Account, Password);
            productFeatureFactory = new ProductFeatureFactory(BaseUrl, Account, Password);
            imageFactory = new ImageFactory(BaseUrl, Account, Password);
            combinationsFactory = new CombinationFactory(BaseUrl, Account, Password);
            categoryFactory = new CategoryFactory(BaseUrl, Account, Password);
            _logger = logger;
        }

        public async Task<List<Category>> InitializeCategories(List<Course> courses)
        {
            int mainCategoryId = 2;

            var categoriesCat = new Bukimedia.PrestaSharp.Entities.category()
            {
                active = 1,
                id_parent = mainCategoryId,
                name = new List<language>
                    {
                        new language(1, "Kategorie".ToPrestaName())
                    },
                link_rewrite = new List<language>
                    {
                        new language(1, "kategorie".Slugify())
                    }
            };

            categoriesCat = await categoryFactory.AddAsync(categoriesCat);

            var categories = courses.GroupBy(c => c.Category).Select(g => g.First()).Select(c => new Category
            {
                Name = c.Category,
                ParentId = categoriesCat.id.Value
            }).Distinct().ToList();

            // add categories and set their IDs in internal entities
            foreach (var category in categories)
            {
                var innerCategory = new Bukimedia.PrestaSharp.Entities.category()
                {
                    active = 1,
                    id_parent = category.ParentId,
                    name = new List<language>
                        {
                            new language(1, category.Name.ToPrestaName())
                        },
                    link_rewrite = new List<language>
                        {
                            new language(1, category.Name.ToLower().Slugify())
                        }
                };
                innerCategory = await categoryFactory.AddAsync(innerCategory);
                await Task.Delay(1 * 10);
                category.Id = innerCategory.id.Value;
            }

            var subcategories = courses.GroupBy(c => c.Subcategory).Select(g => g.First()).Select(c => new Category
            {
                Name = c.Subcategory,
                ParentId = categories.First(cat => cat.Name == c.Category).Id
            }).Distinct().ToList();

            // add subcategories and set their IDs in internal entities
            foreach (var category in subcategories)
            {
                var innerCategory = new Bukimedia.PrestaSharp.Entities.category()
                {
                    active = 1,
                    id_parent = category.ParentId,
                    name = new List<language>
                        {
                            new language(1, category.Name.ToPrestaName())
                        },
                    link_rewrite = new List<language>
                        {
                            new language(1, category.Name.ToLower().Slugify())
                        }
                };
                innerCategory = await categoryFactory.AddAsync(innerCategory);
                await Task.Delay(1 * 10);
                category.Id = innerCategory.id.Value;
            }

            var allCategories = categories;
            allCategories.AddRange(subcategories);

            return subcategories;
        }

        public async Task FixProductsCategoryTree(List<Bukimedia.PrestaSharp.Entities.product> products)
        {
            var categories = await categoryFactory.GetAllAsync();
            foreach (var product in products)
            {
                var currentCatId = product.associations.categories.First().id;
                var currentCat = categories.First(c => c.id == currentCatId);
                while (currentCat.id_parent.HasValue && currentCat.id_parent != 0)
                {
                    currentCatId = currentCat.id_parent.Value;
                    if (product.associations.categories.All(c => c.id != currentCatId))
                    {
                        product.associations.categories.Add(new category(currentCatId));
                    }
                    currentCat = categories.First(c => c.id == currentCatId);
                }

                await productFactory.UpdateAsync(product);
            }
        }

        public async Task FixProductDescriptionHardSpace(List<Bukimedia.PrestaSharp.Entities.product> products)
        {
            var counter = 0;

            foreach (var product in products)
            {
                var encoded = HttpUtility.HtmlEncode(product.description.First().Value);//.Replace("&amp;amp;nbsp", " ");
                if (encoded.Contains("&amp;amp;nbsp"))
                {
                    ++counter;
                    product.description.First().Value = HttpUtility.HtmlDecode(encoded.Replace("&amp;amp;nbsp", " ").Replace("&amp", " ").Replace("nbsp", " "));
                    try
                    {
                        await productFactory.UpdateAsync(product);
                    }
                    catch (Exception e)
                    {
                        _logger.LogError("Not working id: {id}", product.id);
                    }
                }
            }

        }

        public async Task InitializeProducts()
        {

        }
    }
}
