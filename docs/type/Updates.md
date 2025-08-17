# Updates

**Description** : *Object which is perceived by the client without a call on its part when an event occurs*

**Layer** : 211

```tl
updatesTooLong#e317af7e = Updates;
updateShortMessage#313bc7f8 flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true id:int user_id:long message:string pts:int pts_count:int date:int fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long reply_to:flags.3?MessageReplyHeader entities:flags.7?Vector<MessageEntity> ttl_period:flags.25?int = Updates;
updateShortChatMessage#4d6deea5 flags:# out:flags.1?true mentioned:flags.4?true media_unread:flags.5?true silent:flags.13?true id:int from_id:long chat_id:long message:string pts:int pts_count:int date:int fwd_from:flags.2?MessageFwdHeader via_bot_id:flags.11?long reply_to:flags.3?MessageReplyHeader entities:flags.7?Vector<MessageEntity> ttl_period:flags.25?int = Updates;
updateShort#78d4dec1 update:Update date:int = Updates;
updatesCombined#725b04c3 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq_start:int seq:int = Updates;
updates#74ae4240 updates:Vector<Update> users:Vector<User> chats:Vector<Chat> date:int seq:int = Updates;
updateShortSentMessage#9015e101 flags:# out:flags.1?true id:int pts:int pts_count:int date:int media:flags.9?MessageMedia entities:flags.7?Vector<MessageEntity> ttl_period:flags.25?int = Updates;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**updatesTooLong**](constructor/updatesTooLong) | Too many updates, it is necessary to execute updates.getDifference |
| [**updateShortMessage**](constructor/updateShortMessage) | Info about a message sent to (received from) another user |
| [**updateShortChatMessage**](constructor/updateShortChatMessage) | Shortened constructor containing info on one new incoming text message from a chat |
| [**updateShort**](constructor/updateShort) | Shortened constructor containing info on one update not requiring auxiliary data |
| [**updatesCombined**](constructor/updatesCombined) | Constructor for a group of updates |
| [**updates**](constructor/updates) | Full constructor of updates |
| [**updateShortSentMessage**](constructor/updateShortSentMessage) | Shortened constructor containing info on one outgoing message to a contact (the destination chat has to be extracted from the method call that returned this object) |