# chatParticipantAdmin

**Description** : *Chat admin*

**Layer** : 216

```tl
chatParticipantAdmin#a0933f5b user_id:long inviter_id:long date:int = ChatParticipant;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>user_id</mark> | [`long`](type/long) | ID of a group member that is admin |
| <mark>inviter_id</mark> | [`long`](type/long) | ID of the user that added the member to the group |
| <mark>date</mark> | [`int`](type/int) | Date when the user was added |

---

## Type

[ChatParticipant](type/ChatParticipant)

---

## Example

```php
$chatParticipant = $client->chatParticipantAdmin(
	user_id : 764342554246626467,
	inviter_id : 6602529509007464668,
	date : 9,
);
```