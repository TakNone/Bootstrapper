# Poll

**Description** : *Indicates a poll message*

**Layer** : 211

```tl
poll#58747131 id:long flags:# closed:flags.0?true public_voters:flags.1?true multiple_choice:flags.2?true quiz:flags.3?true question:TextWithEntities answers:Vector<PollAnswer> close_period:flags.4?int close_date:flags.5?int = Poll;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**poll**](constructor/poll) | Poll |