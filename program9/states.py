import re

states = "Mississippi Alabama Texas Massachusetts Kansas"
state_list = states.split()
stateList = []

for i in state_list:
    if re.search("xas$", i):
        stateList.append(i)

for i in state_list:
    if re.search("^k.*s$", i, re.I):
        stateList.append(i)

for i in state_list:
    if re.search("^M.*s$", i):
        stateList.append(i)

for i in state_list:
    if re.search("a$", i):
        stateList.append(i)

for state in stateList:
    print(state)

print(states)



