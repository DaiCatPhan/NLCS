
import pandas as pd
import numpy as np 
#a đọc dữ liệu đánh giá chất lượng rượu vang đỏ trên UCI
dulieu = pd.read_csv("winequality-red.csv",delimiter=";")

#b Tạp dữ liệu có 1599 phần tử  , 6 nhãn

print("So phan tu : ",len(dulieu))
print("So luong nhan: ", len(np.unique(dulieu.quality)))
print("giá trị khác nhau của biến :",np.unique(dulieu))
print("số lượng và giá trị khác nhua của biến" , dulieu['quality'].value_counts())


 # C
X =dulieu.iloc[:,0:11]
y = dulieu.quality 



from sklearn.naive_bayes import GaussianNB
from sklearn.naive_bayes import MultinomialNB
from sklearn.model_selection import train_test_split
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 0.4, random_state = 1)



print("So luong phan tu trong tap test: ",len(X_test))
print("Nhãn của các phần tử thuộc test",(np.unique(y_test)))


# D Xây dựng mô hình 7 láng giền

#D1
from sklearn.neighbors import KNeighborsClassifier
from sklearn.metrics import accuracy_score
from sklearn.metrics import confusion_matrix

Mohinh_KNN = KNeighborsClassifier(n_neighbors = 7)
Mohinh_KNN.fit(X_train, y_train)
y_pred = Mohinh_KNN.predict(X_test)

print("Do chinh xac tong the KNN: ", accuracy_score(y_test, y_pred) * 100)
print("Do chinh xac trong tung lop KNN: \n",confusion_matrix(y_test, y_pred, labels=np.unique(dulieu.quality).tolist()))

"""
Do chinh xac tong the KNN:  50.31250000000001
Do chinh xac trong tung lop KNN:
 [[  0   0   0   2   0   0]
 [  0   1  10  14   0   0]
 [  1   1 183  82   4   0]
 [  0   0 122 123  13   0]
 [  0   1  26  36  15   0]
 [  0   0   1   2   3   0]]
"""

#D2
y_pred_8 = Mohinh_KNN.predict(X_test.iloc[0:8])

print("Do chinh xac tong the 8 phan tu dau tien: ", accuracy_score(y_test.iloc[0:8], y_pred_8) * 100)
print("Do chinh xac trong tung lop 8 phan tu dau tien: \n",confusion_matrix(y_test.iloc[0:8], y_pred_8, labels=np.unique(dulieu.quality).tolist()))

""" 
    Do chinh xac tong the:  62.5
    Do chinh xac trong tung lop: 
    [[0 0 0 0 0 0]
    [0 0 0 0 0 0]
    [0 0 2 0 0 0]
    [0 0 2 3 1 0]
    [0 0 0 0 0 0]
    [0 0 0 0 0 0]]
"""


#E
from sklearn.metrics import confusion_matrix
model = GaussianNB()
model.fit(X_train, y_train)

thute = y_test
y_pred_bayes = model.predict(X_test)
thute

cnf_matrix_gnb = confusion_matrix(thute, y_pred_bayes) # y_pred_bayes = dubao

print("Do chinh xac tong the bayes: ", accuracy_score(y_test, y_pred_bayes) * 100)
print("Do chinh xac trong tung lop bayes: \n", cnf_matrix_gnb)

# KQ
"""
Do chinh xac tong the bayes:  54.84375
Do chinh xac trong tung lop bayes:
 [[  1   1   0   0   0   0]
 [  1   1  13   9   1   0]
 [  1   9 181  70  10   0]
 [  0  10  69 127  46   6]
 [  0   0   6  29  41   2]
 [  0   0   0   2   4   0]]
"""


#F
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size = 1/3, random_state = 1)

Mohinh_KNN = KNeighborsClassifier(n_neighbors = 7)
Mohinh_KNN.fit(X_train, y_train)
y_pred = Mohinh_KNN.predict(X_test)
accKnn = accuracy_score(y_test, y_pred) * 100
print("Do chinh xac tong the KNN (2/3 hoc va 1/3): ", accKnn)

model.fit(X_train, y_train)

thute = y_test
y_pred_bayes = model.predict(X_test)
thute

cnf_matrix_gnb = confusion_matrix(thute, y_pred_bayes) # y_pred_bayes = dubao

accBayes = accuracy_score(y_test, y_pred_bayes) * 100

print("Do chinh xac tong the bayes (2/3 hoc va 1/3): ", accBayes)

""" 
kq: 
    Do chinh xac tong the KNN (2/3 hoc va 1/3):  50.093808630394
    Do chinh xac tong the bayes (2/3 hoc va 1/3):  54.409005628517825
=> Vay bayes co do chinh xac cao hon cua KNN 54.40 > 50.09 
"""