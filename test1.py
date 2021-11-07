import requests
from bs4 import BeautifulSoup
init = 0
    
final_print = []
final_print += ['-----Live Scores-----\n']
st = ""
score_check = 0


url = "https://www.espncricinfo.com/live-cricket-score"
r = requests.get(url)
htmlContent = r.content
soup = BeautifulSoup(htmlContent, 'html.parser')
teams = soup.find_all("div", class_="team")
for team in teams:
    score_info = team.find("div", class_="score-detail")
    name_info = team.find("div", class_="name-detail")
    #print(name_info.get_text() + " " + " vs ")
    if score_info and name_info and score_check%2 == 0:
        st = name_info.get_text() + " " + score_info.get_text() + " vs "
        score_check+=1
    elif score_info and name_info and score_check%2 == 1:
        st = st + name_info.get_text() + " " + score_info.get_text()
        final_print.append(st)
        score_check+=1
    elif score_info==" " and name_info and score_check%2 == 1:
        print("Hi")
        st = name_info.get_text() + " vs "
        score_check+=1
    elif score_info==[] and name_info and score_check%2 == 1:
        st = st + name_info.get_text() 
        final_print.append(st)
        score_check+=1
#print(check_one)
#print(check_two)
# for i in live_check:
#     #print(i.get_text())
#     #print(i," ------------------------------------------")
#     for ik in i.children:
#         score_info = team.find("div", class_="score-detail")
#         if(score_check % 2 == 0):
#            final_print.append(st)
#            st = ik.get_text() + " vs "
#         elif(score_check % 2 == 1):
#            st = st + ik.get_text()
#         score_check+=1
# print('\n'.join(final_print))
print('\n'.join(final_print))