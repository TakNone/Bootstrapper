# chatParticipants

**Description** : *Contains the full list of members of basic groups &raquo;; is NOT usable for supergroups/channels*

**Layer** : 233

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
	chat_id : 2999499629354321588,
	participants : array(
		$client->chatParticipant(
			user_id : 1552659727889721089,
			inviter_id : -3148951965841205194,
			date : 83,
			rank : 'pishdP5MfVb0L9xS',
		),
		$client->chatParticipantCreator(
			user_id : 6218365386590479168,
			rank : '9G6vEco0VRKtuwkl',
		),
		$client->chatParticipantAdmin(
			user_id : 3208122579503807458,
			inviter_id : 912170306503512548,
			date : 52,
			rank : 'FXifU9PxaTwYvRuo',
		),
	),
	version : 42,
);
```