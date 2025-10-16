# storiesStealthMode

**Description** : *Information about the current stealth mode session*

**Layer** : 216

```tl
storiesStealthMode#712e27fd flags:# active_until_date:flags.0?int cooldown_until_date:flags.1?int = StoriesStealthMode;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| **active_until_date** | [`flags.0?int`](type/int) | The date up to which stealth mode will be active |
| **cooldown_until_date** | [`flags.1?int`](type/int) | The date starting from which the user will be allowed to re-enable stealth mode again |

---

## Type

[StoriesStealthMode](type/StoriesStealthMode)

---

## Example

```php
$storiesStealthMode = $client->storiesStealthMode(
	active_until_date : 43,
	cooldown_until_date : 78,
);
```