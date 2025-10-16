# updateEditMessage

**Description** : *A message was edited*

**Layer** : 216

```tl
updateEditMessage#e40370a3 message:Message pts:int pts_count:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>message</mark> | [`Message`](type/Message) | The new edited message |
| <mark>pts</mark> | [`int`](type/int) | PTS |
| <mark>pts_count</mark> | [`int`](type/int) | PTS count |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateEditMessage(
	message : $client->messageEmpty(
		id : 86,
		peer_id : $client->peerUser(
			user_id : -8355288684225736205,
		),
	),
	pts : 19,
	pts_count : 96,
);
```