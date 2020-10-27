using System.Net.Http;
using System.Threading.Tasks;
using Microsoft.Extensions.Configuration;
using Microsoft.Extensions.Logging;

namespace PrestaShopAPI
{
    public class Initializer
    {
        private readonly HttpClient _imgHttpClient;
        private readonly IConfiguration _config;
        private readonly ILogger<Initializer> _logger;

        public Initializer(IHttpClientFactory httpClientFactory, IConfiguration configuration, ILogger<Initializer> logger)
        {
            _imgHttpClient = httpClientFactory.CreateClient();
            _config = configuration;
            _logger = logger;
        }

        public async Task InitializeProducts()
        {

        }
    }
}
