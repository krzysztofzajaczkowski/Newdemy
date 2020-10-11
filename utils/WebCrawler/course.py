import json

class Course:
    def __init__(self, title, description, author, rating, price, imageSource):
        self.imageSource = imageSource
        self.title = title
        self.desciption = description
        self.author = author
        self.rating = 'Ocena: ' + rating
        self.price = 'Darmowy'if price == 'Free' else price[2:] + ' zł'


    def setImageSource(self, imageSource):
        self.imageSource = imageSource

    def setTitle(self, title):
        self.title = title

    def setDesciption(self, desciption):
        self.desciption = desciption

    def setAuthor(self, author):
        self.author = author

    def setRating(self, ratings):
        self.rating = rating

    def setPrice(self, price):
        self.price = price

    def getImageSource(self):
        return self.imageSource

    def getTitle(self):
        return self.title

    def getDescription(self):
        return self.desciption

    def getAuthor(self):
        return self.author

    def getRating(self):
        return self.rating

    def getPrice(self):
        return self.price

    def serializeObject(self):
        s = '[COURSE INFO] ' + self.getTitle() + ' | ' + self.getAuthor() + ' | ' + self.getRating() + ' | ' + self.getPrice() + ' | ' + self.getImageSource()
        return s


    def makeJSON(self):
        dataString = {}
        dataString['title'] = self.title
        dataString['description'] = self.desciption
        dataString['author'] = self.author
        dataString['rating'] = self.rating
        dataString['price'] = self.price
        dataString['imageSource'] = self.imageSource
        jsonObject = json.dumps(dataString, ensure_ascii=False).encode('utf8')
        jsonObject = jsonObject.decode('utf8')
        return jsonObject