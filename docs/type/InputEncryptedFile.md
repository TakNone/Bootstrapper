# InputEncryptedFile

**Description** : *Object sets encrypted file for attachment*

**Layer** : 211

```tl
inputEncryptedFileEmpty#1837c364 = InputEncryptedFile;
inputEncryptedFileUploaded#64bd0306 id:long parts:int md5_checksum:string key_fingerprint:int = InputEncryptedFile;
inputEncryptedFile#5a17b5e5 id:long access_hash:long = InputEncryptedFile;
inputEncryptedFileBigUploaded#2dc173c8 id:long parts:int key_fingerprint:int = InputEncryptedFile;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputEncryptedFileEmpty**](constructor/inputEncryptedFileEmpty) | Empty constructor |
| [**inputEncryptedFileUploaded**](constructor/inputEncryptedFileUploaded) | Sets new encrypted file saved by parts using upload.saveFilePart method |
| [**inputEncryptedFile**](constructor/inputEncryptedFile) | Sets forwarded encrypted file for attachment |
| [**inputEncryptedFileBigUploaded**](constructor/inputEncryptedFileBigUploaded) | Assigns a new big encrypted file (over 10 MB in size), saved in parts using the method upload.saveBigFilePart |