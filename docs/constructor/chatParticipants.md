# chatParticipants

**Description** : *Group members*

**Layer** : 216

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
	chat_id : -6133194362618031450,
	participants : array(
		$client->chatParticipant(
			user_id : -474255467641295197,
			inviter_id : 336365434223487984,
			date : 28,
		),
		$client->chatParticipantCreator(
			user_id : 1958112857969565054,
		),
		$client->chatParticipantAdmin(
			user_id : 6963332681312805208,
			inviter_id : -8566397826859953345,
			date : 43,
		),
	),
	version : 5,
);
```