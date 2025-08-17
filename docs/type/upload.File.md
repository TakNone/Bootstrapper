# upload.File

**Description** : *Contains info on file*

**Layer** : 211

```tl
upload.file#96a18d5 type:storage.FileType mtime:int bytes:bytes = upload.File;
upload.fileCdnRedirect#f18cda44 dc_id:int file_token:bytes encryption_key:bytes encryption_iv:bytes file_hashes:Vector<FileHash> = upload.File;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**upload.file**](constructor/upload.file) | File content |
| [**upload.fileCdnRedirect**](constructor/upload.fileCdnRedirect) | The file must be downloaded from a CDN DC |