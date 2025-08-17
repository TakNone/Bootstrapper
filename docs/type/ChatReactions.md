# ChatReactions

**Description** : *Available chat reactions*

**Layer** : 211

```tl
chatReactionsNone#eafc32bc = ChatReactions;
chatReactionsAll#52928bca flags:# allow_custom:flags.0?true = ChatReactions;
chatReactionsSome#661d4037 reactions:Vector<Reaction> = ChatReactions;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**chatReactionsNone**](constructor/chatReactionsNone) | No reactions are allowed |
| [**chatReactionsAll**](constructor/chatReactionsAll) | All reactions or all non-custom reactions are allowed |
| [**chatReactionsSome**](constructor/chatReactionsSome) | Some reactions are allowed |