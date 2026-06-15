# DraftMessage

**Description** : *Represents a message draft*

**Layer** : 227

```tl
draftMessageEmpty#1b0c841a flags:# date:flags.0?int = DraftMessage;
draftMessage#60fe3294 flags:# no_webpage:flags.1?true invert_media:flags.6?true reply_to:flags.4?InputReplyTo message:string entities:flags.3?Vector<MessageEntity> media:flags.5?InputMedia date:int effect:flags.7?long suggested_post:flags.8?SuggestedPost rich_message:flags.9?RichMessage = DraftMessage;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**draftMessageEmpty**](constructor/draftMessageEmpty) | Empty draft |
| [**draftMessage**](constructor/draftMessage) | Represents a message draft |