# chatParticipants

**Description** : *Group members*

**Layer** : 218

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
	chat_id : -5928165134401967509,
	participants : array(
		$client->chatParticipant(
			user_id : -4754613927449144880,
			inviter_id : -1643706612682998179,
			date : 76,
		),
		$client->chatParticipantCreator(
			user_id : -2709139444042893798,
		),
		$client->chatParticipantAdmin(
			user_id : 2192089333149633266,
			inviter_id : 9072908807529789200,
			date : 49,
		),
	),
	version : 39,
);
```