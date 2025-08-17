# help.PromoData

**Description** : *Info about pinned MTProxy or Public Service Announcement peers*

**Layer** : 211

```tl
help.promoDataEmpty#98f6ac75 expires:int = help.PromoData;
help.promoData#8a4d87a flags:# proxy:flags.0?true expires:int peer:flags.3?Peer psa_type:flags.1?string psa_message:flags.2?string pending_suggestions:Vector<string> dismissed_suggestions:Vector<string> custom_pending_suggestion:flags.4?PendingSuggestion chats:Vector<Chat> users:Vector<User> = help.PromoData;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**help.promoDataEmpty**](constructor/help.promoDataEmpty) | No PSA/MTProxy info is available |
| [**help.promoData**](constructor/help.promoData) | MTProxy/Public Service Announcement information |