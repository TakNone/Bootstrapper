# aicompose.Tones

**Description** : *The list of saved AI composer tones &raquo; of the current user*

**Layer** : 233

```tl
aicompose.tonesNotModified#c1f46103 = aicompose.Tones;
aicompose.tones#6c9d0efe hash:long tones:Vector<AiComposeTone> users:Vector<User> = aicompose.Tones;
```

---

## Constructors

| Constructor | Description |
| :---: | :--- |
| [**aicompose.tonesNotModified**](constructor/aicompose.tonesNotModified) | The list of saved AI composer tones » hasn't changed since the last time it was fetched (i.e. the hash passed to aicompose.getTones is still valid) |
| [**aicompose.tones**](constructor/aicompose.tones) | The list of saved AI composer tones » of the current user |