# messages.SavedDialogs

**Description** : *Represents some saved message dialogs »*

**Layer** : 211

```tl
messages.savedDialogs#f83ae221 dialogs:Vector<SavedDialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.SavedDialogs;
messages.savedDialogsSlice#44ba9dd9 count:int dialogs:Vector<SavedDialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.SavedDialogs;
messages.savedDialogsNotModified#c01f6fe8 count:int = messages.SavedDialogs;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.savedDialogs**](constructor/messages.savedDialogs) | Represents some saved message dialogs » |
| [**messages.savedDialogsSlice**](constructor/messages.savedDialogsSlice) | Incomplete list of saved message dialogs » with messages and auxiliary data |
| [**messages.savedDialogsNotModified**](constructor/messages.savedDialogsNotModified) | The saved dialogs haven't changed |