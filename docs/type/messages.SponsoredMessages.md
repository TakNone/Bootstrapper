# messages.SponsoredMessages

**Description** : *A set of sponsored messages associated with a channel*

**Layer** : 211

```tl
messages.sponsoredMessages#ffda656d flags:# posts_between:flags.0?int start_delay:flags.1?int between_delay:flags.2?int messages:Vector<SponsoredMessage> chats:Vector<Chat> users:Vector<User> = messages.SponsoredMessages;
messages.sponsoredMessagesEmpty#1839490f = messages.SponsoredMessages;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.sponsoredMessages**](constructor/messages.sponsoredMessages) | A set of sponsored messages associated to a channel |
| [**messages.sponsoredMessagesEmpty**](constructor/messages.sponsoredMessagesEmpty) | No sponsored messages are available |