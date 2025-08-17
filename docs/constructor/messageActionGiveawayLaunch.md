# messageActionGiveawayLaunch

**Description** : *A giveaway was started*

**Layer** : 211

```tl
messageActionGiveawayLaunch#a80f51e4 flags:# stars:flags.0?long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **stars** | [`flags.0?long`](type/long) | For Telegram Star giveaways, the total number of Telegram Stars being given away |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGiveawayLaunch(
	stars : -8156320467510630191,
);
```