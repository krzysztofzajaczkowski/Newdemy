from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.remote.webelement import WebElement
from selenium.common.exceptions import NoSuchElementException
from selenium.common.exceptions import TimeoutException
import time
from course import Course

coursesObjectsList = []

# Web Driver configuration
PATH = "C:\Program Files (x86)\chromedriver.exe"
driver = webdriver.Chrome(PATH)
'''
chrome_options = webdriver.ChromeOptions()
chrome_options.add_argument('headless')
driver = webdriver.Chrome(chrome_options = chrome_options)
'''

# getting pages URLs
f = open("URL.txt", "r")
URLs = []
for x in f:
    URLs.append(x)
f.close()

# writing JSON obejcts as a string to the file
file = open('objectsInJSON.txt','a')


# searching through each page from file and through each subpage (< 1 2 3 ... 7 >)
for URL in URLs:
    emptyPage = False # means that the page number is out of range and there is no more content on this page
    subpageCounter = 18
    while not emptyPage:
        print(URL+'&p='+str(subpageCounter))
        driver.get(URL+'&p='+str(subpageCounter))
        subpageCounter += 1
        try: # element with this class name is a big container for all smaller divs. If it is not present then there is no content on the page
            WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, 'course-list--container--3zXPS')))
            container = driver.find_element_by_class_name('course-list--container--3zXPS')
            courses = container.find_elements_by_class_name('course-card--container--3w8Zm')
            driver.execute_script("window.scrollTo(0, document.body.scrollHeight);")
            courses_images = []
            for course in courses: # each course we convert into an object of 'Course' class (data extraction)
                title = course.find_element_by_class_name('udlite-heading-md').text
                desc = course.find_element_by_class_name('udlite-text-sm').text
                author = course.find_element_by_class_name('udlite-text-xs').text

                try:
                    spanElement = course.find_element_by_css_selector('span.star-rating--rating-number--3lVe8')
                except NoSuchElementException:
                    ratings = 'Brak ocen'
                else:
                    ratings = spanElement.text

                try:
                    priceDiv = course.find_element_by_css_selector('div.price-text--price-part--Tu6MH')
                    spans = priceDiv.find_elements_by_tag_name('span')
                    price = spans[len(spans)-1].text
                except NoSuchElementException:
                    price = 'Brak'

                try:
                    details = course.find_elements_by_css_selector('span.course-card--row--1OMjg')
                    courseLength = details[0].text
                    print(courseLength)
                    courseLevel = details[len(details)-1].text
                except NoSuchElementException:
                    print("Brak dodatkowych informacji")
                    courseLength = 'Brak informacji'
                    courseLevel = 'Brak informacji'

                try:
                    image = course.find_element_by_class_name('course-card--course-image--2sjYP')
                    ActionChains(driver).move_to_element(image).perform()
                    imageSourceURL = image.get_attribute('src')
                except NoSuchElementException:
                    print("Brak zdjęcia")

                c = Course(title, desc, author, ratings, price, imageSourceURL, courseLength, courseLevel)
                coursesObjectsList.append(c)

        except TimeoutException:
            print('[INFO] Ostatnia podstrona adresu URL')
            emptyPage = True

driver.quit()



for course in coursesObjectsList:
    file.write(course.makeJSON())
    file.write("\n")

file.close()
