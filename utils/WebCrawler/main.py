from selenium import webdriver
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.remote.webelement import WebElement
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
f = open("URLs.txt", "r")
URLs = []
for x in f:
    URLs.append(x)
f.close()

# writing JSON obejcts as a string to the file
#file = open('objectsInJSON.txt','a')


# searching through each page from file and through each subpage (< 1 2 3 ... 7 >)
for URL in URLs:
    emptyPage = False # means that the page number is out of range and there is no more content on this page
    subpageCounter = 1
    while not emptyPage:
        print(URL+'&p='+str(subpageCounter))
        driver.get(URL+'&p='+str(subpageCounter))
        subpageCounter += 1
        try: # element with this class name is a big container for all smaller divs. If it is not present then there is no content on the page
            WebDriverWait(driver, 10).until(EC.presence_of_element_located((By.CLASS_NAME, 'course-list--container--3zXPS')))
            container = driver.find_element_by_class_name('course-list--container--3zXPS')

            try: # inside this big container there are some smaller divs with courses content (each course div has the same class name)
                WebDriverWait(driver, 20).until(EC.presence_of_all_elements_located((By.CLASS_NAME, 'course-card--container--3w8Zm')))
                courses = container.find_elements_by_class_name('course-card--container--3w8Zm')

                for course in courses: # each course we convert into an object of 'Course' class (data extraction)
                    title = course.find_element_by_class_name('udlite-heading-md').text
                    desc = course.find_element_by_class_name('udlite-text-sm').text
                    author = course.find_element_by_class_name('udlite-text-xs').text

                    try:
                        spanElements = course.find_elements_by_css_selector('span.star-rating--rating-number--3lVe8')
                        ratings = spanElements[len(spanElements)-1].text
                    except:
                        ratings = 'Brak ocen'


                    priceDiv = course.find_element_by_css_selector('div.price-text--price-part--Tu6MH')
                    spans = priceDiv.find_elements_by_tag_name('span')
                    price = spans[len(spans)-1].text


                    c = Course(title, desc, author, ratings, price)
                    coursesObjectsList.append(c)
            except:
                print('[INFO] No courses on the page')
        except:
            print('[INFO] The last page of current URL ')
            emptyPage = True
    print("current courses number: " + str(len(coursesObjectsList)))

driver.quit()

'''
for course in coursesObjectsList:
    file.write(course.makeJSON())
    file.write("\n")
'''
#file.close()

