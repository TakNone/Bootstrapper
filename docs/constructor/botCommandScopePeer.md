# botCommandScopePeer

**Description** : *The specified bot commands will be valid only in a specific dialog*

**Layer** : 211

```tl
botCommandScopePeer#db9d897d peer:InputPeer = BotCommandScope;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>peer</mark> | [`InputPeer`](type/InputPeer) | The dialog |

---

## Type

[BotCommandScope](type/BotCommandScope)

---

## Example

```php
$botCommandScope = $client->botCommandScopePeer(
	peer : $client->inputPeerEmpty(),
);
```