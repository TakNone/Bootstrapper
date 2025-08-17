# messages.DiscussionMessage

**Description** : *Info about a message thread*

**Layer** : 211

```tl
messages.discussionMessage#a6341782 flags:# messages:Vector<Message> max_id:flags.0?int read_inbox_max_id:flags.1?int read_outbox_max_id:flags.2?int unread_count:int chats:Vector<Chat> users:Vector<User> = messages.DiscussionMessage;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.discussionMessage**](constructor/messages.discussionMessage) | Information about a message thread |