# stories.activateStealthMode

**Description** : *Activates stories stealth mode, see here » for more info*

**Layer** : 211

```tl
stories.activateStealthMode#57bbd166 flags:# past:flags.0?true future:flags.1?true = Updates;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **past** | [`flags.0?true`](type/true) | Whether to erase views from any stories opened in the past stories_stealth_past_period seconds », as specified by the client configuration |
| **future** | [`flags.1?true`](type/true) | Whether to hide future story views for the next stories_stealth_future_period seconds », as specified by the client configuration |

---

## Result

[Updates](type/Updates)

---

## Possible Errors

| Type | Code | Description |
| :---: | :---: | :--- |
| **PREMIUM_ACCOUNT_REQUIRED** | `400` | A premium account is required to execute this action |

---

## Example

```php
$updates = $client->stories->activateStealthMode(
	past : true,
	future : true,
);
```