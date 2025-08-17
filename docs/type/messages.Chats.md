# messages.Chats

**Description** : *Object contains list of chats with auxiliary data*

**Layer** : 211

```tl
messages.chats#64ff9fd5 chats:Vector<Chat> = messages.Chats;
messages.chatsSlice#9cd81144 count:int chats:Vector<Chat> = messages.Chats;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.chats**](constructor/messages.chats) | List of chats with auxiliary data |
| [**messages.chatsSlice**](constructor/messages.chatsSlice) | Partial list of chats, more would have to be fetched with pagination |