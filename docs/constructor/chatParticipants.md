# chatParticipants

**Description** : *Group members*

**Layer** : 225

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
	chat_id : 8238620807975943982,
	participants : array(
		$client->chatParticipant(
			user_id : -4302862155031880148,
			inviter_id : -1104495037268839856,
			date : 76,
			rank : 'LE1QGHw2osq3CgBU',
		),
		$client->chatParticipantCreator(
			user_id : 5885928055277698248,
			rank : 'zDjxBQswMH2ZlYyg',
		),
		$client->chatParticipantAdmin(
			user_id : 3059530788142638183,
			inviter_id : -1361063082435276272,
			date : 23,
			rank : 'hAP1vMWEaH5zmDlO',
		),
	),
	version : 21,
);
```