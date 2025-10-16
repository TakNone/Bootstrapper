# messages.updateColor

**Layer** : 216

```tl
messages.updateColor#684d214e flags:# for_profile:flags.1?true color:flags.2?PeerColor = Bool;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | NOTHING |
| **for_profile** | [`flags.1?true`](type/true) | NOTHING |
| **color** | [`flags.2?PeerColor`](type/PeerColor) | NOTHING |

---

## Result

[Bool](type/Bool)

---

## Example

```php
$bool = $client->messages->updateColor(
	for_profile : true,
	color : $client->peerColor(
		color : 62,
		background_emoji_id : -6715005302144694329,
	),
);
```