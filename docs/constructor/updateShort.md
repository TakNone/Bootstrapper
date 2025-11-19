# updateShort

**Description** : *Shortened constructor containing info on one update not requiring auxiliary data*

**Layer** : 218

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
			id : 60,
			peer_id : $client->peerUser(
				user_id : 7714754036524641629,
			),
		),
		pts : 10,
		pts_count : 26,
	),
	date : 20,
);
```