# Reaction

**Description** : *Message reaction*

**Layer** : 211

```tl
reactionEmpty#79f5d419 = Reaction;
reactionEmoji#1b2286b8 emoticon:string = Reaction;
reactionCustomEmoji#8935fc73 document_id:long = Reaction;
reactionPaid#523da4eb = Reaction;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**reactionEmpty**](constructor/reactionEmpty) | No reaction |
| [**reactionEmoji**](constructor/reactionEmoji) | Normal emoji message reaction |
| [**reactionCustomEmoji**](constructor/reactionCustomEmoji) | Custom emoji message reaction |
| [**reactionPaid**](constructor/reactionPaid) | Represents a paid Telegram Star reaction » |