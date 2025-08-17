# chatParticipants

**Description** : *Group members*

**Layer** : 211

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
	chat_id : 3799254464324771925,
	participants : array(
		$client->chatParticipant(
			user_id : -1356347323404064452,
			inviter_id : -1718520714802838997,
			date : 61,
		),
		$client->chatParticipantCreator(
			user_id : 6321880500798560726,
		),
		$client->chatParticipantAdmin(
			user_id : 8144580091167076853,
			inviter_id : -3231245940181866587,
			date : 88,
		),
	),
	version : 47,
);
```