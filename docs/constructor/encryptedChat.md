# encryptedChat

**Description** : *Encrypted chat*

**Layer** : 233

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
	id : 98,
	access_hash : 9005601041612088653,
	date : 58,
	admin_id : 1207733532226909283,
	participant_id : 218156304018773289,
	g_a_or_b : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
	key_fingerprint : -5409943006491887658,
);
```