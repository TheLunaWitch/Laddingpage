wordCount = 0
lineCount = 0
for line in openRecording:
    print(line,end="")
    lineCount +=1
    wordCount +=len(line.split())
print(f"\nZOVEEL LIJNEN: {lineCount}")
print(f"ZOVEEL WORDEN: {wordCount}\n")
openReport.write(f"Aantal regels: {lineCount}\nAantal woorden: {wordCount}")

openRecording.close()
openReport.close()