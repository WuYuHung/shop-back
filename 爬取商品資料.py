from pprint import pprint
from bs4 import BeautifulSoup
import requests
import json
import random
import re

def update(json_list, url, id):
    req = requests.get('https://store.nike.com/tw/zh_tw/pw/%E7%94%B7%E6%AC%BE-%E9%9E%8B%E6%AC%BE/7puZoi3?ipp=120')
    soup = BeautifulSoup(req.text, 'lxml')
    product_list = [i.text for index, i in enumerate(soup.findAll('p'))][1: -3]
    for index in range(len(product_list) - 1):
        temp = dict()
        temp['name'] = product_list[index]
        temp['category_id'] = 1
        temp['price'] = random.randint(30, 70) * 100
        temp['description'] = product_list[index + 1]
        if re.search(u'[\u4e00-\u9fff]', temp['name']):
            temp['description'], temp['name'] = temp['name'], temp['description']
        index += 1
        json_list.append(temp)

result_list = list()
urls = ['https://store.nike.com/tw/zh_tw/pw/%E7%94%B7%E6%AC%BE-%E9%9E%8B%E6%AC%BE/7puZoi3?ipp=120', 'https://store.nike.com/tw/zh_tw/pw/%E5%A5%B3%E6%AC%BE-%E9%9E%8B%E6%AC%BE/7ptZoi3?ipp=120', 'https://store.nike.com/tw/zh_tw/pw/%E7%94%B7%E7%AB%A5-%E9%9E%8B%E6%AC%BE/7pvZoi3?ipp=120', 'https://store.nike.com/tw/zh_tw/pw/%E5%A5%B3%E7%AB%A5-%E9%9E%8B%E6%AC%BE/7pwZoi3?ipp=120']
for index, url in enumerate(urls):
    update(result_list, url, index + 1)
with open('shoes_data.json', 'w') as outfile:
    json.dump(result_list, outfile)
