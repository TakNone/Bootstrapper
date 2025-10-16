# updateShort

**Description** : *Shortened constructor containing info on one update not requiring auxiliary data*

**Layer** : 216

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
			id : 96,
			peer_id : $client->peerUser(...),
		),
		pts : 16,
		pts_count : 51,
	),
	date : 48,
);
```