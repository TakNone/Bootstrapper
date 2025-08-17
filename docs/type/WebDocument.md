# WebDocument

**Description** : *Remote document*

**Layer** : 211

```tl
webDocument#1c570ed1 url:string access_hash:long size:int mime_type:string attributes:Vector<DocumentAttribute> = WebDocument;
webDocumentNoProxy#f9c8bcc6 url:string size:int mime_type:string attributes:Vector<DocumentAttribute> = WebDocument;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**webDocument**](constructor/webDocument) | Remote document |
| [**webDocumentNoProxy**](constructor/webDocumentNoProxy) | Remote document that can be downloaded without proxying through telegram |