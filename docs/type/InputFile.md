# InputFile

**Description** : *Defines a file uploaded by the client*

**Layer** : 211

```tl
inputFile#f52ff27f id:long parts:int name:string md5_checksum:string = InputFile;
inputFileBig#fa4f0bb5 id:long parts:int name:string = InputFile;
inputFileStoryDocument#62dc8b48 id:InputDocument = InputFile;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputFile**](constructor/inputFile) | Defines a file saved in parts using the method upload.saveFilePart |
| [**inputFileBig**](constructor/inputFileBig) | Assigns a big file (over 10 MB in size), saved in part using the method upload.saveBigFilePart |
| [**inputFileStoryDocument**](constructor/inputFileStoryDocument) | Used to edit the thumbnail/static preview of a story, see here » for more info on the full flow |