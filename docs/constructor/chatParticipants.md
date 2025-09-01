# chatParticipants

**Description** : *Group members*

**Layer** : 214

```tl
chatParticipants#3cbc93f8 chat_id:long participants:Vector<ChatParticipant> version:int = ChatParticipants;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>chat_id</mark> | [`long`](type/long) | Group identifier |
| <mark>participants</mark> | [`Vector<ChatParticipant>`](type/ChatParticipant) | List of group members |
| <mark>version</mark> | [`int`](type/int) | Group version number |

---

## Type

[ChatParticipants](type/ChatParticipants)

---

## Example

```php
$chatParticipants = $client->chatParticipants(
	chat_id : 7367752309343725861,
	participants : array(
		$client->chatParticipant(
			user_id : -3002909773773796175,
			inviter_id : 79627298772330613,
			date : 67,
		),
		$client->chatParticipantCreator(
			user_id : -925609305370561000,
		),
		$client->chatParticipantAdmin(
			user_id : 919791490312583883,
			inviter_id : 7947067656634272052,
			date : 40,
		),
	),
	version : 13,
);
```