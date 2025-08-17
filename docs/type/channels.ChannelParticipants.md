# channels.ChannelParticipants

**Description** : *Channel/supergroup participants*

**Layer** : 211

```tl
channels.channelParticipants#9ab0feaf count:int participants:Vector<ChannelParticipant> chats:Vector<Chat> users:Vector<User> = channels.ChannelParticipants;
channels.channelParticipantsNotModified#f0173fe9 = channels.ChannelParticipants;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**channels.channelParticipants**](constructor/channels.channelParticipants) | Represents multiple channel participants |
| [**channels.channelParticipantsNotModified**](constructor/channels.channelParticipantsNotModified) | No new participant info could be found |