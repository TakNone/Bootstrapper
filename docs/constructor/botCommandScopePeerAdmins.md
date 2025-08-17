# botCommandScopePeerAdmins

**Description** : *The specified bot commands will be valid for all admins of the specified group or supergroup*

**Layer** : 211

```tl
botCommandScopePeerAdmins#3fd863d1 peer:InputPeer = BotCommandScope;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The chat |

---

## Type

[BotCommandScope](type/BotCommandScope)

---

## Example

```php
$botCommandScope = $client->botCommandScopePeerAdmins(
	peer : $client->inputPeerEmpty(),
);
```