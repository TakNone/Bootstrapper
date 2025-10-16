# users.SavedMusic

**Description** : *List of songs \(document\.ids\) currently pinned on a user&#039;s profile, see here &raquo; for more info*

**Layer** : 216

```tl
users.savedMusicNotModified#e3878aa4 count:int = users.SavedMusic;
users.savedMusic#34a2f297 count:int documents:Vector<Document> = users.SavedMusic;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**users.savedMusicNotModified**](constructor/users.savedMusicNotModified) | This subset of the songs currently pinned on a user's profile hasn't changed, see here » for more info |
| [**users.savedMusic**](constructor/users.savedMusic) | List of songs currently pinned on a user's profile, see here » for more info |