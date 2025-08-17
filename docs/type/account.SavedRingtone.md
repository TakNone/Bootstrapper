# account.SavedRingtone

**Description** : *Contains information about a saved notification sound*

**Layer** : 211

```tl
account.savedRingtone#b7263f6d = account.SavedRingtone;
account.savedRingtoneConverted#1f307eb7 document:Document = account.SavedRingtone;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**account.savedRingtone**](constructor/account.savedRingtone) | The notification sound was already in MP3 format and was saved without any modification |
| [**account.savedRingtoneConverted**](constructor/account.savedRingtoneConverted) | The notification sound was not in MP3 format and was successfully converted and saved, use the returned Document to refer to the notification sound from now on |