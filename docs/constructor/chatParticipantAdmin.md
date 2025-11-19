# chatParticipantAdmin

**Description** : *Chat admin*

**Layer** : 218

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
	user_id : 283864270693999575,
	inviter_id : -6567508823325722586,
	date : 71,
);
```