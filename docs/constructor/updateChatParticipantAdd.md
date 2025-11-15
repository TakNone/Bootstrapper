# updateChatParticipantAdd

**Description** : *New group member*

**Layer** : 216

```tl
updateChatParticipantAdd#3dda5451 chat_id:long user_id:long inviter_id:long date:int version:int = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Group ID |
| <mark>user_id</mark> | [`long`](type/long) | ID of the new member |
| <mark>inviter_id</mark> | [`long`](type/long) | ID of the user, who added member to the group |
| <mark>date</mark> | [`int`](type/int) | When was the participant added |
| <mark>version</mark> | [`int`](type/int) | Chat version number |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateChatParticipantAdd(
	chat_id : 1956620984152940632,
	user_id : 7066831609857777228,
	inviter_id : -9022243662162052346,
	date : 20,
	version : 58,
);
```