import pandas as pd
df = pd.read_csv("./edu_bigdata_imp1.csv", encoding = 'big5', low_memory = False)
df_filtered = df[df['PseudoID'] == 71]
df1 = df_filtered[['dp001_review_start_time', 'dp001_review_end_time']].drop_duplicates(subset = 'dp001_review_start_time')
df1['dp001_review_start_time'] = pd.to_datetime(df1['dp001_review_start_time'])
df1['dp001_review_end_time'] = pd.to_datetime(df1['dp001_review_end_time'])
df1['dp001_review_start_time'] = df1['dp001_review_start_time'].dt.strftime('%Y/%m/%d')
df1['dp001_review_end_time'] = df1['dp001_review_end_time'].dt.strftime('%Y/%m/%d')
df2 = df1.drop_duplicates(subset = 'dp001_review_start_time')
df2 = df2.sort_values('dp001_review_start_time')
df2 = df2.reset_index(drop=True)
print(df2['dp001_review_start_time'])
