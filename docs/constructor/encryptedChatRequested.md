# encryptedChatRequested

**Description** : *Request to create an encrypted chat*

**Layer** : 233

```tl
encryptedChatRequested#48f1d94c flags:# folder_id:flags.0?int id:int access_hash:long date:int admin_id:long participant_id:long g_a:bytes = EncryptedChat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **folder_id** | [`flags.0?int`](type/int) | Peer folder ID, for more info click here |
| <mark>id</mark> | [`int`](type/int) | Chat ID |
| <mark>access_hash</mark> | [`long`](type/long) | Check sum depending on user ID |
| <mark>date</mark> | [`int`](type/int) | Chat creation date |
| <mark>admin_id</mark> | [`long`](type/long) | Chat creator ID |
| <mark>participant_id</mark> | [`long`](type/long) | ID of second chat participant |
| <mark>g_a</mark> | [`bytes`](type/bytes) | A = g ^ a mod p, see Wikipedia |

---

## Type

[EncryptedChat](type/EncryptedChat)

---

## Example

```php
$encryptedChat = $client->encryptedChatRequested(
	folder_id : 34,
	id : 68,
	access_hash : -5227114153863339244,
	date : 56,
	admin_id : -5284619728232719332,
	participant_id : -3670427806625025769,
	g_a : "\x4c\x69\x76\x65\x50\x72\x6f\x74\x6f",
);
```