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
	chat_id : -3532408695456741837,
	participants : array(
		$client->chatParticipant(
			user_id : 2987244082095846163,
			inviter_id : 4789199253680485111,
			date : 33,
		),
		$client->chatParticipantCreator(
			user_id : -1191313098775574008,
		),
		$client->chatParticipantAdmin(
			user_id : -747786157279175628,
			inviter_id : 1939134892552610373,
			date : 59,
		),
	),
	version : 18,
);
```