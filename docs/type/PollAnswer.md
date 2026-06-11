# PollAnswer

**Description** : *Indicates a possible answer to a poll*

**Layer** : 227

```tl
pollAnswer#4b7d786a flags:# text:TextWithEntities option:bytes media:flags.0?MessageMedia added_by:flags.1?Peer date:flags.1?int = PollAnswer;
inputPollAnswer#199fed96 flags:# text:TextWithEntities media:flags.0?InputMedia = PollAnswer;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**pollAnswer**](constructor/pollAnswer) | A possible answer of a poll |
| [**inputPollAnswer**](constructor/inputPollAnswer) | NOTHING |