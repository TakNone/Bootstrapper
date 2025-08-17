# messages.MessageReactionsList

**Description** : *List of peers that reacted to a specific message*

**Layer** : 211

```tl
messages.messageReactionsList#31bd492d flags:# count:int reactions:Vector<MessagePeerReaction> chats:Vector<Chat> users:Vector<User> next_offset:flags.0?string = messages.MessageReactionsList;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.messageReactionsList**](constructor/messages.messageReactionsList) | List of peers that reacted to a specific message |