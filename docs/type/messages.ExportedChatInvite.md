# messages.ExportedChatInvite

**Description** : *Contains info about a chat invite, and eventually a pointer to the newest chat invite*

**Layer** : 211

```tl
messages.exportedChatInvite#1871be50 invite:ExportedChatInvite users:Vector<User> = messages.ExportedChatInvite;
messages.exportedChatInviteReplaced#222600ef invite:ExportedChatInvite new_invite:ExportedChatInvite users:Vector<User> = messages.ExportedChatInvite;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.exportedChatInvite**](constructor/messages.exportedChatInvite) | Info about a chat invite |
| [**messages.exportedChatInviteReplaced**](constructor/messages.exportedChatInviteReplaced) | The specified chat invite was replaced with another one |