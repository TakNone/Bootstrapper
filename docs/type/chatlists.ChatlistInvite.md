# chatlists.ChatlistInvite

**Description** : *Info about a chat folder deep link »*

**Layer** : 211

```tl
chatlists.chatlistInviteAlready#fa87f659 filter_id:int missing_peers:Vector<Peer> already_peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
chatlists.chatlistInvite#f10ece2f flags:# title_noanimate:flags.1?true title:TextWithEntities emoticon:flags.0?string peers:Vector<Peer> chats:Vector<Chat> users:Vector<User> = chatlists.ChatlistInvite;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**chatlists.chatlistInviteAlready**](constructor/chatlists.chatlistInviteAlready) | Updated info about a chat folder deep link » we already imported |
| [**chatlists.chatlistInvite**](constructor/chatlists.chatlistInvite) | Info about a chat folder deep link » |