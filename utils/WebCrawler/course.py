import json

class Course:
    def __init__(self, title, description, author, rating, price, imageSource, length, level):
        self.imageSource = imageSource
        self.title = title
        self.desciption = description
        self.author = author
        self.rating = 'Ocena: ' + rating
        self.price = 'Darmowy'if price == 'Free' else price[2:] + ' zł'
        self.level = 'Wszystkie poziomy' if level == 'All Levels' \
                else ('Początkujący' if level == 'Beginner' \
                else ('Średnio zaawansowany' if level == 'Intermediate' \
                else 'Ekspert'))
        self.length = length[0:length.find(' ')] + ' godzin(y)' if length[len(length)-5:len(length)] == 'hours' \
                else (length[0:length.find(' ')] + ' godzina' if length[len(length)-4:len(length)] == 'hour' \
                else (length[0:length.find(' ')] + ' minut' if length[len(length)-4:len(length)] == 'mins' \
                else length))


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

    def getLength(self):
        return self.length

    def getLevel(self):
        return self.level


    def makeJSON(self):
        dataString = {}
        dataString['title'] = self.title
        dataString['description'] = self.desciption
        dataString['author'] = self.author
        dataString['rating'] = self.rating
        dataString['price'] = self.price
        dataString['imageSource'] = self.imageSource
        dataString['length'] = self.length
        dataString['level'] = self.level
        jsonObject = json.dumps(dataString, ensure_ascii=False).encode('utf8')
        jsonObject = jsonObject.decode('utf8')
        return jsonObject