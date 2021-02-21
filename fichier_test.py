#!/usr/bin/env /Applications/MAMP/Library/bin/python

import mysql.connector

config = {
  'user': 'dan',
  'password': 'dan',
  'host': 'localhost',
  'port': 3306,
  'database': 'classicmodels',
  'raise_on_warnings': True
}

cnx = mysql.connector.connect(**config)

cursor = cnx.cursor(dictionary=True)

cursor.execute("SELECT customerNumber, customerName FROM customers")

results = cursor.fetchall()

for row in results:
  id = row['customerNumber']
  title = row['customerName']
  print '%s | %s' % (id, title)

cnx.close()