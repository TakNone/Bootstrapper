# messages.Messages

**Description** : *Object contains information on list of messages with auxiliary data*

**Layer** : 211

```tl
messages.messages#8c718e87 messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.Messages;
messages.messagesSlice#762b263d flags:# inexact:flags.1?true count:int next_rate:flags.0?int offset_id_offset:flags.2?int search_flood:flags.3?SearchPostsFlood messages:Vector<Message> chats:Vector<Chat> users:Vector<User> = messages.Messages;
messages.channelMessages#c776ba4e flags:# inexact:flags.1?true pts:int count:int offset_id_offset:flags.2?int messages:Vector<Message> topics:Vector<ForumTopic> chats:Vector<Chat> users:Vector<User> = messages.Messages;
messages.messagesNotModified#74535f21 count:int = messages.Messages;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**messages.messages**](constructor/messages.messages) | Full list of messages with auxiliary data |
| [**messages.messagesSlice**](constructor/messages.messagesSlice) | Incomplete list of messages and auxiliary data |
| [**messages.channelMessages**](constructor/messages.channelMessages) | Channel messages |
| [**messages.messagesNotModified**](constructor/messages.messagesNotModified) | No new messages matching the query were found |