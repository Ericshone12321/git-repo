import pandas as pd
df = pd.read_csv("./edu_bigdata_imp1.csv", encoding = 'big5', low_memory = False)
df_filtered = df[df['PseudoID'] == 281]
df_filtered = df_filtered[['dp001_video_item_sn', 'dp001_indicator']]
df_filtered = df_filtered.drop_duplicates(subset = 'dp001_video_item_sn')
for i in range(len(df_filtered)):
    if(i < len(df_filtered) - 1):
        print(str(df_filtered.iloc[i, 0]) + "-->" + str(df_filtered.iloc[i, 1]) + ',')
    else:
        print(str(df_filtered.iloc[i, 0]) + "-->" + str(df_filtered.iloc[i, 1]))