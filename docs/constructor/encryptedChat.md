# encryptedChat

**Description** : *Encrypted chat*

**Layer** : 211

```tl
encryptedChat#61f0d4c7 id:int access_hash:long date:int admin_id:long participant_id:long g_a_or_b:bytes key_fingerprint:long = EncryptedChat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | Chat ID |
| <mark>access_hash</mark> | [`long`](type/long) | Check sum dependent on the user ID |
| <mark>date</mark> | [`int`](type/int) | Date chat was created |
| <mark>admin_id</mark> | [`long`](type/long) | Chat creator ID |
| <mark>participant_id</mark> | [`long`](type/long) | ID of the second chat participant |
| <mark>g_a_or_b</mark> | [`bytes`](type/bytes) | B = g ^ b mod p, if the currently authorized user is the chat's creator,or A = g ^ a mod p otherwiseSee Wikipedia for more info |
| <mark>key_fingerprint</mark> | [`long`](type/long) | 64-bit fingerprint of received key |

---

## Type

[EncryptedChat](type/EncryptedChat)

---

## Example

```php
$encryptedChat = $client->encryptedChat(
	id : 29,
	access_hash : 6263905220622350983,
	date : 13,
	admin_id : 2099475228193176083,
	participant_id : -4632908555831345421,
	g_a_or_b : '?? ?LiveProto??Z>Y',
	key_fingerprint : -219378691953426050,
);
```