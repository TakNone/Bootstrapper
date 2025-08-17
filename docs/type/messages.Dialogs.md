# messages.Dialogs

**Description** : *Object contains a list of chats with messages and auxiliary data*

**Layer** : 211

```tl
messages.dialogs#15ba6c40 dialogs:Vector<Dialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.Dialogs;
messages.dialogsSlice#71e094f3 count:int dialogs:Vector<Dialog> messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.Dialogs;
messages.dialogsNotModified#f0e3e596 count:int = messages.Dialogs;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.dialogs**](constructor/messages.dialogs) | Full list of chats with messages and auxiliary data |
| [**messages.dialogsSlice**](constructor/messages.dialogsSlice) | Incomplete list of dialogs with messages and auxiliary data |
| [**messages.dialogsNotModified**](constructor/messages.dialogsNotModified) | Dialogs haven't changed |