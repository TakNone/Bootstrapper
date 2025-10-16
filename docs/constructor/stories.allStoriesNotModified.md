# stories.allStoriesNotModified

**Description** : *The list of active \(or active and hidden\) stories has not changed*

**Layer** : 216

```tl
stories.allStoriesNotModified#1158fe3e flags:# state:string stealth_mode:StoriesStealthMode = stories.AllStories;
```

---

## Parameters

| Name | Type | Description |
| :---: | :---: | :--- |
| <mark>flags</mark> | [`#`](type/#) | Flags, see TL conditional fields |
| <mark>state</mark> | [`string`](type/string) | State to use to ask for updates |
| <mark>stealth_mode</mark> | [`StoriesStealthMode`](type/StoriesStealthMode) | Current stealth mode information |

---

## Type

[stories.AllStories](type/stories.AllStories)

---

## Example

```php
$storiesAllStories = $client->stories->allStoriesNotModified(
	state : 'NKTZSbBiXmx1dgPL',
	stealth_mode : $client->storiesStealthMode(
		active_until_date : 57,
		cooldown_until_date : 3,
	),
);
```