# updateEditMessage

**Description** : *A message was edited*

**Layer** : 233

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
		id : 95,
		peer_id : $client->peerUser(
			user_id : 7434830022456332112,
		),
	),
	pts : 73,
	pts_count : 98,
);
```