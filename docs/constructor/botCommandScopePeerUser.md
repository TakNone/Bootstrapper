# botCommandScopePeerUser

**Description** : *The specified bot commands will be valid only for a specific user in the specified group or supergroup*

**Layer** : 211

```tl
botCommandScopePeerUser#a1321f3 peer:InputPeer user_id:InputUser = BotCommandScope;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat |
| <mark>user_id</mark> | [`InputUser`](type/InputUser) | The user |

---

## Type

[BotCommandScope](type/BotCommandScope)

---

## Example

```php
$botCommandScope = $client->botCommandScopePeerUser(
	peer : $client->inputPeerEmpty(),
	user_id : $client->inputUserEmpty(),
);
```