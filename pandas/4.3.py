import pandas as pd
df = pd.read_csv("./edu_bigdata_imp1.csv", encoding = 'big5', low_memory = False)
df1 = df['dp002_verb_display_zh_TW'].value_counts()
print(df1.head(3))