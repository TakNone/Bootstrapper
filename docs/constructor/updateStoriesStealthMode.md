# updateStoriesStealthMode

**Description** : *Indicates that stories stealth mode was activated*

**Layer** : 218

```tl
updateStoriesStealthMode#2c084dc1 stealth_mode:StoriesStealthMode = Update;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>stealth_mode</mark> | [`StoriesStealthMode`](type/StoriesStealthMode) | Information about the current stealth mode session |

---

## Type

[Update](type/Update)

---

## Example

```php
$update = $client->updateStoriesStealthMode(
	stealth_mode : $client->storiesStealthMode(
		active_until_date : 75,
		cooldown_until_date : 25,
	),
);
```