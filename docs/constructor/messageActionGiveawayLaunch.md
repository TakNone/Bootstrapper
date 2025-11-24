# messageActionGiveawayLaunch

**Description** : *A giveaway was started*

**Layer** : 218

```tl
messageActionGiveawayLaunch#a80f51e4 flags:# stars:flags.0?long = MessageAction;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <del style = 'opacity : 0.4'>flags</del> | [`#`](type/#) | Flags, see TL conditional fields |
| **stars** | [`flags.0?long`](type/long) | For Telegram Star giveaways, the total number of Telegram Stars being given away |

---

## Type

[MessageAction](type/MessageAction)

---

## Example

```php
$messageAction = $client->messageActionGiveawayLaunch(
	stars : -5886529873135524757,
);
```