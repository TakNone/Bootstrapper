# encryptedChatWaiting

**Description** : *Chat waiting for approval of second participant*

**Layer** : 214

```tl
encryptedChatWaiting#66b25953 id:int access_hash:long date:int admin_id:long participant_id:long = EncryptedChat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>id</mark> | [`int`](type/int) | Chat ID |
| <mark>access_hash</mark> | [`long`](type/long) | Checking sum depending on user ID |
| <mark>date</mark> | [`int`](type/int) | Date of chat creation |
| <mark>admin_id</mark> | [`long`](type/long) | Chat creator ID |
| <mark>participant_id</mark> | [`long`](type/long) | ID of second chat participant |

---

## Type

[EncryptedChat](type/EncryptedChat)

---

## Example

```php
$encryptedChat = $client->encryptedChatWaiting(
	id : 12,
	access_hash : -5388919437992402299,
	date : 91,
	admin_id : 4833888342652068160,
	participant_id : -72902967102000664,
);
```