for i in live_check:
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