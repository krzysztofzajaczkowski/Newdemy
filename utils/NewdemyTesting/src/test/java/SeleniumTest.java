import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import org.openqa.selenium.By;
import org.openqa.selenium.Keys;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;
import org.openqa.selenium.interactions.Actions;

import java.util.*;
import java.util.concurrent.TimeUnit;


public class SeleniumTest {
	WebDriver driver;

	@BeforeEach
	void setup() {
		System.setProperty("webdriver.chrome.driver",
				"C:\\Users\\rkulik\\sem5\\be_proj\\NewdemyTesting\\src\\test\\resources\\chromedriver.exe");
		driver = new ChromeDriver();
		driver.get("https://40.71.98.246/");
		driver.manage().timeouts().implicitlyWait(10, TimeUnit.SECONDS);
	}

	@Test
	void x() {
		if (true) {
			ignoreProtection();
		}
		double cartCost = 0;
		goToCategory("Projektowanie");
		Map<String, Integer> design = new HashMap<>(
				Map.of(
						"3ds-max-corona-wizualizacja-kuchni", 2,
						"adobe-after-effects-od-podstaw", 1,
						"adobe-illustrator-od-podstaw", 3,
						"3-narzedzia-do-kreatywnej-reklamy-dla-biznesu", 1,
						"3ds-max---v-ray---modelowanie-i-renderowanie-sofy", 1));
		cartCost += addToCartFromCurrentPage(design);
		goToCategory("Programowanie");
		Map<String, Integer> programing = new HashMap<>(
				Map.of(
						"10-projektow-w-czystym-javascript-cz-1", 1,
						"130-cwiczen-w-jezyku-python---data-science---pandas", 2,
						"150-cwiczen---programowanie-w-jezyku-c---od-a-do-z---2020", 2,
						"250-cwiczen---data-science-bootcamp-w-jezyku-python", 3,
						"android---od-kompletnego-zera-do-zaangazowanego-developera", 1
				));
		cartCost += addToCartFromCurrentPage(programing);
		goToCart();
		isCartCostValid(cartCost);
		removeFirstItemFromCart();
		createAccount();
		goToCart();
		placeOrder();
		viewOrderDetails();

		quitDriver();
	}

	private void quitDriver() {
		driver.close();
		driver.quit();
	}

	private void removeFirstItemFromCart() {
		clickElementByClass("remove-from-cart");
	}

	private void viewOrderDetails() {
		clickElementByClass("account");
		clickElementById("history-link");
		driver.findElement(By.cssSelector("a[data-link-action=\"view-order-details\"]")).click();
	}

	private void placeOrder() {
		driver.findElement(By.cssSelector("a[href$=\"wienie\"]")).click();
		driver.findElement(By.cssSelector("input[name=\"address1\"]")).sendKeys("someAddress 12");
		driver.findElement(By.cssSelector("input[name=\"postcode\"]")).sendKeys("12-345");
		driver.findElement(By.cssSelector("input[name=\"city\"]")).sendKeys("City");
		driver.findElement(By.cssSelector("button[name=\"confirm-addresses\"]")).click();
		driver.findElement(By.cssSelector("button[name=\"confirmDeliveryOption\"]")).click();
		driver.findElement(By.cssSelector("input[id=\"payment-option-1\"]")).click();
		driver.findElement(By.cssSelector("input[id=\"conditions_to_approve[terms-and-conditions]\"]")).click();
		driver.findElement(By.cssSelector(".btn.btn-primary.center-block")).click();
	}

	private void createAccount() {
		driver.findElement(By.cssSelector("a[rel=\"nofollow\"]")).click();
		clickElementByClass("no-account");
		driver.findElement(By.cssSelector("input[value=\"1\"]")).click();
		driver.findElement(By.cssSelector("input[name=\"firstname\"]")).sendKeys("john");
		driver.findElement(By.cssSelector("input[name=\"lastname\"]")).sendKeys("doe");
		driver.findElement(By.cssSelector("input[name=\"email\"]")).sendKeys(String.format("jdoe%s@pg.eti.pl", UUID.randomUUID().toString()));
		driver.findElement(By.cssSelector("input[name=\"password\"]")).sendKeys("jdoePass123" + Keys.ENTER);
	}

	private void clickElementByClass(String s) {
		driver.findElement(By.className(s)).click();
	}

	private void isCartCostValid(double cartCost) {
		String cartCostOnlineString = driver.findElement(By.cssSelector("div.cart-summary-line span.value")).getText();
		cartCostOnlineString = cartCostOnlineString.substring(0, cartCostOnlineString.length()-3).replace(',', '.');
		double cartCostOnline = Double.parseDouble(cartCostOnlineString);
		cartCost = Math.round(cartCost *100.0)/100.0;
		assert cartCostOnline == cartCost;
	}

	private void goToCart() {
		clickElementByClass("cart-qty");
	}

	private void ignoreProtection() {
		clickElementById("details-button");
		clickElementById("proceed-link");
	}

	private void clickElementById(String s) {
		driver.findElement(By.id(s)).click();
	}

	private double addToCartFromCurrentPage(Map<String, Integer> coursesAmount) {
		List<Double> prices = new LinkedList<>();
		coursesAmount.forEach((course, amount) -> {
			driver.findElements(By.className("product-title"))
					.stream()
					.filter(e -> e.findElement(By.tagName("a")).getAttribute("href").contains(course))
					.findFirst()
					.ifPresent(e -> {
						e.click();
						prices.add(amount * Double.parseDouble(
								driver.findElement(By.cssSelector("[itemprop=\"price\"]")).getAttribute("content")));
					});
			addToCartCurrentItem(amount);
			navigateBack();
		});
		return prices.stream().mapToDouble(Double::doubleValue).sum();
	}

	private void addToCartCurrentItem(int amount) {
		driver.findElement(By.id("quantity_wanted"))
				.sendKeys(Keys.CONTROL+"a", Keys.BACK_SPACE);
		driver.findElement(By.id("quantity_wanted"))
				.sendKeys(String.valueOf(amount) + Keys.ENTER);
		clickElementByClass("btn-secondary");
	}

	private void navigateBack() {
		driver.navigate().back();
	}

	private void goToCategory(String page) {
		new Actions(driver).moveToElement(driver.findElement(By.id("category-154"))).perform();
		List<WebElement> elementName = driver.findElements(By.className("dropdown-submenu"));
		Optional<WebElement> randomElement = elementName.stream().filter(e -> e.getText().equals(page)).findFirst();
		randomElement.ifPresent(WebElement::click);
	}

}
