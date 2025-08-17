# EncryptedFile

**Description** : *Seta an encrypted file*

**Layer** : 211

```tl
encryptedFileEmpty#c21f497e = EncryptedFile;
encryptedFile#a8008cd8 id:long access_hash:long size:long dc_id:int key_fingerprint:int = EncryptedFile;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**encryptedFileEmpty**](constructor/encryptedFileEmpty) | Empty constructor, non-existing file |
| [**encryptedFile**](constructor/encryptedFile) | Encrypted file |