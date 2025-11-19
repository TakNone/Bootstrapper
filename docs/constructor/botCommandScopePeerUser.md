# botCommandScopePeerUser

**Description** : *The specified bot commands will be valid only for a specific user in the specified group or supergroup*

**Layer** : 218

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
	peer : $client->get_input_peer(peer : '@LiveProtoChat'),
	user_id : $client->get_input_user(user : '@TakNone'),
);
```