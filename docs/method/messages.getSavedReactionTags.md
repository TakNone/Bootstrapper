# messages.getSavedReactionTags

**Description** : *Fetch the full list of saved message tags created by the user*

**Layer** : 211

```tl
messages.getSavedReactionTags#3637e05b flags:# peer:flags.0?InputPeer hash:long = messages.SavedReactionTags;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **peer** | [`flags.0?InputPeer`](type/InputPeer) | If set, returns tags only used in the specified saved message dialog |
| <mark>hash</mark> | [`long`](type/long) | Hash used for caching, for more info click here |

---

## Result

[messages.SavedReactionTags](type/messages.SavedReactionTags)

---

## Example

```php
$messagesSavedReactionTags = $client->messages->getSavedReactionTags(
	peer : $client->inputPeerEmpty(),
	hash : -2886903535498117344,
);
```