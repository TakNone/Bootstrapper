# upload.CdnFile

**Description** : *Represents the download status of a CDN file*

**Layer** : 211

```tl
upload.cdnFileReuploadNeeded#eea8e46e request_token:bytes = upload.CdnFile;
upload.cdnFile#a99fca4f bytes:bytes = upload.CdnFile;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**upload.cdnFileReuploadNeeded**](constructor/upload.cdnFileReuploadNeeded) | The file was cleared from the temporary RAM cache of the CDN and has to be re-uploaded |
| [**upload.cdnFile**](constructor/upload.cdnFile) | Represent a chunk of a CDN file |