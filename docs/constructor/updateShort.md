# updateShort

**Description** : *Shortened constructor containing info on one update not requiring auxiliary data*

**Layer** : 222

```tl
updateShort#78d4dec1 update:Update date:int = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>update</mark> | [`Update`](type/Update) | Update |
| <mark>date</mark> | [`int`](type/int) | Date of event |

---

## Type

[Updates](type/Updates)

---

## Example

```php
$updates = $client->updateShort(
	update : $client->updateNewMessage(
		message : $client->messageEmpty(
			id : 66,
			peer_id : $client->peerUser(
				user_id : -2756357346549023285,
			),
		),
		pts : 6,
		pts_count : 56,
	),
	date : 94,
);
```