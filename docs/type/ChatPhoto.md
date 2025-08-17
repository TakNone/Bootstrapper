# ChatPhoto

**Description** : *Object defines a group profile photo*

**Layer** : 211

```tl
chatPhotoEmpty#37c1011c = ChatPhoto;
chatPhoto#1c6e1c11 flags:# has_video:flags.0?true photo_id:long stripped_thumb:flags.1?bytes dc_id:int = ChatPhoto;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**chatPhotoEmpty**](constructor/chatPhotoEmpty) | Group photo is not set |
| [**chatPhoto**](constructor/chatPhoto) | Group profile photo |