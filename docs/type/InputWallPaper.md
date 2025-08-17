# InputWallPaper

**Description** : *Wallpaper*

**Layer** : 211

```tl
inputWallPaper#e630b979 id:long access_hash:long = InputWallPaper;
inputWallPaperSlug#72091c80 slug:string = InputWallPaper;
inputWallPaperNoFile#967a462e id:long = InputWallPaper;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**inputWallPaper**](constructor/inputWallPaper) | Wallpaper |
| [**inputWallPaperSlug**](constructor/inputWallPaperSlug) | Wallpaper by slug (a unique ID, obtained from a wallpaper link ») |
| [**inputWallPaperNoFile**](constructor/inputWallPaperNoFile) | Wallpaper with no file access hash, used for example when deleting (unsave=true) wallpapers using account.saveWallPaper, specifying just the wallpaper ID |