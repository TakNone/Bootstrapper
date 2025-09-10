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
	chat_id : 6751781559501046108,
	participants : array(
		$client->chatParticipant(
			user_id : 967877226545990380,
			inviter_id : -1988699735636208461,
			date : 55,
		),
		$client->chatParticipantCreator(
			user_id : 6169985623199152370,
		),
		$client->chatParticipantAdmin(
			user_id : 6257493723184632849,
			inviter_id : -7118100261396973033,
			date : 42,
		),
	),
	version : 34,
);
```