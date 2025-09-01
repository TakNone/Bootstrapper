# encryptedChatDiscarded

**Description** : *Discarded or deleted chat*

**Layer** : 214

```tl
encryptedChatDiscarded#1e1c7c45 flags:# history_deleted:flags.0?true id:int = EncryptedChat;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **history_deleted** | [`flags.0?true`](type/true) | Whether both users of this secret chat should also remove all of its messages |
| <mark>id</mark> | [`int`](type/int) | Chat ID |

---

## Type

[EncryptedChat](type/EncryptedChat)

---

## Example

```php
$encryptedChat = $client->encryptedChatDiscarded(
	history_deleted : true,
	id : 5,
);
```