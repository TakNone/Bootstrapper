# InputSecureFile

**Description** : *Secure passport file, for more info see the passport docs »*

**Layer** : 211

```tl
inputSecureFileUploaded#3334b0f0 id:long parts:int md5_checksum:string file_hash:bytes secret:bytes = InputSecureFile;
inputSecureFile#5367e5be id:long access_hash:long = InputSecureFile;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputSecureFileUploaded**](constructor/inputSecureFileUploaded) | Uploaded secure file, for more info see the passport docs » |
| [**inputSecureFile**](constructor/inputSecureFile) | Pre-uploaded passport file, for more info see the passport docs » |