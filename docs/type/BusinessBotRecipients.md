# BusinessBotRecipients

**Description** : *Specifies the private chats that a connected business bot » may receive messages and interact with*

**Layer** : 211

```tl
businessBotRecipients#b88cf373 flags:# existing_chats:flags.0?true new_chats:flags.1?true contacts:flags.2?true non_contacts:flags.3?true exclude_selected:flags.5?true users:flags.4?Vector<long> exclude_users:flags.6?Vector<long> = BusinessBotRecipients;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**businessBotRecipients**](constructor/businessBotRecipients) | Specifies the private chats that a connected business bot » may receive messages and interact with |